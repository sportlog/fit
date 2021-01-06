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
 * ThreeDSensorCalibrationMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('SensorType', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SENSORTYPE)]
#[Field('CalibrationFactor', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('CalibrationDivisor', 2, FitBaseType::UINT32, 1.0, 0.0, 'counts', false, ProfileType::UINT32)]
#[Field('LevelShift', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('OffsetCal', 4, FitBaseType::SINT32, 1.0, 0.0, '', false, ProfileType::SINT32)]
#[Field('OrientationMatrix', 5, FitBaseType::SINT32, 65535.0, 0.0, '', false, ProfileType::SINT32)]
final class ThreeDSensorCalibrationMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ThreeDSensorCalibration', MessageNumber::ThreeDSensorCalibration);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the sensor type
     */
    public function getSensorType(): ?int
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the calibration factor
     */
    public function getCalibrationFactor(): ?int
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the calibration divisor
     */
    public function getCalibrationDivisor(): ?int
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the level shift
     */
    public function getLevelShift(): ?int
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the offset cal
     */
    public function getOffsetCal(): ?int
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the orientation matrix
     */
    public function getOrientationMatrix(): ?int
    {
        return $this->getFieldValue(5);
    }
}
