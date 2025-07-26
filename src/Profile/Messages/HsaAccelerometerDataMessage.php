<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.171 SDK
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * HsaAccelerometerDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('SamplingInterval', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('AccelX', 2, FitBaseType::SINT16, 1.024, 0.0, 'mG', false, ProfileType::SINT16)]
#[Field('AccelY', 3, FitBaseType::SINT16, 1.024, 0.0, 'mG', false, ProfileType::SINT16)]
#[Field('AccelZ', 4, FitBaseType::SINT16, 1.024, 0.0, 'mG', false, ProfileType::SINT16)]
#[Field('Timestamp32k', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
final class HsaAccelerometerDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('HsaAccelerometerData', MesgNum::HSA_ACCELEROMETER_DATA);
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
     * Gets the sampling interval
     */
    public function getSamplingInterval(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the accel x
     */
    public function getAccelX(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the accel y
     */
    public function getAccelY(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the accel z
     */
    public function getAccelZ(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the timestamp32k
     */
    public function getTimestamp32k(): int|array|null
    {
        return $this->getFieldValue(5);
    }
}
