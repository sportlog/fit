<?php

namespace FIT\Generator;

use FIT\Profile\Field;
use FIT\Profile\Message;
use FIT\Profile\MessageNumber;
use FIT\Profile\ProfileType;
use FIT\FitBaseType;
use Nette\PhpGenerator\Literal;
use Nette\PhpGenerator\PhpFile;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PsrPrinter;
use Nette\PhpGenerator\Type;
use ReflectionClass;

class MessageGenerator
{
    const MESSAGE_START = "Mesg newMesg = new Mesg(";
    const FIELD_START = "newMesg.SetField(new Field(";
    const MESSAGE_END = "return newMesg";

    public function generateAndWriteFiles(string $fileInput, string $outputPath = ''): int
    {
        $handle = fopen($fileInput, "r");
        try {
            $files = $this->generateFiles($handle);
            foreach ($files as $filename => $content) {
                $path = $outputPath !== '' ? join(DIRECTORY_SEPARATOR, [$outputPath, $filename]) : $filename;
                $this->writeFile($path, $content);
            }

            return count($files);
        } finally {
            fclose($handle);
        }
    }

    private function generateFiles($handle): array
    {
        $printer = new PsrPrinter();
        $file = null;
        $class = null;
        $fields = [];
        $files = [];

        $fitBaseTypeReflection = new ReflectionClass(FitBaseType::class);
        $fitBaseTypeConstants = [];
        foreach($fitBaseTypeReflection->getReflectionConstants() as $fitBaseTypeReflectionConstant) {
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

                $file = new PhpFile();
                $file
                ->setStrictTypes() // adds declare(strict_types=1)
                    ->addComment("****WARNING****  This file is auto-generated! Do NOT edit.")
                    ->addComment("Profile Version = 21.40Release");
                    

                $namespace = $file->addNamespace('FIT\\Profile\\Message');
                $namespace->addUse(\DateTime::class)
                    ->addUse(Message::class)
                    ->addUse(Field::class)
                    ->addUse(FitBaseType::class)
                    ->addUse(ProfileType::class)
                    ->addUse(MessageNumber::class);

                $classId = substr($line, $startIndex, $endIndex - $startIndex);
                $classname = $classId . "Message";
                $class = $namespace->addClass($classname);

                $class->setFinal(true)
                    ->addComment("{$classname} message")
                    ->setExtends(Message::class);
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

                $phpType = Type::MIXED;
                switch ($profileType) {
                    case ProfileType::BOOL:
                        $phpType = Type::BOOL;
                        break;

                    case ProfileType::UINT8:
                    case ProfileType::SINT8:
                    case ProfileType::UINT16:
                    case ProfileType::SINT16:
                    case ProfileType::UINT16Z:
                    case ProfileType::UINT32:
                    case ProfileType::UINT32Z;
                    case ProfileType::SINT32:
                        $phpType = Type::INT;
                        break;

                    case ProfileType::LOCALDATETIME:
                    case ProfileType::DATETIME:
                        $phpType = \DateTime::class;
                        break;

                    case ProfileType::STRING:
                        $phpType = Type::STRING;
                        break;

                    case ProfileType::SINT64:
                    case ProfileType::FLOAT32:
                    case ProfileType::FLOAT64:
                    case ProfileType::UINT64:
                    case ProfileType::UINT64Z:
                        $phpType = Type::FLOAT;
                        break;

                    case ProfileType::BYTE:
                        $phpType = Type::MIXED;

                    default:
                        $phpType = Type::INT;
                        break;
                }

                /** @var ClassType $class */
                /*$class->addProperty(lcfirst($name))
                    ->setType($phpType)
                    ->setNullable()
                    ->addAttribute(Field::class, [$name, (int)$num, 
                    new Literal("FitBaseType::" . $fitBaseTypeConstants[(int)$type]), (float)$scale, (float)$offset, $units, 
                    $accumulated === 'true', new Literal("ProfileType::" . strtoupper($profileType))]);*/

                $class->addMethod("get{$name}")    
                    ->setPublic()
                    ->setReturnType($phpType)
                    ->setReturnNullable()
                    ->setBody('return $this->getValue(?);', [(int)$num]);


                $fields[] = "new Field(" . join(", ", ["'{$name}'", (int)$num, new Literal("FitBaseType::" . $fitBaseTypeConstants[(int)$type]),
                 number_format((float)$scale, 1, '.', ''), number_format((float)$offset, 1, '.', ''),
                  "'{$units}'", $accumulated, new Literal("ProfileType::" . strtoupper($profileType))]) . ")";


            }

            if (str_starts_with($line, self::MESSAGE_END) && !is_null($file)) {
                $method = $class->addMethod('__construct')
                ->addComment("Creates a new message instance")
                ->setBody(sprintf('parent::__construct("%1$s", MessageNumber::%1$s, [%3$s%2$s%3$s]);', $classId, join(", " . PHP_EOL . "    ", $fields), PHP_EOL));

                $files[$class->getName() . ".php"] = $printer->printFile($file);
                $class = null;
                // echo print_r($fields, true) . "<br>";
                $fields = [];
            }
        }

        return $files;
    }

    private function writeFile(string $filename, string $content): void
    {
        $exists = file_exists($filename);
        if ($exists) {
            unlink($filename);
        }
        $handle = fopen($filename, 'a') or die("konnte File '{$filename}' in '" . getcwd() . "' nicht erstellen");

        if (!$exists) {
            // Now UTF-8 - Add byte order mark
            fwrite($handle, pack("CCC", 0xef, 0xbb, 0xbf));
        }

        fwrite($handle, $content);
        fclose($handle);
    }
}