<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Profile;

use Attribute;
use Exception;
use Sportlog\FIT\Profile\Types\FitBaseType;

/**
 * Describes a message field.
 */
#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS)]
final class Field
{
    /**
     * Default scale
     */
    public const DEFAULT_SCALE = 1.0;
    /**
     * Default offset
     */
    public const DEFAULT_OFFSET = 0.0;
    /**
     * Indicates if a value for this field needs to be calcualated.
     */
    public bool $requiresCalculation;

    public function __construct(
        private string $name,
        private int $num,
        private int $type,
        private float $scale,
        private float $offset,
        private string $units,
        private bool $accumulated,
        private string $profileType
    ) {
        $this->requiresCalculation = $this->isNumeric() && ($this->getScale() !== self::DEFAULT_SCALE || $this->getOffset() !== self::DEFAULT_OFFSET);
    }

    /**
     * The unique field number of the message.
     *
     * @return integer
     */
    public function getNumber(): int
    {
        return $this->num;
    }

    /**
     * The field name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The field type.
     *
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * The scale.
     *
     * @return float
     */
    public function getScale(): float
    {
        return $this->scale;
    }

    /**
     * The offset.
     *
     * @return float
     */
    public function getOffset(): float
    {
        return $this->offset;
    }

    /**
     * The units.
     *
     * @return string
     */
    public function getUnits(): string
    {
        return $this->units;
    }

    /**
     * Indicates if the field is accumulated.
     *
     * @return boolean
     */
    public function getAccumulated(): bool
    {
        return $this->accumulated;
    }

    /**
     * Gets the profile type.
     * The profile type is used to determine the
     * PHP return type of the properties in the
     * generated message.
     *
     * @return string
     */
    public function getProfileType(): string
    {
        return $this->profileType;
    }

    /**
     * Calculate value using scale and offset.
     * This method does not check if calculation is required. Calculation
     * is required only for numeric types (see FitBaseTypeDefinition->isNumeric())
     * and when scale and offset are not set to their default values.
     * Keep in mind that this changes any values from type int to float.
     */
    public function calculateValue(int|float $value): float
    {
        return ($value / $this->getScale()) - $this->getOffset();
    }

    /**
     * Indicates if the base type is numeric.
     * Scale/offset shall not be calculated for
     * non-numeric fields.
     *
     * @return boolean
     */
    public function isNumeric(): bool
    {
        return match ($this->getType()) {
            FitBaseType::Enum->value, FitBaseType::String->value => false,
            FitBaseType::Sint8->value, FitBaseType::Uint8->value, FitBaseType::Uint8z->value, FitBaseType::Sint16->value, FitBaseType::Uint16->value,
            FitBaseType::Uint16z->value, FitBaseType::Sint32->value, FitBaseType::Uint32->value, FitBaseType::Uint32z->value, FitBaseType::Float32->value,
            FitBaseType::Sint64->value, FitBaseType::Uint64->value, FitBaseType::Uint64z->value, FitBaseType::Float64->value, FitBaseType::Byte->value => true,
            default => throw new Exception("IsNumeric - Unexpected Fit Type" . $this->getType())
        };
    }
}
