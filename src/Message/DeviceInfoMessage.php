<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Message;

use Sportlog\ActivityProtocol\FIT\FitBaseType;

final class DeviceInfoMessage extends Message
{
    #[Field("Timestamp", 253, FitBaseType::UINT32, ProfileType::DATETIME, units: "s")]
    public float $timestamp;
    #[Field("DeviceIndex", 0, FitBaseType::UINT8, ProfileType::DEVICEINDEX)]
    public int $deviceIndex;
    #[Field("DeviceType", 1, FitBaseType::UINT8, ProfileType::UINT8)]
    public int $deviceType;
    #[Field("Manufacturer", 2, FitBaseType::UINT16, ProfileType::MANUFACTURER)]
    public int $manufacturer;
    #[Field("SerialNumber", 3, FitBaseType::UINT32Z, ProfileType::UINT32Z)]
    public int $serialNumber;
    #[Field("Product", 4, FitBaseType::UINT16, ProfileType::UINT16)]
    public int $product;
    #[Field("SoftwareVersion", 5, FitBaseType::UINT16, ProfileType::UINT16)]
    public int $softwareVersion;
    #[Field("HardwareVersion", 6, FitBaseType::UINT8, ProfileType::UINT8)]
    public int $hardwareVersion;
    #[Field("CumOperatingTime", 7, FitBaseType::UINT32, ProfileType::UINT32, units: "s")]
    public int $cumOperatingTime;
    #[Field("BatteryVoltage", 10, FitBaseType::UINT16, ProfileType::UINT16, units: "V")]
    public int $batteryVoltage;
    #[Field("BatteryStatus", 11, FitBaseType::UINT8, ProfileType::BATTERYSTATUS)]
    public int $batteryStatus;
    #[Field("SensorPosition", 18, FitBaseType::ENUM, ProfileType::BODYLOCATION)]
    public int $sensorPosition;
    #[Field("Descriptor", 19, FitBaseType::STRING, ProfileType::STRING)]
    public string $descriptor;
    #[Field("AntTransmissionType", 20, FitBaseType::UINT8Z, ProfileType::UINT8Z)]
    public int $antTransmissionType;
    #[Field("AntDeviceNumber", 21, FitBaseType::UINT16Z, ProfileType::UINT16Z)]
    public int $antDeviceNumber;
    #[Field("AntNetwork", 22, FitBaseType::ENUM, ProfileType::ANTNETWORK)]
    public int $antNetwork;
    #[Field("SourceType", 25, FitBaseType::ENUM, ProfileType::SOURCETYPE)]
    public int $sourceType;
    #[Field("ProductName", 27, FitBaseType::STRING, ProfileType::STRING)]
    public string $productName;

    public function __construct()
    {
        parent::__construct("DeviceInfo", MessageNumber::DeviceInfo);
    }
}
