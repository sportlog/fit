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
 * TankSummaryMessage message
 */
#[Field('Timestamp', 253, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('Sensor', 0, FitBaseType::Uint32z->value, 1.0, 0.0, '', false, ProfileType::ANTCHANNELID)]
#[Field('StartPressure', 1, FitBaseType::Uint16->value, 100.0, 0.0, 'bar', false, ProfileType::UINT16)]
#[Field('EndPressure', 2, FitBaseType::Uint16->value, 100.0, 0.0, 'bar', false, ProfileType::UINT16)]
#[Field('VolumeUsed', 3, FitBaseType::Uint32->value, 100.0, 0.0, 'L', false, ProfileType::UINT32)]
final class TankSummaryMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('TankSummary', MesgNum::TankSummary->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the sensor
     */
    public function getSensor(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the start pressure
     */
    public function getStartPressure(): float|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the end pressure
     */
    public function getEndPressure(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the volume used
     */
    public function getVolumeUsed(): float|array|null
    {
        return $this->getFieldValue(3);
    }
}
