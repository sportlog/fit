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
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('SampleTimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('MagX', 2, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('MagY', 3, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('MagZ', 4, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('CalibratedMagX', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'G', false, ProfileType::FLOAT32)]
#[Field('CalibratedMagY', 6, FitBaseType::FLOAT32, 1.0, 0.0, 'G', false, ProfileType::FLOAT32)]
#[Field('CalibratedMagZ', 7, FitBaseType::FLOAT32, 1.0, 0.0, 'G', false, ProfileType::FLOAT32)]
final class MagnetometerDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('MagnetometerData', MessageNumber::MagnetometerData);
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
     * Gets the MagX
     */
    public function getMagX(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the MagY
     */
    public function getMagY(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the MagZ
     */
    public function getMagZ(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the CalibratedMagX
     */
    public function getCalibratedMagX(): ?float
    {
        return $this->getValue(5);
    }

    /**
     * Gets the CalibratedMagY
     */
    public function getCalibratedMagY(): ?float
    {
        return $this->getValue(6);
    }

    /**
     * Gets the CalibratedMagZ
     */
    public function getCalibratedMagZ(): ?float
    {
        return $this->getValue(7);
    }
}
