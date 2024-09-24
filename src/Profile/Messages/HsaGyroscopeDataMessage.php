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
 * HsaGyroscopeDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('SamplingInterval', 1, FitBaseType::UINT16, 1.0, 0.0, '1/32768 s', false, ProfileType::UINT16)]
#[Field('GyroX', 2, FitBaseType::SINT16, 28.57143, 0.0, 'deg/s', false, ProfileType::SINT16)]
#[Field('GyroY', 3, FitBaseType::SINT16, 28.57143, 0.0, 'deg/s', false, ProfileType::SINT16)]
#[Field('GyroZ', 4, FitBaseType::SINT16, 28.57143, 0.0, 'deg/s', false, ProfileType::SINT16)]
#[Field('Timestamp32k', 5, FitBaseType::UINT32, 1.0, 0.0, '1/32768 s', false, ProfileType::UINT32)]
final class HsaGyroscopeDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('HsaGyroscopeData', MesgNum::HSA_GYROSCOPE_DATA);
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
     * Gets the sampling interval
     */
    public function getSamplingInterval(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the gyro x
     */
    public function getGyroX(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the gyro y
     */
    public function getGyroY(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the gyro z
     */
    public function getGyroZ(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the timestamp32k
     */
    public function getTimestamp32k(): int|array|null
    {
        return $this->getFieldValue(5);
    }
}
