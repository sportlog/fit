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

/**
 * Describes a message field.
 */
#[Attribute(Attribute::IS_REPEATABLE | Attribute::TARGET_CLASS)]
class Field {
    public function __construct(private string $name,
        private int $num,
        private int $type,
        private float $scale,
        private float $offset,
        private string $units,
        private bool $accumulated,
        private string $profileType)
    {
    }

    public function getNumber(): int { return $this->num; }
    public function getName(): string { return $this->name; }
    public function getType(): int { return $this->type; }
    public function getScale(): float { return $this->scale; }
    public function getOffset(): float { return $this->offset; }
    public function getUnits(): string { return $this->units; }
    public function getAccumulated(): bool { return $this->accumulated; }
    public function getProfileType(): string { return $this->profileType; }
}