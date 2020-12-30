<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Message;

use FIT\FitBaseType;

final class DeviceSettingMessage extends Message
{
    #[Field("ActiveTimeZone", 0, FitBaseType::UINT8, ProfileType::UINT8)]
    public int $activeTimeZone;
    #[Field("UtcOffset", 1, FitBaseType::UINT32, ProfileType::UINT32)]
    public float $utcOffset;
    #[Field("TimeOffset", 2, FitBaseType::UINT32, ProfileType::UINT32, units: "s")]
    public int $timeOffset;
    #[Field("TimeMode", 4, FitBaseType::ENUM, ProfileType::TIMEMODE)]
    public int $timeMode;
    #[Field("TimeZoneOffset", 5, FitBaseType::SINT8, ProfileType::SINT8, scale: 4.0, units: "hr")]
    public int $TimeZoneOffset;
    #[Field("BacklightMode", 12, FitBaseType::ENUM, ProfileType::BACKLIGHTMODE)]
    public int $backlightMode;
    
    /*#[Field("HardwareVersion", 6, FitBaseType::UINT8, ProfileType::UINT8)]
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
    public string $productName;*/

    public function __construct()
    {
        parent::__construct("DeviceSettings", MessageNumber::DeviceSettings);
    }
}
