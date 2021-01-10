<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Message;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\MessageNumber;
use Sportlog\FIT\Profile\ProfileType;

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
        parent::__construct('Hrv', MessageNumber::Hrv);
    }

    /**
     * Gets the time
     */
    public function getTime(): float|array|null
    {
        return $this->getFieldValue(0);
    }
}
