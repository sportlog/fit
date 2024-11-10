<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Generator;

use DateTime;
use Exception;
use Nette\PhpGenerator\{ClassType, Literal, PhpFile, PsrPrinter, Type};
use Sportlog\FIT\Profile\{Types\MesgNum, Field, Message, ProfileType};
use Sportlog\FIT\Profile\Types\FitBaseType;

/**
 * A quick & dirty, hacky, ugly generator for all messages defined
 * in the C# source file 'Profile.cs' of the offical FIT SDK.
 * All types are generated from a CSV export of the profile.xls
 * of the offical FIT SDK.
 * 
 * How to generate:
 * - Grab FIT SDK (https://developer.garmin.com/fit/download/)
 * - Copy new Profile.cs (from cs/Dynastream/Fit) to this folder
 * - Export Profile.xlsx qs CSV and copy to this folder
 */
class MessageGenerator
{
    /**
     * FIT-SDK Version
     */
    const FIT_SDK_VERSION = '21.141';
    const MESSAGE_START = "Mesg newMesg = new Mesg(";
    const FIELD_START = "newMesg.SetField(new Field(";
    const MESSAGE_END = "return newMesg";
    const INVALID_MESSAGE = 'Invalid';

    const PROFILETYPE_START = 'public enum Type';
    const PROFILETYPE_END = '}';

    // Some types are reserved PHP keywords and cannot
    // act as classname.
    const RENAMED_TYPES = ['Switch' => 'FitSwitch'];

    /**
     * Create profile types by parsing the CS-File.
     */
    public function writeProfileTypes(string $fileInput, string $outputPath): void
    {
        $handle = fopen($fileInput, "r");

        try {
            /** @var array|null $profileTypes */
            $profileTypes = null;

            while (($line = fgets($handle)) !== false) {
                $trimmed = trim($line);
                if (!is_null($profileTypes)) {
                    if ($trimmed === '' || str_starts_with($trimmed, "{")) {
                        continue;
                    } else if (str_starts_with($trimmed, self::PROFILETYPE_END)) {
                        break;
                    } else {
                        $profileTypes[] = str_replace(',', '', $trimmed);
                    }
                }

                if (str_starts_with($trimmed, self::PROFILETYPE_START)) {
                    $profileTypes = [];
                }
            }

            if (is_null($profileTypes) || count($profileTypes) === 0) {
                throw new Exception('no profile types found');
            }

            $file = $this->createFile();
            $namespace = $file->addNamespace('Sportlog\\FIT\\Profile');
            $profileType = $namespace->addClass('ProfileType');
            foreach ($profileTypes as $value) {
                // $profileType->addCase(str_replace(',', '', $value), $value);
                $profileType->addConstant(strtoupper(str_replace(',', '', $value)), $value);
            }
            $printer = new PsrPrinter();
            $this->writeFile(join(DIRECTORY_SEPARATOR, [$outputPath, "ProfileType.php"]), $printer->printFile($file));
        } finally {
            fclose($handle);
        }
    }

    /**
     * Creates the Profile-Types (/profile/types)
     *
     * @param string $fileInput
     * @param string $outputPath
     * @return void
     */
    public function writeTypes(string $fileInput, string $outputPath): int
    {
        $handle = fopen($fileInput, "r");

        try {
            $printer = new PsrPrinter();
            $files = $this->getTypes($handle);
            foreach ($files as $filename => $file) {
                $path = join(DIRECTORY_SEPARATOR, [$outputPath, 'Types', "{$filename}.php"]);
                $this->writeFile($path, $printer->printFile($file));
            }

            return count($files);
        } finally {
            fclose($handle);
        }
    }

    private function getTypes(mixed $handle): array
    {
        $files = [];

        $first = true;
        $currentType = null;
        $currentTypeValues = [];
        while (($line = fgets($handle)) !== false) {
            if ($first) {
                $first = false;
                continue;
            }

            if (str_starts_with($line, ",")) {
                // Value for a type

                if ($currentType === null) {
                    throw new Exception('type missing');
                }

                $def = explode(",", $line);

                // ,,cable_crunch,1,
                if (str_starts_with($def[4], "Deprecated")) {
                    continue;
                }

                $currentTypeValues[$def[2]] = $def[3];
            } else {
                if ($currentType !== null) {
                    if (isset(self::RENAMED_TYPES[$currentType])) {
                        $currentType = self::RENAMED_TYPES[$currentType];   // get alternate name for PHP keywords
                    }

                    $files[$currentType] = $this->createType($currentType, $currentTypeValues);
                    $currentType = null;
                }

                $currentTypeValues = [];
                $def = explode(",", $line);
                $typeParts = explode("_", $def[0]);
                $currentType = "";
                foreach ($typeParts as $typePart) {
                    $currentType .= ucfirst($typePart);
                }
            }
        }

        if ($currentType !== null) {
            if (isset(self::RENAMED_TYPES[$currentType])) {
                $currentType = self::RENAMED_TYPES[$currentType];   // get alternate name for PHP keywords
            }

            $files[$currentType] = $this->createType($currentType, $currentTypeValues);
            $currentType = null;
        }

        return $files;
    }

    private function createType(string $classname, array $values): PhpFile
    {
        $file = $this->createFile();
        $namespace = $file->addNamespace('Sportlog\\FIT\\Profile\\Types');
        $enum = $namespace->addEnum($classname);

        // $class->setFinal(true)
        //     ->addComment("{$classname} constants");

        foreach ($values as $key => $value) {
            $constName = $this->snakeToPascal($key);
            // Some constants start with a digit, which is not allowed;
            // So prefix those with an underscore
            $constName = is_numeric(substr($constName, 0, 1)) ? "_{$constName}" : $constName;
            // $class->addConstant($constName, str_starts_with($value, '0x') ? hexdec($value) : intval($value));
            $enum->addCase($constName, str_starts_with($value, '0x') ? hexdec($value) : intval($value));
        }

        return $file;
    }

    public function writeMessages(string $fileInput, string $outputPath): int
    {
        $handle = fopen($fileInput, "r");
        try {
            // Parse C# file and create messages
            $files = $this->generateMessages($handle);

            // Manually add invalid messge
            $invalidFile = $this->createFile();
            $invalidClass = $this->createMessageClass($invalidFile, self::INVALID_MESSAGE);
            $files[$invalidClass->getName()] = $invalidFile;

            $printer = new PsrPrinter();
            foreach ($files as $filename => $content) {
                $path = join(DIRECTORY_SEPARATOR, [$outputPath, 'Messages', "{$filename}.php"]);
                $this->writeFile($path, $printer->printFile($content));
            }

            $msgFactory = 'MessageFactory';
            $this->writeFile(
                join(DIRECTORY_SEPARATOR, [$outputPath, "{$msgFactory}.php"]),
                $printer->printFile($this->createMessageFactory($msgFactory, array_keys($files)))
            );

            return count($files);
        } finally {
            fclose($handle);
        }
    }

    private function underscorize(string $str): string
    {
        $arr = explode(" ", trim(preg_replace("([A-Z])", " $0", $str)));
        return join("_", $arr);
    }

    private function createMessageFactory(string $name, array $uses): PhpFile
    {
        $factory = $this->createFile();
        $namespace = $factory->addNamespace('Sportlog\\FIT\\Profile');

        foreach ($uses as $use) {
            $namespace->addUse("Sportlog\\FIT\\Profile\\Messages\\{$use}");
        }

        $namespace->addUse("Sportlog\\FIT\\Profile\\Types\\MesgNum");

        $class = $namespace->addClass($name)
            ->addComment("Factory for creating a new message instance");
        $method = $class->addMethod('createMessage')
            ->addComment("Creates the message instance for the global message number")
            ->setReturnType(Message::class)
            ->setStatic();

        $paramName = 'globalMessageNumber';
        $method->addParameter($paramName)
            ->setType(Type::Int);

        $method->addBody("return match (\$globalMessageNumber) {");

        $cnt = count($uses);
        $i = 1;
        foreach ($uses as $use) {
            $file = str_replace('Message', '', $use);
            if ($cnt !== $i) {
                $method->addBody(str_repeat(" ", 4) . "MesgNum::{$file}->value => new {$use}(),");
            } else {
                $method->addBody(str_repeat(" ", 4) . "default => new {$use}()");
            }
            $i++;
        }

        $method->addBody("};");

        return $factory;
    }

    private function generateMessages($handle): array
    {
        $file = null;
        $class = null;
        $files = [];

        // $fitBaseTypeReflection = new ReflectionClass(FitBaseType::class);
        // $fitBaseTypeConstants = [];
        // foreach ($fitBaseTypeReflection->getReflectionConstants() as $fitBaseTypeReflectionConstant) {
        //     $fitBaseTypeConstants[$fitBaseTypeReflectionConstant->getValue()] = $fitBaseTypeReflectionConstant->getName();
        // }

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
                $scale = (float)$scale;

                $phpTypes = [];
                $phpProfileType = $this->getPhpTypeFromProfileType($profileType, $scale, (float)$offset);
                $phpTypes[] = $phpProfileType;
                if ($phpProfileType !== Type::Mixed && $phpProfileType !== DateTime::class && $phpProfileType !== Type::String) {
                    $phpTypes[] = Type::Array;
                }
                if ($phpProfileType !== Type::Mixed) {
                    $phpTypes[] = Type::Null;
                }

                // $fitBaseTypeConstants[(int)$type]

                /** @var ClassType $class */
                $class->addAttribute(Field::class, [
                    $name,
                    (int)$num,
                    new Literal("FitBaseType::" . FitBaseType::from((int)$type)->name . "->value"),
                    $scale,
                    (float)$offset,
                    $units,
                    $accumulated === 'true',
                    new Literal("ProfileType::" . strtoupper($profileType))
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
        $namespace = $file->addNamespace('Sportlog\\FIT\\Profile\\Messages');
        $namespace->addUse(\DateTime::class)
            ->addUse(Message::class)
            ->addUse(Field::class)
            ->addUse(FitBaseType::class)
            ->addUse(ProfileType::class)
            ->addUse(MesgNum::class);

        $classname = $classId . "Message";
        $class = $namespace->addClass($classname);

        $class->setFinal(true)
            ->addComment("{$classname} message")
            ->setExtends(Message::class)
            ->addMethod('__construct')
            ->addComment("Creates a new message instance")
            ->setBody('parent::__construct(?, ?);', [
                $classId,
                $classId === self::INVALID_MESSAGE ? -1 : new Literal(sprintf('MesgNum::%s->value', $classId))
            ]);

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
            ->addComment(sprintf('FIT %s SDK', self::FIT_SDK_VERSION));

        return $factory;
    }

    private function getPhpTypeFromProfileType(string $profileType, float $scale, float $offset): string
    {
        switch ($profileType) {
            case ProfileType::BOOL:
                return Type::Bool;

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
                return $scale === 1.0 && $offset === 0.0 ? Type::Int : Type::Float;

            case ProfileType::LOCALDATETIME:
            case ProfileType::DATETIME:
                return DateTime::class;

            case ProfileType::STRING:
                return Type::String;

            case ProfileType::SINT64:
            case ProfileType::FLOAT32:
            case ProfileType::FLOAT64:
            case ProfileType::UINT64:
            case ProfileType::UINT64Z:
                return Type::Float;

            case ProfileType::BYTE:
                return Type::Mixed;

            default:
                return Type::Int;
        }
    }

    private function writeFile(string $filename, string $content): void
    {
        $exists = file_exists($filename);
        if ($exists) {
            unlink($filename);
        }
        $handle = fopen($filename, 'a') or die("could not create file '{$filename}'");

        if (!$exists) {
            // Now UTF-8 - Add byte order mark
            fwrite($handle, pack("CCC", 0xef, 0xbb, 0xbf));
        }

        fwrite($handle, $content);
        fclose($handle);
    }

    private function snakeToPascal(string $input): string
    {
        return ucfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $input))));
    }
}
