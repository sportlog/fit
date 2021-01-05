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
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('SampleTimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('AccelX', 2, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('AccelY', 3, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('AccelZ', 4, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('CalibratedAccelX', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32)]
#[Field('CalibratedAccelY', 6, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32)]
#[Field('CalibratedAccelZ', 7, FitBaseType::FLOAT32, 1.0, 0.0, 'g', false, ProfileType::FLOAT32)]
#[Field('CompressedCalibratedAccelX', 8, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16)]
#[Field('CompressedCalibratedAccelY', 9, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16)]
#[Field('CompressedCalibratedAccelZ', 10, FitBaseType::SINT16, 1.0, 0.0, 'mG', false, ProfileType::SINT16)]
final class AccelerometerDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('AccelerometerData', MessageNumber::AccelerometerData);
    }

    /**
     * Gets the Timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the TimestampMs
     */
    public function getTimestampMs(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the SampleTimeOffset
     */
    public function getSampleTimeOffset(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the AccelX
     */
    public function getAccelX(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the AccelY
     */
    public function getAccelY(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the AccelZ
     */
    public function getAccelZ(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the CalibratedAccelX
     */
    public function getCalibratedAccelX(): ?float
    {
        return $this->getValue(5);
    }

    /**
     * Gets the CalibratedAccelY
     */
    public function getCalibratedAccelY(): ?float
    {
        return $this->getValue(6);
    }

    /**
     * Gets the CalibratedAccelZ
     */
    public function getCalibratedAccelZ(): ?float
    {
        return $this->getValue(7);
    }

    /**
     * Gets the CompressedCalibratedAccelX
     */
    public function getCompressedCalibratedAccelX(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the CompressedCalibratedAccelY
     */
    public function getCompressedCalibratedAccelY(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the CompressedCalibratedAccelZ
     */
    public function getCompressedCalibratedAccelZ(): ?int
    {
        return $this->getValue(10);
    }
}
