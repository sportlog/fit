<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT;

/**
 * Definition of FIT base type.
 * See Table 7. FIT Base Types and Invalid Values.
 */
class FitBaseTypeDefinition {
    public function __construct(private bool $endianAbility, private string $name, private int $bytes, private mixed $invalidValue)
    {
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
}