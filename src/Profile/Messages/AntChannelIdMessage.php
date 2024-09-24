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
 * AntChannelIdMessage message
 */
#[Field('ChannelNumber', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('DeviceType', 1, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('DeviceNumber', 2, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
#[Field('TransmissionType', 3, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('DeviceIndex', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)]
final class AntChannelIdMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('AntChannelId', MesgNum::ANT_CHANNEL_ID);
    }

    /**
     * Gets the channel number
     */
    public function getChannelNumber(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the device type
     */
    public function getDeviceType(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the device number
     */
    public function getDeviceNumber(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the transmission type
     */
    public function getTransmissionType(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the device index
     */
    public function getDeviceIndex(): int|array|null
    {
        return $this->getFieldValue(4);
    }
}
