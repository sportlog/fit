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
     * @return self|null The definition of the base type, or null if no matching
     *                                    definition could be found.
     */
    public static function fromType(int $baseType): ?self
    {
        $baseTypeDefinitions = self::getBaseTypeDefinitions();
        return isset($baseTypeDefinitions[$baseType]) ? $baseTypeDefinitions[$baseType] : null;
    }

    /**
     * Get definition from size, based on the family of @param $baseTypeDefinition.
     */
    public static function matchBySize(self $baseTypeDefinition, int $size): ?self
    {
        foreach (self::getBaseTypeDefinitions() as $btd) {
            if ($btd->getFamily() === $baseTypeDefinition->getFamily() && $btd->bytes === $size) {
                return $btd;
            }
        }

        return null;
    }

    private static function getBaseTypeDefinitions(): array
    {
        if (self::$fieldDefinitions === null) {
            self::$fieldDefinitions = [
                FitBaseType::ENUM => new self(FitBaseType::ENUM, false, "enum", 1, 0xFF),
                FitBaseType::SINT8 => new self(FitBaseType::SINT8, false, "sint8", 1, 0x7F),
                FitBaseType::UINT8 => new self(FitBaseType::UINT8, false, "uint8", 1, 0xFF),
                FitBaseType::SINT16 => new self(FitBaseType::SINT16, true, "sint16", 2, 0x7FFF),
                FitBaseType::UINT16 => new self(FitBaseType::UINT16, true, "uint16", 2, 0xFFFF),
                FitBaseType::SINT32 => new self(FitBaseType::SINT32, true, "sint32", 4, 0x7FFFFFFF),
                FitBaseType::UINT32 => new self(FitBaseType::UINT32, true, "uint32", 4, 0xFFFFFFFF),
                FitBaseType::STRING => new self(FitBaseType::STRING, false, "string", 1, 0x00),
                FitBaseType::FLOAT32 => new self(FitBaseType::FLOAT32, true, "float32", 4, 0xFFFFFFFF),
                FitBaseType::FLOAT64 => new self(FitBaseType::FLOAT64, true, "float64", 8, 0xFFFFFFFFFFFFFFFF),
                FitBaseType::UINT8Z => new self(FitBaseType::UINT8Z, false, "uint8z", 1, 0x00),
                FitBaseType::UINT16Z => new self(FitBaseType::UINT16Z, true, "uint16z", 2, 0x0000),
                FitBaseType::UINT32Z => new self(FitBaseType::UINT32Z, true, "uint32z", 4, 0x00000000),
                FitBaseType::BYTE => new self(FitBaseType::BYTE, false, "byte", 1, 0xFF),
                FitBaseType::SINT64 => new self(FitBaseType::SINT64, true, "sint64", 8, 0x7FFFFFFFFFFFFFFF),
                FitBaseType::UINT64 => new self(FitBaseType::UINT64, true, "uint64", 8, 0xFFFFFFFFFFFFFFFF),
                FitBaseType::UINT64Z => new self(FitBaseType::UINT64Z, true, "uint64z", 8, 0x0000000000000000)
            ];
        }

        return self::$fieldDefinitions;
    }

    public function __construct(private int $type, private bool $endianAbility, private string $name, private int $bytes, private mixed $invalidValue) {}

    public function getFamily(): string
    {
        return match ($this->getType()) {
            FitBaseType::SINT8, FitBaseType::SINT16, FitBaseType::SINT32, FitBaseType::SINT64 => 'sint',
            FitBaseType::UINT8, FitBaseType::UINT16, FitBaseType::UINT32, FitBaseType::UINT64 => 'uint',
            FitBaseType::UINT8Z, FitBaseType::UINT16Z, FitBaseType::UINT32Z, FitBaseType::UINT64Z => 'uintz',
            FitBaseType::FLOAT32, FitBaseType::FLOAT64 => 'float',
            default => $this->getName()
        };
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

    public function getEndianAbility(): mixed
    {
        return $this->endianAbility;
    }

    public function isInvalid(mixed $value): bool
    {
        return $this->invalidValue === $value;
    }
}
