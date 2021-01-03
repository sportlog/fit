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
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Enabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $enabled;

    #[Field('SdmAntId', 1, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
    public ?int $sdmAntId;

    #[Field('SdmCalFactor', 2, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $sdmCalFactor;

    #[Field('Odometer', 3, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $odometer;

    #[Field('SpeedSource', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $speedSource;

    #[Field('SdmAntIdTransType', 5, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $sdmAntIdTransType;

    #[Field('OdometerRollover', 7, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $odometerRollover;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SdmProfile", MessageNumber::SdmProfile);
    }
}
