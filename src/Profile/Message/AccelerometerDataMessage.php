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

    public function getAccelX(): ?int
    {
        return $this->getValue(2);
    }

    public function getAccelY(): ?int
    {
        return $this->getValue(3);
    }

    public function getAccelZ(): ?int
    {
        return $this->getValue(4);
    }

    public function getCalibratedAccelX(): ?float
    {
        return $this->getValue(5);
    }

    public function getCalibratedAccelY(): ?float
    {
        return $this->getValue(6);
    }

    public function getCalibratedAccelZ(): ?float
    {
        return $this->getValue(7);
    }

    public function getCompressedCalibratedAccelX(): ?int
    {
        return $this->getValue(8);
    }

    public function getCompressedCalibratedAccelY(): ?int
    {
        return $this->getValue(9);
    }

    public function getCompressedCalibratedAccelZ(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("AccelerometerData", MessageNumber::AccelerometerData, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16),
            new Field('SampleTimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16),
            new Field('AccelX', 2, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16),
            new Field('AccelY', 3, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16),
            new Field('AccelZ', 4, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16),
            new Field('CalibratedAccelX', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32),
            new Field('CalibratedAccelY', 6, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32),
            new Field('CalibratedAccelZ', 7, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32),
            new Field('CompressedCalibratedAccelX', 8, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16),
            new Field('CompressedCalibratedAccelY', 9, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16),
            new Field('CompressedCalibratedAccelZ', 10, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16)
        ]);
    }
}
