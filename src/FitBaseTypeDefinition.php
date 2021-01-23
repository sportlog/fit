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
