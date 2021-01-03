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
 * DeviceInfoMessage message
 */
final class DeviceInfoMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('DeviceIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)]
    public ?int $deviceIndex;

    #[Field('DeviceType', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $deviceType;

    #[Field('Manufacturer', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER)]
    public ?int $manufacturer;

    #[Field('SerialNumber', 3, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::UINT32Z)]
    public ?int $serialNumber;

    #[Field('Product', 4, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $product;

    #[Field('SoftwareVersion', 5, FitBaseType::UINT16, 100.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $softwareVersion;

    #[Field('HardwareVersion', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $hardwareVersion;

    #[Field('CumOperatingTime', 7, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $cumOperatingTime;

    #[Field('BatteryVoltage', 10, FitBaseType::UINT16, 256.0, 0.0, 'V', false, ProfileType::UINT16)]
    public ?int $batteryVoltage;

    #[Field('BatteryStatus', 11, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::BATTERYSTATUS)]
    public ?int $batteryStatus;

    #[Field('SensorPosition', 18, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BODYLOCATION)]
    public ?int $sensorPosition;

    #[Field('Descriptor', 19, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $descriptor;

    #[Field('AntTransmissionType', 20, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $antTransmissionType;

    #[Field('AntDeviceNumber', 21, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
    public ?int $antDeviceNumber;

    #[Field('AntNetwork', 22, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ANTNETWORK)]
    public ?int $antNetwork;

    #[Field('SourceType', 25, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SOURCETYPE)]
    public ?int $sourceType;

    #[Field('ProductName', 27, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $productName;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("DeviceInfo", MessageNumber::DeviceInfo);
    }
}
