<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
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
 * DeviceAuxBatteryInfoMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DateTime)]
#[Field('DeviceIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DeviceIndex)]
#[Field('BatteryVoltage', 1, FitBaseType::UINT16, 256.0, 0.0, 'V', false, ProfileType::Uint16)]
#[Field('BatteryStatus', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::BatteryStatus)]
#[Field('BatteryIdentifier', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
final class DeviceAuxBatteryInfoMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('DeviceAuxBatteryInfo', MesgNum::DeviceAuxBatteryInfo);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the device index
     */
    public function getDeviceIndex(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the battery voltage
     */
    public function getBatteryVoltage(): float|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the battery status
     */
    public function getBatteryStatus(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the battery identifier
     */
    public function getBatteryIdentifier(): int|array|null
    {
        return $this->getFieldValue(3);
    }
}
