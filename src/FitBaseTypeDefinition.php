<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT;

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
     * @return FitBaseTypeDefinition|null The definition of the base type, or null if no matching
     *                                    definition could be found.
     */
    public static function fromType(int $baseType): ?FitBaseTypeDefinition
    {
        if (self::$fieldDefinitions === null) {
            self::$fieldDefinitions = [
                FitBaseType::ENUM => new FitBaseTypeDefinition(FitBaseType::ENUM, false, "enum", 1, 0xFF),
                FitBaseType::SINT8 => new FitBaseTypeDefinition(FitBaseType::SINT8, false, "sint8", 1, 0x7F),
                FitBaseType::UINT8 => new FitBaseTypeDefinition(FitBaseType::UINT8, false, "uint8", 1, 0xFF),
                FitBaseType::SINT16 => new FitBaseTypeDefinition(FitBaseType::SINT16, true, "sint16", 2, 0x7FFF),
                FitBaseType::UINT16 => new FitBaseTypeDefinition(FitBaseType::UINT16, true, "uint16", 2, 0xFFFF),
                FitBaseType::SINT32 => new FitBaseTypeDefinition(FitBaseType::SINT32, true, "sint32", 4, 0x7FFFFFFF),
                FitBaseType::UINT32 => new FitBaseTypeDefinition(FitBaseType::UINT32, true, "uint32", 4, 0xFFFFFFFF),
                FitBaseType::STRING => new FitBaseTypeDefinition(FitBaseType::STRING, false, "string", 1, 0x00),
                FitBaseType::FLOAT32 => new FitBaseTypeDefinition(FitBaseType::FLOAT32, true, "float32", 4, 0xFFFFFFFF),
                FitBaseType::FLOAT64 => new FitBaseTypeDefinition(FitBaseType::FLOAT64, true, "float64", 8, 0xFFFFFFFFFFFFFFFF),
                FitBaseType::UINT8Z => new FitBaseTypeDefinition(FitBaseType::UINT8Z, false, "uint8z", 1, 0x00),
                FitBaseType::UINT16Z => new FitBaseTypeDefinition(FitBaseType::UINT16Z, true, "uint16z", 2, 0x0000),
                FitBaseType::UINT32Z => new FitBaseTypeDefinition(FitBaseType::UINT32Z, true, "uint32z", 4, 0x00000000),
                FitBaseType::BYTE => new FitBaseTypeDefinition(FitBaseType::BYTE, false, "byte", 1, 0xFF),
                FitBaseType::SINT64 => new FitBaseTypeDefinition(FitBaseType::SINT64, true, "sint64", 8, 0x7FFFFFFFFFFFFFFF),
                FitBaseType::UINT64 => new FitBaseTypeDefinition(FitBaseType::UINT64, true, "uint64", 8, 0xFFFFFFFFFFFFFFFF),
                FitBaseType::UINT64Z => new FitBaseTypeDefinition(FitBaseType::UINT64Z, true, "uint64z", 8, 0x0000000000000000)
            ];
        }
        
        return isset(self::$fieldDefinitions[$baseType]) ? self::$fieldDefinitions[$baseType] : null;
    }

    public function __construct(private int $type, private bool $endianAbility, private string $name, private int $bytes, private mixed $invalidValue)
    {
    }

    public function getType(): int
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

    public function isInvalid(mixed $value): bool
    {
        return $this->invalidValue === $value;
    }
}
