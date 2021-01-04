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
final class ThreeDSensorCalibrationMessage extends Message
{
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getSensorType(): ?int
    {
        return $this->getValue(0);
    }

    public function getCalibrationFactor(): ?int
    {
        return $this->getValue(1);
    }

    public function getCalibrationDivisor(): ?int
    {
        return $this->getValue(2);
    }

    public function getLevelShift(): ?int
    {
        return $this->getValue(3);
    }

    public function getOffsetCal(): ?int
    {
        return $this->getValue(4);
    }

    public function getOrientationMatrix(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("ThreeDSensorCalibration", MessageNumber::ThreeDSensorCalibration, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('SensorType', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SENSORTYPE),
            new Field('CalibrationFactor', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('CalibrationDivisor', 2, FitBaseType::UINT32, 1.0, 0.0, 'counts', false, ProfileType::UINT32),
            new Field('LevelShift', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('OffsetCal', 4, FitBaseType::SINT32, 1.0, 0.0, '', false, ProfileType::SINT32),
            new Field('OrientationMatrix', 5, FitBaseType::SINT32, 65535.0, 0.0, '', false, ProfileType::SINT32)
        ]);
    }
}
