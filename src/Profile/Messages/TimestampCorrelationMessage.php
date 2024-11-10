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
 * TimestampCorrelationMessage message
 */
#[Field('Timestamp', 253, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('FractionalTimestamp', 0, FitBaseType::Uint16->value, 32768.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('SystemTimestamp', 1, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('FractionalSystemTimestamp', 2, FitBaseType::Uint16->value, 32768.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('LocalTimestamp', 3, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::LOCALDATETIME)]
#[Field('TimestampMs', 4, FitBaseType::Uint16->value, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('SystemTimestampMs', 5, FitBaseType::Uint16->value, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
final class TimestampCorrelationMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('TimestampCorrelation', MesgNum::TimestampCorrelation->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the fractional timestamp
     */
    public function getFractionalTimestamp(): float|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the system timestamp
     */
    public function getSystemTimestamp(): DateTime|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the fractional system timestamp
     */
    public function getFractionalSystemTimestamp(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the local timestamp
     */
    public function getLocalTimestamp(): DateTime|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the timestamp ms
     */
    public function getTimestampMs(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the system timestamp ms
     */
    public function getSystemTimestampMs(): int|array|null
    {
        return $this->getFieldValue(5);
    }
}
