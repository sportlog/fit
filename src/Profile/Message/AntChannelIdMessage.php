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
        parent::__construct('AntChannelId', MessageNumber::AntChannelId);
    }

    /**
     * Gets the channel number
     */
    public function getChannelNumber(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the device type
     */
    public function getDeviceType(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the device number
     */
    public function getDeviceNumber(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the transmission type
     */
    public function getTransmissionType(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the device index
     */
    public function getDeviceIndex(): ?int
    {
        return $this->getValue(4);
    }
}
