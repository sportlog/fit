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
     * Gets the Timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the SensorType
     */
    public function getSensorType(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the CalibrationFactor
     */
    public function getCalibrationFactor(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the CalibrationDivisor
     */
    public function getCalibrationDivisor(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the LevelShift
     */
    public function getLevelShift(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the OffsetCal
     */
    public function getOffsetCal(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the OrientationMatrix
     */
    public function getOrientationMatrix(): ?int
    {
        return $this->getValue(5);
    }
}
