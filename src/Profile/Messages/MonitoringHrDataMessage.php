<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
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
 * MonitoringHrDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DateTime)]
#[Field('RestingHeartRate', 0, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::Uint8)]
#[Field('CurrentDayRestingHeartRate', 1, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::Uint8)]
final class MonitoringHrDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('MonitoringHrData', MesgNum::MonitoringHrData->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the resting heart rate
     */
    public function getRestingHeartRate(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the current day resting heart rate
     */
    public function getCurrentDayRestingHeartRate(): int|array|null
    {
        return $this->getFieldValue(1);
    }
}
