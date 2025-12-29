<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.188 SDK
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
 * Spo2DataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('ReadingSpo2', 0, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('ReadingConfidence', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Mode', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPO2MEASUREMENTTYPE)]
final class Spo2DataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Spo2Data', MesgNum::SPO2_DATA);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the reading spo2
     */
    public function getReadingSpo2(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the reading confidence
     */
    public function getReadingConfidence(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the mode
     */
    public function getMode(): int|array|null
    {
        return $this->getFieldValue(2);
    }
}
