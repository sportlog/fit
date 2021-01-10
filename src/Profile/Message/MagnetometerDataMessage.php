<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Message;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\MessageNumber;
use Sportlog\FIT\Profile\ProfileType;

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
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the timestamp ms
     */
    public function getTimestampMs(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the sample time offset
     */
    public function getSampleTimeOffset(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the mag x
     */
    public function getMagX(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the mag y
     */
    public function getMagY(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the mag z
     */
    public function getMagZ(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the calibrated mag x
     */
    public function getCalibratedMagX(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the calibrated mag y
     */
    public function getCalibratedMagY(): float|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the calibrated mag z
     */
    public function getCalibratedMagZ(): float|array|null
    {
        return $this->getFieldValue(7);
    }
}
