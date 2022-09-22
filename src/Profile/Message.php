<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Profile;

use ArrayIterator;
use DateTime;
use Exception;
use Iterator;
use IteratorAggregate;
use JsonSerializable;
use ReflectionClass;
use Sportlog\FIT\{FitBaseTypeDefinition, FitException};
use Stringable;

/**
 * Base class for all FIT messages.
 * Defines the FIT fields contained within each FIT message.
 */
abstract class Message implements IteratorAggregate, Stringable, JsonSerializable
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
    public function getFieldValue(int|string $fieldNumber): mixed
    {
        $field = $this->getField($fieldNumber);
        if ($field === null) {
            throw new Exception("invalid field number {$fieldNumber}");
        }

        $value = isset($this->values[$field->getNumber()]) ? $this->values[$field->getNumber()] : null;
        if ($value === null) {
            return null;
        }

        return $this->convertValueToFieldType($field, $value);
    }

    /**
     * Sets a field value.
     * 
     * @param int $fieldNumber Number of the field to set.
     * @param mixed $value The field value. The value is stored even if the field number does
     * not belong to a native field.
     * @param FitBaseTypeDefinition $fitBaseType The underlying base type of the value. Must match with the base type
     * of the native field.
     * @throws Exception Base type of native field is not identical to the base type from FIT file definition
     */
    public function setFieldValue(int $fieldNumber, mixed $value, FitBaseTypeDefinition $fitBaseType): void
    {
        // Get the field.
        // If the field does not exists, the FIT file provides data not specified in the FIT SDK.
        // Store the data anyway even if it's unknown how to interprete it.
        $field = $this->getField($fieldNumber);
        if ($field !== null) {
            if ($field->getType() !== $fitBaseType->getType()) {
                throw new FitException(sprintf(
                    'mismatch between base type in FIT message and base type declared in meta data of property "%s::%s".
                    Base type from FIT file is "%s", base type from property meta is "%s"',
                    static::class,
                    $field->getName(),
                    $fitBaseType->getName(),
                    $field->getType()
                ));
            }

            if ($field->requiresCalculation) {
                // If scale and/or offset are set, calculate the value.
                // This changes any values of type int to float.
                if (is_array($value)) {
                    $value = $this->mapArray($value, fn ($val) => $field->calculateValue($val));
                } else {
                    $value = $field->calculateValue($value);
                }
            }
        }
      
        $this->values[$fieldNumber] = $value;
    }

    /**
     * Adds a new field or redefines an existing field if
     * a field with this number already exists.
     *
     * @param Field $field
     * @return void
     */
    public function addField(Field $field): void
    {
        // When redefining an existing field (developer field),
        // remove the value from the native field. It may be
        // that an invalid value is supplied.
        if (isset($this->values[$field->getNumber()]) && isset($this->fields[$field->getNumber()])) {
            unset($this->values[$field->getNumber()]);
        }

        $this->fields[$field->getNumber()] = $field;
    }

    /**
     * Gets the underlying field. Or null if there is no such
     * field defined.
     *
     * @param integer|string $fieldId Either the field number or the field name
     * @return Field|null
     */
    public function getField(int|string $fieldId): ?Field
    {
        if (is_int($fieldId)) {
            return isset($this->fields[$fieldId]) ? $this->fields[$fieldId] : null;
        } else {
            foreach ($this->fields as $field) {
                if ($field->getName() === $fieldId) {
                    return $this->getField($field->getNumber());
                }
            }
            return null;
        }
    }

    /**
     * Gets an iterator.
     *
     * {@inheritDoc}
     * @see IteratorAggregate::getIterator()
     */
    public function getIterator(): Iterator
    {
        return new ArrayIterator($this->values);
    }

    /**
     * JSON representation of all native field values.
     */
    public function jsonSerialize(): mixed
    {
        $result = [];
        foreach ($this->values as $fieldId => $value) {
            $field = $this->getField($fieldId);
            if ($field === null) {
                continue;   // data for unknwokn (non-native) $field
            }

            $result[$field->getName()] = $value;
        }
        return $result;
    }

    /**
     * Return a string representation of all values and units,
     * including the message type at the beginning.
     * Example: RecordMessage,Distance,12564.45,m,HeartRate,145,bpm,.....
     *
     * @return string
     */
    public function __toString(): string
    {
        $result = [basename(static::class)];
        foreach ($this->values as $fieldNumber => $value) {
            $field = $this->getField($fieldNumber);
            $result[] = $field?->getName() ?? $fieldNumber;
            $result[] = is_array($value) ? join('|', $value) : $value;
            $result[] = $field?->getUnits() ?? '';
        }

        return join(',', $result);
    }

    private function mapArray(array $values, callable $classifier): array
    {
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
                return is_array($value) ? $this->mapArray($value, fn ($val) => $val !== 0) : $value !== 0;

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
