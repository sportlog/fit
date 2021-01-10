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
 * SdmProfileMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Enabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('SdmAntId', 1, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
#[Field('SdmCalFactor', 2, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('Odometer', 3, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('SpeedSource', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('SdmAntIdTransType', 5, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('OdometerRollover', 7, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class SdmProfileMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SdmProfile', MessageNumber::SdmProfile);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the enabled
     */
    public function getEnabled(): bool|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the sdm ant id
     */
    public function getSdmAntId(): int|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the sdm cal factor
     */
    public function getSdmCalFactor(): int|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the odometer
     */
    public function getOdometer(): int|float|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the speed source
     */
    public function getSpeedSource(): bool|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the sdm ant id trans type
     */
    public function getSdmAntIdTransType(): int|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the odometer rollover
     */
    public function getOdometerRollover(): int|null
    {
        return $this->getFieldValue(7);
    }
}
