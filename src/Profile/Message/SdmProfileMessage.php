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
     * Gets the MessageIndex
     */
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    /**
     * Gets the Enabled
     */
    public function getEnabled(): ?bool
    {
        return $this->getValue(0);
    }

    /**
     * Gets the SdmAntId
     */
    public function getSdmAntId(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the SdmCalFactor
     */
    public function getSdmCalFactor(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the Odometer
     */
    public function getOdometer(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the SpeedSource
     */
    public function getSpeedSource(): ?bool
    {
        return $this->getValue(4);
    }

    /**
     * Gets the SdmAntIdTransType
     */
    public function getSdmAntIdTransType(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the OdometerRollover
     */
    public function getOdometerRollover(): ?int
    {
        return $this->getValue(7);
    }
}
