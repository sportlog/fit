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
     * Fields associated with this message.
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
        $this->fields = self::getReflectionProperties(static::class);
    }

    private static function getReflectionProperties(string $class): array
    {
        if (!isset(self::$reflectionProperties[$class])) {
            $reflection = new ReflectionClass($class);
            $attributes = $reflection->getAttributes(Field::class);

            $fields = [];
            foreach ($attributes as $attribute) {
                $field = $attribute->newInstance();
                $fields[$field->getNumber()] = $field;
            }

            self::$reflectionProperties[$class] = $fields;
        }

        return self::$reflectionProperties[$class];
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

    /**
     * Gets a field value.
     */
    public function getFieldValue(int $fieldNumber): mixed
    {
        $value = isset($this->values[$fieldNumber]) ? $this->values[$fieldNumber] : null;
        if ($value === null) {
            return null;
        }

        $field = $this->getField($fieldNumber);
        return ($field !== null) ? $this->convertValueToFieldType($field, $value) : $value;
    }

    /**
     * Sets a field value.
     * @throws Exception Base type in field meta data is not identical to the base type from FIT file definition
     */
    public function setFieldValue(int $fieldNumber, mixed $value, FitBaseTypeDefinition $fitBaseType): void
    {
        // Get the field.
        // If there is no such field the FIT file provides data not specified in the FIT SDK.
        // Store the data anyway even if it's unknown how to interprete it and therefore useless.
        $field = $this->getField($fieldNumber);
        if ($field !== null) {
            $baseType = $field->getTypeDefinition();
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

            if (
                $field->getTypeDefinition()->isNumeric() &&
                ($field->getScale() !== Field::DEFAULT_SCALE || $field->getOffset() !== Field::DEFAULT_OFFSET)
            ) {
                // If scale and/or offset are set, calculate the value.
                // This changes any values of type int to float.
                if (is_array($value)) {
                    $value = $this->mapArray($value, fn($val) => $field->calculateValue($val));
                } else {
                    $value = $field->calculateValue($value);
                }
            }
        }

        $this->values[$fieldNumber] = $value;
    }

    /**
     * Gets the underlying field. Or null if there is no such
     * field defined.
     *
     * @param integer $fieldNumber
     * @return Field|null
     */
    public function getField(int $fieldNumber): ?Field
    {
        return isset($this->fields[$fieldNumber]) ? $this->fields[$fieldNumber] : null;
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

    /**
     * Return message name and global message number.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s (%s)', $this->getMessageName(), $this->getGlobalMessageNumber());
    }

    private function mapArray(array $values, callable $classifier): array {
        $mapped = [];
        foreach ($values as $value) {
            $mapped[] = $classifier($value);
        }
        return $mapped;
    }

    private function convertValueToFieldType(Field $field, mixed $value): mixed
    {
        switch ($field->getProfileType()) {
            case ProfileType::BOOL:
                return is_array($value) ? $this->mapArray($value, fn($val) => $val !== 0) : $value !== 0;

            case ProfileType::LOCALDATETIME:
            case ProfileType::DATETIME:
                if (is_array($value)) {
                    throw new Exception(sprintf('cannot have array values of type DateTime|LocalDateTime for %s::%s', static::class, $field->getName()));
                }

                // PHP DateTime is calculated from start of UNIX epoche (01.01.1970),
                // while FIT Timestamp starts with 01.01.1989.
                $date = new DateTime();
                $date->setTimestamp(intval($value) + 631065600);
                return $date;

            default:
                return $value;
        }
    }
}
