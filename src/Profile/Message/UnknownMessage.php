<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Profile\Message;

use FIT\Profile\Message;

/**
 * Represents an unknown message which is not described
 * to be a message of the product profile.
 */
final class UnknownMessage extends Message
{
    public function __construct(int $number)
    {
        parent::__construct("Unknown", $number);
    }
}