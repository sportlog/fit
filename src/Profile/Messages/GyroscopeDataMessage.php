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
 * GyroscopeDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::Uint16->value, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('SampleTimeOffset', 1, FitBaseType::Uint16->value, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('GyroX', 2, FitBaseType::Uint16->value, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('GyroY', 3, FitBaseType::Uint16->value, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('GyroZ', 4, FitBaseType::Uint16->value, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('CalibratedGyroX', 5, FitBaseType::Float32->value, 1.0, 0.0, 'deg/s', false, ProfileType::FLOAT32)]
#[Field('CalibratedGyroY', 6, FitBaseType::Float32->value, 1.0, 0.0, 'deg/s', false, ProfileType::FLOAT32)]
#[Field('CalibratedGyroZ', 7, FitBaseType::Float32->value, 1.0, 0.0, 'deg/s', false, ProfileType::FLOAT32)]
final class GyroscopeDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('GyroscopeData', MesgNum::GyroscopeData->value);
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
     * Gets the sample time offset
     */
    public function getSampleTimeOffset(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the gyro x
     */
    public function getGyroX(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the gyro y
     */
    public function getGyroY(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the gyro z
     */
    public function getGyroZ(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the calibrated gyro x
     */
    public function getCalibratedGyroX(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the calibrated gyro y
     */
    public function getCalibratedGyroY(): float|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the calibrated gyro z
     */
    public function getCalibratedGyroZ(): float|array|null
    {
        return $this->getFieldValue(7);
    }
}
