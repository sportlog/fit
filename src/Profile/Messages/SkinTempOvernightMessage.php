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
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * SkinTempOvernightMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('LocalTimestamp', 0, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALDATETIME)]
#[Field('AverageDeviation', 1, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32)]
#[Field('Average7DayDeviation', 2, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32)]
#[Field('NightlyValue', 4, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32)]
final class SkinTempOvernightMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SkinTempOvernight', MesgNum::SKIN_TEMP_OVERNIGHT);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the local timestamp
     */
    public function getLocalTimestamp(): DateTime|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the average deviation
     */
    public function getAverageDeviation(): float|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the average7 day deviation
     */
    public function getAverage7DayDeviation(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the nightly value
     */
    public function getNightlyValue(): float|array|null
    {
        return $this->getFieldValue(4);
    }
}
