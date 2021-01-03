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
 * AntChannelIdMessage message
 */
final class AntChannelIdMessage extends Message
{
    #[Field('ChannelNumber', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $channelNumber;

    #[Field('DeviceType', 1, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $deviceType;

    #[Field('DeviceNumber', 2, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
    public ?int $deviceNumber;

    #[Field('TransmissionType', 3, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $transmissionType;

    #[Field('DeviceIndex', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)]
    public ?int $deviceIndex;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("AntChannelId", MessageNumber::AntChannelId);
    }
}
