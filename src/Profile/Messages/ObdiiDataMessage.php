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
 * ObdiiDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::Uint16->value, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('TimeOffset', 1, FitBaseType::Uint16->value, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('Pid', 2, FitBaseType::Byte->value, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('RawData', 3, FitBaseType::Byte->value, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('PidDataSize', 4, FitBaseType::Uint8->value, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('SystemTime', 5, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('StartTimestamp', 6, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('StartTimestampMs', 7, FitBaseType::Uint16->value, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
final class ObdiiDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ObdiiData', MesgNum::ObdiiData->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the timestamp ms
     */
    public function getTimestampMs(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the time offset
     */
    public function getTimeOffset(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the pid
     */
    public function getPid(): mixed
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the raw data
     */
    public function getRawData(): mixed
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the pid data size
     */
    public function getPidDataSize(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the system time
     */
    public function getSystemTime(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the start timestamp
     */
    public function getStartTimestamp(): DateTime|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the start timestamp ms
     */
    public function getStartTimestampMs(): int|array|null
    {
        return $this->getFieldValue(7);
    }
}
