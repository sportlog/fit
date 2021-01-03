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
 * DeviceSettingsMessage message
 */
final class DeviceSettingsMessage extends Message
{
    #[Field('ActiveTimeZone', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $activeTimeZone;

    #[Field('UtcOffset', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $utcOffset;

    #[Field('TimeOffset', 2, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeOffset;

    #[Field('TimeMode', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::TIMEMODE)]
    public ?int $timeMode;

    #[Field('TimeZoneOffset', 5, FitBaseType::SINT8, 4.0, 0.0, 'hr', false, ProfileType::SINT8)]
    public ?int $timeZoneOffset;

    #[Field('BacklightMode', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BACKLIGHTMODE)]
    public ?int $backlightMode;

    #[Field('ActivityTrackerEnabled', 36, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $activityTrackerEnabled;

    #[Field('ClockTime', 39, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $clockTime;

    #[Field('PagesEnabled', 40, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $pagesEnabled;

    #[Field('MoveAlertEnabled', 46, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $moveAlertEnabled;

    #[Field('DateMode', 47, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DATEMODE)]
    public ?int $dateMode;

    #[Field('DisplayOrientation', 55, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYORIENTATION)]
    public ?int $displayOrientation;

    #[Field('MountingSide', 56, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SIDE)]
    public ?int $mountingSide;

    #[Field('DefaultPage', 57, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $defaultPage;

    #[Field('AutosyncMinSteps', 58, FitBaseType::UINT16, 1.0, 0.0, 'steps', false, ProfileType::UINT16)]
    public ?int $autosyncMinSteps;

    #[Field('AutosyncMinTime', 59, FitBaseType::UINT16, 1.0, 0.0, 'minutes', false, ProfileType::UINT16)]
    public ?int $autosyncMinTime;

    #[Field('LactateThresholdAutodetectEnabled', 80, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $lactateThresholdAutodetectEnabled;

    #[Field('BleAutoUploadEnabled', 86, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $bleAutoUploadEnabled;

    #[Field('AutoSyncFrequency', 89, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::AUTOSYNCFREQUENCY)]
    public ?int $autoSyncFrequency;

    #[Field('AutoActivityDetect', 90, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::AUTOACTIVITYDETECT)]
    public ?int $autoActivityDetect;

    #[Field('NumberOfScreens', 94, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $numberOfScreens;

    #[Field('SmartNotificationDisplayOrientation', 95, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYORIENTATION)]
    public ?int $smartNotificationDisplayOrientation;

    #[Field('TapInterface', 134, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SWITCH)]
    public ?int $tapInterface;

    #[Field('TapSensitivity', 174, FitBaseType::ENUM, 1.0, 1.0, '', false, ProfileType::TAPSENSITIVITY)]
    public ?int $tapSensitivity;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("DeviceSettings", MessageNumber::DeviceSettings);
    }
}
