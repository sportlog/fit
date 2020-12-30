<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Message;

#[Attribute]
class Field {
    public function __construct(private string $name,
        private int $num,
        private int $type,
        private string $profileType,
        private float $scale = 1.0,
        private float $offset = 0.0,
        private string $units = '',
        private bool $accumulated = false)
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