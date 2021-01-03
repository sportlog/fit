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
final class GyroscopeDataMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $timestampMs;

    #[Field('SampleTimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $sampleTimeOffset;

    #[Field('GyroX', 2, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $gyroX;

    #[Field('GyroY', 3, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $gyroY;

    #[Field('GyroZ', 4, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $gyroZ;

    #[Field('CalibratedGyroX', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'deg/s', false, ProfileType::FLOAT32)]
    public ?float $calibratedGyroX;

    #[Field('CalibratedGyroY', 6, FitBaseType::FLOAT32, 1.0, 0.0, 'deg/s', false, ProfileType::FLOAT32)]
    public ?float $calibratedGyroY;

    #[Field('CalibratedGyroZ', 7, FitBaseType::FLOAT32, 1.0, 0.0, 'deg/s', false, ProfileType::FLOAT32)]
    public ?float $calibratedGyroZ;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("GyroscopeData", MessageNumber::GyroscopeData);
    }
}
