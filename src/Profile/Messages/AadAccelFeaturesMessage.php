<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.141 SDK
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
 * AadAccelFeaturesMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('Time', 0, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('EnergyTotal', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('ZeroCrossCnt', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('Instance', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('TimeAboveThreshold', 4, FitBaseType::UINT16, 25.0, 0.0, 's', false, ProfileType::UINT16)]
final class AadAccelFeaturesMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('AadAccelFeatures', MesgNum::AadAccelFeatures->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the time
     */
    public function getTime(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the energy total
     */
    public function getEnergyTotal(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the zero cross cnt
     */
    public function getZeroCrossCnt(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the instance
     */
    public function getInstance(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the time above threshold
     */
    public function getTimeAboveThreshold(): float|array|null
    {
        return $this->getFieldValue(4);
    }
}
