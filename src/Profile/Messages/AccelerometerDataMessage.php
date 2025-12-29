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
 * AccelerometerDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('SampleTimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('AccelX', 2, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('AccelY', 3, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('AccelZ', 4, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('CalibratedAccelX', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32)]
#[Field('CalibratedAccelY', 6, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32)]
#[Field('CalibratedAccelZ', 7, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32)]
#[Field('CompressedCalibratedAccelX', 8, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16)]
#[Field('CompressedCalibratedAccelY', 9, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16)]
#[Field('CompressedCalibratedAccelZ', 10, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16)]
final class AccelerometerDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('AccelerometerData', MesgNum::ACCELEROMETER_DATA);
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
     * Gets the accel x
     */
    public function getAccelX(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the accel y
     */
    public function getAccelY(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the accel z
     */
    public function getAccelZ(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the calibrated accel x
     */
    public function getCalibratedAccelX(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the calibrated accel y
     */
    public function getCalibratedAccelY(): float|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the calibrated accel z
     */
    public function getCalibratedAccelZ(): float|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the compressed calibrated accel x
     */
    public function getCompressedCalibratedAccelX(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the compressed calibrated accel y
     */
    public function getCompressedCalibratedAccelY(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the compressed calibrated accel z
     */
    public function getCompressedCalibratedAccelZ(): int|array|null
    {
        return $this->getFieldValue(10);
    }
}
