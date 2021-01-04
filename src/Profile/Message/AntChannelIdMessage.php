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
    public function getChannelNumber(): ?int
    {
        return $this->getValue(0);
    }

    public function getDeviceType(): ?int
    {
        return $this->getValue(1);
    }

    public function getDeviceNumber(): ?int
    {
        return $this->getValue(2);
    }

    public function getTransmissionType(): ?int
    {
        return $this->getValue(3);
    }

    public function getDeviceIndex(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("AntChannelId", MessageNumber::AntChannelId, [
        new Field('ChannelNumber', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('DeviceType', 1, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('DeviceNumber', 2, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z),
            new Field('TransmissionType', 3, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('DeviceIndex', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)
        ]);
    }
}
