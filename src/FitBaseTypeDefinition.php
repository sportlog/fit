<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT;

use Exception;

/**
 * Definition of FIT base type.
 * See Table 7. FIT Base Types and Invalid Values.
 */
class FitBaseTypeDefinition {
    public function __construct(private int $type, private bool $endianAbility, private string $name, private int $bytes, private mixed $invalidValue)
    {
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getBytes(): int {
        return $this->bytes;
    }

    public function getInvalidValue(): mixed {
        return $this->invalidValue;
    }

    public function isInvalid(mixed $value): bool {
        return $this->invalidValue === $value;
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