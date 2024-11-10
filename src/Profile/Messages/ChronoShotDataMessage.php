<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.141 SDK
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\FitBaseType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * ChronoShotDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('ShotSpeed', 0, FitBaseType::Uint32->value, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('ShotNum', 1, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::UINT16)]
final class ChronoShotDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ChronoShotData', MesgNum::ChronoShotData->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the shot speed
     */
    public function getShotSpeed(): float|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the shot num
     */
    public function getShotNum(): int|array|null
    {
        return $this->getFieldValue(1);
    }
}
