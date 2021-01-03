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
 * MagnetometerDataMessage message
 */
final class MagnetometerDataMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $timestampMs;

    #[Field('SampleTimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $sampleTimeOffset;

    #[Field('MagX', 2, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $magX;

    #[Field('MagY', 3, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $magY;

    #[Field('MagZ', 4, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $magZ;

    #[Field('CalibratedMagX', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'G', false, ProfileType::FLOAT32)]
    public ?float $calibratedMagX;

    #[Field('CalibratedMagY', 6, FitBaseType::FLOAT32, 1.0, 0.0, 'G', false, ProfileType::FLOAT32)]
    public ?float $calibratedMagY;

    #[Field('CalibratedMagZ', 7, FitBaseType::FLOAT32, 1.0, 0.0, 'G', false, ProfileType::FLOAT32)]
    public ?float $calibratedMagZ;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("MagnetometerData", MessageNumber::MagnetometerData);
    }
}
