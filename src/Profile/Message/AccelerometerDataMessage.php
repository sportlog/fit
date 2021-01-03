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
 * AccelerometerDataMessage message
 */
final class AccelerometerDataMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $timestampMs;

    #[Field('SampleTimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $sampleTimeOffset;

    #[Field('AccelX', 2, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $accelX;

    #[Field('AccelY', 3, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $accelY;

    #[Field('AccelZ', 4, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $accelZ;

    #[Field('CalibratedAccelX', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32)]
    public ?float $calibratedAccelX;

    #[Field('CalibratedAccelY', 6, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32)]
    public ?float $calibratedAccelY;

    #[Field('CalibratedAccelZ', 7, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32)]
    public ?float $calibratedAccelZ;

    #[Field('CompressedCalibratedAccelX', 8, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16)]
    public ?int $compressedCalibratedAccelX;

    #[Field('CompressedCalibratedAccelY', 9, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16)]
    public ?int $compressedCalibratedAccelY;

    #[Field('CompressedCalibratedAccelZ', 10, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16)]
    public ?int $compressedCalibratedAccelZ;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("AccelerometerData", MessageNumber::AccelerometerData);
    }
}
