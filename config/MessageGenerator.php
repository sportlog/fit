<?php
declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Generator;

use DateTime;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\MessageNumber;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\FitBaseType;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PsrPrinter;
use Nette\PhpGenerator\Type;
use ReflectionClass;

/**
 * A quick & dirty generator for all messages defined
 * in the C# source file 'Profile.cs' of the
 * offical FIT SDK.
 */
class MessageGenerator
{
    const MESSAGE_START = "Mesg newMesg = new Mesg(";
    const FIELD_START = "newMesg.SetField(new Field(";
    const MESSAGE_END = "return newMesg";

    public function generateAndWriteFiles(string $fileInput, string $outputPath = ''): int
    {
        $handle = fopen($fileInput, "r");
        try {
            // Parse C# file and create messages
            $files = $this->generateMessages($handle);

            // Manually add invalid messge
            $invalidFile = $this->createFile();
            $invalidClass = $this->createMessageClass($invalidFile, "Invalid");
            $files[$invalidClass->getName()] = $invalidFile;

            $printer = new PsrPrinter();
            foreach ($files as $filename => $content) {
                $filenameFinal = "{$filename}.php";
                $path = $outputPath !== '' ? join(DIRECTORY_SEPARATOR, [$outputPath, $filenameFinal]) : $filenameFinal;
                $this->writeFile($path, $printer->printFile($content));
            }

            $msgFactory = 'MessageFactory';
            $this->writeFile(
                join(DIRECTORY_SEPARATOR, [$outputPath, '..', "{$msgFactory}.php"]),
                $printer->printFile($this->createMessageFactory($msgFactory, array_keys($files)))
            );

            return count($files);
        } finally {
            fclose($handle);
        }
    }

    private function createMessageFactory(string $name, array $uses): PhpFile
    {
        $factory = $this->createFile();
        $namespace = $factory->addNamespace('Sportlog\\FIT\\Profile');

        foreach ($uses as $use) {
            $namespace->addUse("Sportlog\\FIT\\Profile\\Message\\{$use}");
        }

        $class = $namespace->addClass($name)
            ->addComment("Factory for creating a new message instance");
        $method = $class->addMethod('createMessage')
            ->addComment("Creates the message instance for the global message number")
            ->setReturnType(Message::class)
            ->setStatic();

        $paramName = 'globalMessageNumber';
        $method->addParameter($paramName)
            ->setType(Type::INT);

        $method->addBody("switch (\$globalMessageNumber) {");

        $cnt = count($uses);
        $i = 1;
        foreach ($uses as $use) {
            $file = str_replace('Message', '', $use);
            if ($cnt !== $i) {
                $method->addBody(str_repeat(" ", 4) . "case MessageNumber::{$file}:");
            } else {
                $method->addBody(str_repeat(" ", 4) . "default:");
            }

            $method->addBody(str_repeat(" ", 8) . "return new {$use}();");
            $i++;
        }

        $method->addBody("}");

        return $factory;
    }

    private function generateMessages($handle): array
    {
        $file = null;
        $class = null;
        $files = [];

        $fitBaseTypeReflection = new ReflectionClass(FitBaseType::class);
        $fitBaseTypeConstants = [];
        foreach ($fitBaseTypeReflection->getReflectionConstants() as $fitBaseTypeReflectionConstant) {
            $fitBaseTypeConstants[$fitBaseTypeReflectionConstant->getValue()] = $fitBaseTypeReflectionConstant->getName();
        }

        while (($line = fgets($handle)) !== false) {
            $line = trim($line);

            // process the line read.
            if (str_starts_with($line, self::MESSAGE_START)) {
                // Example line:
                // Mesg newMesg = new Mesg("FileId", MesgNum.FileId);
                $startIndex = strlen(self::MESSAGE_START) + 1;
                $endIndex = strrpos($line, '"');
                $classId = substr($line, $startIndex, $endIndex - $startIndex);

                $file = $this->createFile();
                $class = $this->createMessageClass($file, $classId);
            }

            if (str_starts_with($line, self::FIELD_START) && !is_null($file)) {
                // Example line: 
                // newMesg.SetField(new Field("Product", 2, 132, 1, 0, "", false, Type.Uint16));
                $startIndex = strlen(self::FIELD_START);
                $endIndex = strrpos($line, '));');
                $fieldCtor = substr($line, $startIndex, $endIndex - $startIndex);
                // $class->addProperty($property);
                $args = explode(", ", $fieldCtor);

                list($name, $num, $type, $scale, $offset, $units, $accumulated, $profileType) = $args;
                $profileType = substr($profileType, strlen("Type."));
                $name = substr($name, 1, strlen($name) - 2);
                $units = substr($units, 1, strlen($units) - 2);

                $phpTypes = [];
                $phpProfileType = $this->getPhpTypeFromProfileType($profileType, (float)$scale, (float)$offset);
                $phpTypes[] = $phpProfileType;
                if ($phpProfileType !== Type::MIXED && $phpProfileType !== DateTime::class) {
                    $phpTypes[] = Type::ARRAY;
                }
                if ($phpProfileType !== Type::MIXED) {
                    $phpTypes[] = Type::NULL;
                }

                /** @var ClassType $class */
                $class->addAttribute(Field::class, [
                    $name, (int)$num,
                    new Literal("FitBaseType::" . $fitBaseTypeConstants[(int)$type]), (float)$scale, (float)$offset, $units,
                    $accumulated === 'true', new Literal("ProfileType::" . strtoupper($profileType))
                ]);

                $splittedName = trim(strtolower(join(" ", preg_split('/(?=[A-Z])/', $name))));

                $method = $class->addMethod("get{$name}")
                    ->setPublic()
                    ->setReturnType(join("|", $phpTypes))
                    ->addComment("Gets the {$splittedName}")
                    ->setBody('return $this->getFieldValue(?);', [(int)$num]);
            }

            if (str_starts_with($line, self::MESSAGE_END) && !is_null($file)) {
                $files[$class->getName()] = $file;
                $class = null;
            }
        }

        return $files;
    }

    private function createMessageClass(PhpFile $file, string $classId): ClassType
    {
        $namespace = $file->addNamespace('Sportlog\\FIT\\Profile\\Message');
        $namespace->addUse(\DateTime::class)
            ->addUse(Message::class)
            ->addUse(Field::class)
            ->addUse(FitBaseType::class)
            ->addUse(ProfileType::class)
            ->addUse(MessageNumber::class);

        $classname = $classId . "Message";
        $class = $namespace->addClass($classname);

        $class->setFinal(true)
            ->addComment("{$classname} message")
            ->setExtends(Message::class)
            ->addMethod('__construct')
            ->addComment("Creates a new message instance")
            ->setBody('parent::__construct(?, ?);', [$classId, new Literal("MessageNumber::{$classId}")]);

        return $class;
    }

    private function createFile(): PhpFile
    {
        $factory = new PhpFile();
        $factory
            ->setStrictTypes() // adds declare(strict_types=1)
            ->addComment("FIT decoder")
            ->addComment("")
            ->addComment("@license MIT License")
            ->addComment("")
            ->addComment("****WARNING****  This file is auto-generated! Do NOT edit.")
            ->addComment("Profile Version = 21.40Release");

        return $factory;
    }

    private function getPhpTypeFromProfileType(string $profileType, float $scale, float $offset): string
    {
        switch ($profileType) {
            case ProfileType::BOOL:
                return Type::BOOL;

            case ProfileType::UINT8:
            case ProfileType::SINT8:
            case ProfileType::UINT16:
            case ProfileType::SINT16:
            case ProfileType::UINT16Z:
            case ProfileType::UINT32:
            case ProfileType::UINT32Z;
            case ProfileType::SINT32:
                // The raw value will be divided through the scale.
                // So if scale is not the default (1.0), this might
                // result in a float.
                return $scale === 1.0 && $offset === 0.0 ? Type::INT : Type::FLOAT;

            case ProfileType::LOCALDATETIME:
            case ProfileType::DATETIME:
                return DateTime::class;

            case ProfileType::STRING:
                return Type::STRING;

            case ProfileType::SINT64:
            case ProfileType::FLOAT32:
            case ProfileType::FLOAT64:
            case ProfileType::UINT64:
            case ProfileType::UINT64Z:
                return Type::FLOAT;

            case ProfileType::BYTE:
                return Type::MIXED;

            default:
                return Type::INT;
        }
    }

    private function writeFile(string $filename, string $content): void
    {
        $exists = file_exists($filename);
        if ($exists) {
            unlink($filename);
        }
        $handle = fopen($filename, 'a') or die("coult not create file '{$filename}'");

        if (!$exists) {
            // Now UTF-8 - Add byte order mark
            fwrite($handle, pack("CCC", 0xef, 0xbb, 0xbf));
        }

        fwrite($handle, $content);
        fclose($handle);
    }
}
