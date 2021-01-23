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
use Sportlog\FIT\FitBaseType;

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
     * @return integer
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
        switch ($this->getType()) {
            case FitBaseType::ENUM:
            case FitBaseType::STRING:
                return false;

            case FitBaseType::SINT8:
            case FitBaseType::UINT8:
            case FitBaseType::UINT8Z:
            case FitBaseType::SINT16:
            case FitBaseType::UINT16:
            case FitBaseType::UINT16Z:
            case FitBaseType::SINT32:
            case FitBaseType::UINT32:
            case FitBaseType::UINT32Z:
            case FitBaseType::FLOAT32:
            case FitBaseType::SINT64:
            case FitBaseType::UINT64:
            case FitBaseType::UINT64Z:
            case FitBaseType::FLOAT64:
            case FitBaseType::BYTE:
                return true;

            default:
                throw new Exception("IsNumeric - Unexpected Fit Type" . $this->getType());
        }
    }
}
