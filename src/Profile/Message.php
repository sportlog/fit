<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Profile;

use ArrayIterator;
use DateTime;
use Exception;
use FIT\FitBaseType;
use FIT\FitBaseTypeDefinition;
use IteratorAggregate;
use ReflectionClass;
use Stringable;

/**
 * Base class for all FIT messages.
 * Defines the FIT fields contained within each FIT message.
 */
abstract class Message implements IteratorAggregate, Stringable
{
    private static array $reflectionProperties = [];
    /**
     * Field associated with this message
     * 
     * @var Field[]
     */
    private array $fields = [];
     /**
     * Field values, where the field number is used as index.
     * There may be more values stored in the array than fields
     * exist, if the message contains unknown fields.
     * 
     * @var mixed[]
     */
    private array $values = [];

    /**
     * Create new instance and assign fields.
     */
    public function __construct(private string $name, private int $number)
    {
        foreach (self::getReflectionProperties(static::class) as $field) {
            $this->addField($field);
        }
    }

    private static function getReflectionProperties(string $class): array
    {
        if (!isset(self::$reflectionProperties[$class])) {
            $reflection = new ReflectionClass($class);
            $attributes = $reflection->getAttributes(Field::class);

            $fields = [];
            foreach ($attributes as $attribute) {
                $fields[] = $attribute->newInstance();
            }

            self::$reflectionProperties[$class] = $fields;
        }

        return self::$reflectionProperties[$class];
    }

    public function addField(Field $field): void
    {
        $this->fields[$field->getNumber()] = $field;
    }

    /**
     * Gets the message number, which must correspond
     * to one value defined in MessageInterface
     *
     * @return integer
     */
    public function getGlobalMessageNumber(): int
    {
        return $this->number;
    }

    /**
     * Gets the name of the message.
     *
     * @return string
     */
    public function getMessageName(): string
    {
        return $this->name;
    }

    public function getFieldValue(int|string $fieldNumber): mixed
    {
        return isset($this->values[$fieldNumber]) ? $this->values[$fieldNumber] : null;
    }

    public function setFieldValue(int $fieldNumber, mixed $value, FitBaseTypeDefinition $fitBaseType): void
    {
        $field = $this->getField($fieldNumber);
        if ($field !== null) {
            $baseType = FitBaseType::fromType($field->getType());
            if ($baseType !== $fitBaseType) {
                throw new Exception(sprintf(
                    'mismatch between base type in FIT message and base type declared in meta data of property "%s::%s".
                    Base type from FIT file is "%s", base type from property meta is "%s"',
                    self::class,
                    $field->getName(),
                    $fitBaseType->getName(),
                    $baseType->getName()
                ));
            }

            $value = $this->convertValueToFieldType($field, $value);
        }

        $this->values[$fieldNumber] = $value;
    }

    public function getField(int $fieldNumber): ?Field
    {
        return isset($this->fields[$fieldNumber]) ? $this->fields[$fieldNumber] : null;
    }

    private function convertValueToFieldType(Field $field, mixed $value): mixed
    {
        switch ($field->getProfileType()) {
            case ProfileType::BOOL:
                return $value !== 0;

            case ProfileType::UINT8:
            case ProfileType::SINT8:
            case ProfileType::UINT16:
            case ProfileType::SINT16:
            case ProfileType::UINT16Z:
            case ProfileType::UINT32:
            case ProfileType::UINT32Z;
            case ProfileType::SINT32:
                $value /= $field->getScale();
                $value -= $field->getOffset();

                return intval($value);

            case ProfileType::LOCALDATETIME:
            case ProfileType::DATETIME:
                $date = new DateTime();
                $date->setTimestamp(intval($value) + 631065600);
                return $date;

            default:
                return $value;
        }
    }
    
    /**
     * Gets an iterator.
     *
     * {@inheritDoc}
     * @see IteratorAggregate::getIterator()
     */
    public function getIterator()
    {
        return new ArrayIterator($this->values);
    }

    public function __toString()
    {
        return sprintf('%s (%s)', $this->getMessageName(), $this->getGlobalMessageNumber());
    }
}
