<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT;

readonly class DecoderOptions
{
    /**
     * @param $strictMode Enable strict mode for exact FIT type checking.
     */
    public function __construct(public ?bool $strictMode) {}
}
