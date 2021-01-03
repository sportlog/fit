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
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('SensorType', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SENSORTYPE)]
    public ?int $sensorType;

    #[Field('CalibrationFactor', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $calibrationFactor;

    #[Field('CalibrationDivisor', 2, FitBaseType::UINT32, 1.0, 0.0, 'counts', false, ProfileType::UINT32)]
    public ?int $calibrationDivisor;

    #[Field('LevelShift', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $levelShift;

    #[Field('OffsetCal', 4, FitBaseType::SINT32, 1.0, 0.0, '', false, ProfileType::SINT32)]
    public ?int $offsetCal;

    #[Field('OrientationMatrix', 5, FitBaseType::SINT32, 65535.0, 0.0, '', false, ProfileType::SINT32)]
    public ?int $orientationMatrix;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("ThreeDSensorCalibration", MessageNumber::ThreeDSensorCalibration);
    }
}
