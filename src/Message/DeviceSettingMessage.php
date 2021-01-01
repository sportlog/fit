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
    #[Field("ActivityTrackerEnabled", 36, FitBaseType::ENUM, ProfileType::BOOL)]
    public int $activityTrackerEnabled;
    #[Field("ClockTime", 39, FitBaseType::UINT32, ProfileType::DATETIME)]
    public int $clockTime;
    #[Field("PagesEnabled", 40, FitBaseType::UINT16, ProfileType::UINT16)]
    public int $pagesEnabled;
    #[Field("MoveAlertEnabled", 46, FitBaseType::ENUM, ProfileType::BOOL)]
    public int $moveAlertEnabled;

    // TODO: other fields not mapped

    public function __construct()
    {
        parent::__construct("DeviceSettings", MessageNumber::DeviceSettings);
    }
}
