<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Profile;

use Attribute;
use FIT\FitBaseType;
use FIT\FitBaseTypeDefinition;

/**
 * Describes a message field.
 */
#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS)]
final class Field
{
    public const DEFAULT_SCALE = 1.0;
    public const DEFAULT_OFFSET = 0.0;

    private FitBaseTypeDefinition $typeDefinition;

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
     * and when scale and offset are not the default values.
     * Keep in mind that this changes any values from type int to float.
     */
    public function calculateValue(int|float $value): float
    {
        return ($value / $this->getScale()) - $this->getOffset();
    }

    /**
     * Gets the field base definition.
     *
     * @return FitBaseTypeDefinition
     */
    public function getTypeDefinition(): FitBaseTypeDefinition
    {
        return $this->typeDefinition ?? $this->setTypeDefinition();
    }

    private function setTypeDefinition(): FitBaseTypeDefinition
    {
        $this->typeDefinition = FitBaseType::fromType($this->getType());
        return $this->typeDefinition;
    }
}
