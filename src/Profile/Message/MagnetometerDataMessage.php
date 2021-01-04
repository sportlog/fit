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
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getTimestampMs(): ?int
    {
        return $this->getValue(0);
    }

    public function getSampleTimeOffset(): ?int
    {
        return $this->getValue(1);
    }

    public function getMagX(): ?int
    {
        return $this->getValue(2);
    }

    public function getMagY(): ?int
    {
        return $this->getValue(3);
    }

    public function getMagZ(): ?int
    {
        return $this->getValue(4);
    }

    public function getCalibratedMagX(): ?float
    {
        return $this->getValue(5);
    }

    public function getCalibratedMagY(): ?float
    {
        return $this->getValue(6);
    }

    public function getCalibratedMagZ(): ?float
    {
        return $this->getValue(7);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("MagnetometerData", MessageNumber::MagnetometerData, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16),
            new Field('SampleTimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16),
            new Field('MagX', 2, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16),
            new Field('MagY', 3, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16),
            new Field('MagZ', 4, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16),
            new Field('CalibratedMagX', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'G', false, ProfileType::FLOAT32),
            new Field('CalibratedMagY', 6, FitBaseType::FLOAT32, 1.0, 0.0, 'G', false, ProfileType::FLOAT32),
            new Field('CalibratedMagZ', 7, FitBaseType::FLOAT32, 1.0, 0.0, 'G', false, ProfileType::FLOAT32)
        ]);
    }
}
