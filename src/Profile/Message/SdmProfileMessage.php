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
final class SdmProfileMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getEnabled(): ?bool
    {
        return $this->getValue(0);
    }

    public function getSdmAntId(): ?int
    {
        return $this->getValue(1);
    }

    public function getSdmCalFactor(): ?int
    {
        return $this->getValue(2);
    }

    public function getOdometer(): ?int
    {
        return $this->getValue(3);
    }

    public function getSpeedSource(): ?bool
    {
        return $this->getValue(4);
    }

    public function getSdmAntIdTransType(): ?int
    {
        return $this->getValue(5);
    }

    public function getOdometerRollover(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SdmProfile", MessageNumber::SdmProfile, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Enabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('SdmAntId', 1, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z),
            new Field('SdmCalFactor', 2, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16),
            new Field('Odometer', 3, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32),
            new Field('SpeedSource', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('SdmAntIdTransType', 5, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('OdometerRollover', 7, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)
        ]);
    }
}
