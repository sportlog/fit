<?php

/**
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace FIT\Profile\Message;

use DateTime;
use FIT\FitBaseType;
use FIT\Profile\Field;
use FIT\Profile\Message;
use FIT\Profile\MessageNumber;
use FIT\Profile\ProfileType;

/**
 * GyroscopeDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('SampleTimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('GyroX', 2, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('GyroY', 3, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('GyroZ', 4, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('CalibratedGyroX', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'deg/s', false, ProfileType::FLOAT32)]
#[Field('CalibratedGyroY', 6, FitBaseType::FLOAT32, 1.0, 0.0, 'deg/s', false, ProfileType::FLOAT32)]
#[Field('CalibratedGyroZ', 7, FitBaseType::FLOAT32, 1.0, 0.0, 'deg/s', false, ProfileType::FLOAT32)]
final class GyroscopeDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('GyroscopeData', MessageNumber::GyroscopeData);
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
    public function getTimestampMs(): int|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the sample time offset
     */
    public function getSampleTimeOffset(): int|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the gyro x
     */
    public function getGyroX(): int|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the gyro y
     */
    public function getGyroY(): int|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the gyro z
     */
    public function getGyroZ(): int|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the calibrated gyro x
     */
    public function getCalibratedGyroX(): float|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the calibrated gyro y
     */
    public function getCalibratedGyroY(): float|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the calibrated gyro z
     */
    public function getCalibratedGyroZ(): float|null
    {
        return $this->getFieldValue(7);
    }
}
