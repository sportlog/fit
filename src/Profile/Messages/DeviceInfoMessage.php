<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.89Release
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
 * DeviceInfoMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('DeviceIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)]
#[Field('DeviceType', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Manufacturer', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER)]
#[Field('SerialNumber', 3, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::UINT32Z)]
#[Field('Product', 4, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('SoftwareVersion', 5, FitBaseType::UINT16, 100.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('HardwareVersion', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('CumOperatingTime', 7, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('BatteryVoltage', 10, FitBaseType::UINT16, 256.0, 0.0, 'V', false, ProfileType::UINT16)]
#[Field('BatteryStatus', 11, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::BATTERYSTATUS)]
#[Field('SensorPosition', 18, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BODYLOCATION)]
#[Field('Descriptor', 19, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('AntTransmissionType', 20, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('AntDeviceNumber', 21, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
#[Field('AntNetwork', 22, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ANTNETWORK)]
#[Field('SourceType', 25, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SOURCETYPE)]
#[Field('ProductName', 27, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('BatteryLevel', 32, FitBaseType::UINT8, 1.0, 0.0, '%', false, ProfileType::UINT8)]
final class DeviceInfoMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('DeviceInfo', MesgNum::DEVICE_INFO);
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
     * Gets the device type
     */
    public function getDeviceType(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the manufacturer
     */
    public function getManufacturer(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the serial number
     */
    public function getSerialNumber(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the product
     */
    public function getProduct(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the software version
     */
    public function getSoftwareVersion(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the hardware version
     */
    public function getHardwareVersion(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the cum operating time
     */
    public function getCumOperatingTime(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the battery voltage
     */
    public function getBatteryVoltage(): float|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the battery status
     */
    public function getBatteryStatus(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the sensor position
     */
    public function getSensorPosition(): int|array|null
    {
        return $this->getFieldValue(18);
    }

    /**
     * Gets the descriptor
     */
    public function getDescriptor(): string|array|null
    {
        return $this->getFieldValue(19);
    }

    /**
     * Gets the ant transmission type
     */
    public function getAntTransmissionType(): int|array|null
    {
        return $this->getFieldValue(20);
    }

    /**
     * Gets the ant device number
     */
    public function getAntDeviceNumber(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the ant network
     */
    public function getAntNetwork(): int|array|null
    {
        return $this->getFieldValue(22);
    }

    /**
     * Gets the source type
     */
    public function getSourceType(): int|array|null
    {
        return $this->getFieldValue(25);
    }

    /**
     * Gets the product name
     */
    public function getProductName(): string|array|null
    {
        return $this->getFieldValue(27);
    }

    /**
     * Gets the battery level
     */
    public function getBatteryLevel(): int|array|null
    {
        return $this->getFieldValue(32);
    }
}
