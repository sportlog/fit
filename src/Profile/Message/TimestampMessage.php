<?php

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Message;

use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;

/**
 * Timestamp message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
final class TimestampMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct(int $number)
    {
        parent::__construct('Timestamp', $number);
    }
}
