<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Message;

/**
 * Represents a message which is known to be a valid
 * FIT message but is currently not processed by
 * this decoder.
 */
final class UnhandledMessage extends Message
{
    public function __construct(int $number)
    {
        parent::__construct("Unhandled", $number);
    }
}