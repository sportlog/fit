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
 * ThreeDSensorCalibrationMessage message
 */
#[Field('Timestamp', 253, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('SensorType', 0, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SENSORTYPE)]
#[Field('CalibrationFactor', 1, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('CalibrationDivisor', 2, FitBaseType::Uint32->value, 1.0, 0.0, 'counts', false, ProfileType::UINT32)]
#[Field('LevelShift', 3, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('OffsetCal', 4, FitBaseType::Sint32->value, 1.0, 0.0, '', false, ProfileType::SINT32)]
#[Field('OrientationMatrix', 5, FitBaseType::Sint32->value, 65535.0, 0.0, '', false, ProfileType::SINT32)]
final class ThreeDSensorCalibrationMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ThreeDSensorCalibration', MesgNum::ThreeDSensorCalibration->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the sensor type
     */
    public function getSensorType(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the calibration factor
     */
    public function getCalibrationFactor(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the calibration divisor
     */
    public function getCalibrationDivisor(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the level shift
     */
    public function getLevelShift(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the offset cal
     */
    public function getOffsetCal(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the orientation matrix
     */
    public function getOrientationMatrix(): float|array|null
    {
        return $this->getFieldValue(5);
    }
}
