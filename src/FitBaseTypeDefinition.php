<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT;

use Sportlog\FIT\Profile\Types\FitBaseType;

/**
 * Definition of FIT base type.
 * See Table 7. FIT Base Types and Invalid Values.
 */
class FitBaseTypeDefinition
{
    private static ?array $fieldDefinitions = null;

    /**
     * Get the definition for the provided base type.
     *
     * @param integer $baseType
     * @return self|null The definition of the base type, or null if no matching
     *                                    definition could be found.
     */
    public static function fromType(int $baseType): ?self
    {
        if (self::$fieldDefinitions === null) {
            self::$fieldDefinitions = [
                FitBaseType::Enum->value => new self(FitBaseType::Enum, false, "enum", 1, 0xFF),
                FitBaseType::Sint8->value => new self(FitBaseType::Sint8, false, "sint8", 1, 0x7F),
                FitBaseType::Uint8->value => new self(FitBaseType::Uint8, false, "uint8", 1, 0xFF),
                FitBaseType::Sint16->value => new self(FitBaseType::Sint16, true, "sint16", 2, 0x7FFF),
                FitBaseType::Uint16->value => new self(FitBaseType::Uint16, true, "uint16", 2, 0xFFFF),
                FitBaseType::Sint32->value => new self(FitBaseType::Sint32, true, "sint32", 4, 0x7FFFFFFF),
                FitBaseType::Uint32->value => new self(FitBaseType::Uint32, true, "uint32", 4, 0xFFFFFFFF),
                FitBaseType::String->value => new self(FitBaseType::String, false, "string", 1, 0x00),
                FitBaseType::Float32->value => new self(FitBaseType::Float32, true, "float32", 4, 0xFFFFFFFF),
                FitBaseType::Float64->value => new self(FitBaseType::Float64, true, "float64", 8, 0xFFFFFFFFFFFFFFFF),
                FitBaseType::Uint8z->value => new self(FitBaseType::Uint8z, false, "uint8z", 1, 0x00),
                FitBaseType::Uint16z->value => new self(FitBaseType::Uint16z, true, "uint16z", 2, 0x0000),
                FitBaseType::Uint32z->value => new self(FitBaseType::Uint32z, true, "uint32z", 4, 0x00000000),
                FitBaseType::Byte->value => new self(FitBaseType::Byte, false, "byte", 1, 0xFF),
                FitBaseType::Sint64->value => new self(FitBaseType::Sint64, true, "sint64", 8, 0x7FFFFFFFFFFFFFFF),
                FitBaseType::Uint64->value => new self(FitBaseType::Uint64, true, "uint64", 8, 0xFFFFFFFFFFFFFFFF),
                FitBaseType::Uint64z->value => new self(FitBaseType::Uint64z, true, "uint64z", 8, 0x0000000000000000)
            ];
        }

        return isset(self::$fieldDefinitions[$baseType]) ? self::$fieldDefinitions[$baseType] : null;
    }

    public function __construct(private FitBaseType $type, private bool $endianAbility, private string $name, private int $bytes, private mixed $invalidValue) {}

    public function getType(): FitBaseType
    {
        return $this->type;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBytes(): int
    {
        return $this->bytes;
    }

    public function getInvalidValue(): mixed
    {
        return $this->invalidValue;
    }

    public function getEndianAbility(): mixed
    {
        return $this->endianAbility;
    }

    public function isInvalid(mixed $value): bool
    {
        return $this->invalidValue === $value;
    }
}
