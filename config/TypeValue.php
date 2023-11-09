<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Generator;

readonly class TypeValue
{
    public static function parse(string $line): self
    {
        $def = explode(",", $line);
        return new self($def[2], $def[3], $def[4]);
    }

    public function __construct(public string $name, public string $value, public ?string $comment)
    {
    }

    public function isDeprecated(): bool
    {
        return !is_null($this->comment) && str_starts_with($this->comment, 'Deprecated');
    }
}
