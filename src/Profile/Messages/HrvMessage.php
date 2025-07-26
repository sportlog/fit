<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.171 SDK
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * HrvMessage message
 */
#[Field('Time', 0, FitBaseType::UINT16, 1000.0, 0.0, 's', false, ProfileType::UINT16)]
final class HrvMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Hrv', MesgNum::HRV);
    }

    /**
     * Gets the time
     */
    public function getTime(): float|array|null
    {
        return $this->getFieldValue(0);
    }
}
