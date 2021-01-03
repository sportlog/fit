<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Profile;

class FieldValue {
    public function __construct(
        // private int $num,
        private int $type,
        private mixed $value)
    {
    }

    // public function getNumber(): int { return $this->num; }
    public function getType(): int { return $this->type; }
    public function getValue(): mixed { return $this->value; }
}