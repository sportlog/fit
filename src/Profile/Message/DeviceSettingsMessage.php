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
#[Field('ActiveTimeZone', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('UtcOffset', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('TimeOffset', 2, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeMode', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::TIMEMODE)]
#[Field('TimeZoneOffset', 5, FitBaseType::SINT8, 4.0, 0.0, 'hr', false, ProfileType::SINT8)]
#[Field('BacklightMode', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BACKLIGHTMODE)]
#[Field('ActivityTrackerEnabled', 36, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('ClockTime', 39, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('PagesEnabled', 40, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('MoveAlertEnabled', 46, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('DateMode', 47, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DATEMODE)]
#[Field('DisplayOrientation', 55, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYORIENTATION)]
#[Field('MountingSide', 56, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SIDE)]
#[Field('DefaultPage', 57, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('AutosyncMinSteps', 58, FitBaseType::UINT16, 1.0, 0.0, 'steps', false, ProfileType::UINT16)]
#[Field('AutosyncMinTime', 59, FitBaseType::UINT16, 1.0, 0.0, 'minutes', false, ProfileType::UINT16)]
#[Field('LactateThresholdAutodetectEnabled', 80, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('BleAutoUploadEnabled', 86, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('AutoSyncFrequency', 89, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::AUTOSYNCFREQUENCY)]
#[Field('AutoActivityDetect', 90, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::AUTOACTIVITYDETECT)]
#[Field('NumberOfScreens', 94, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('SmartNotificationDisplayOrientation', 95, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYORIENTATION)]
#[Field('TapInterface', 134, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SWITCH)]
#[Field('TapSensitivity', 174, FitBaseType::ENUM, 1.0, 1.0, '', false, ProfileType::TAPSENSITIVITY)]
final class DeviceSettingsMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('DeviceSettings', MessageNumber::DeviceSettings);
    }

    /**
     * Gets the active time zone
     */
    public function getActiveTimeZone(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the utc offset
     */
    public function getUtcOffset(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the time offset
     */
    public function getTimeOffset(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the time mode
     */
    public function getTimeMode(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the time zone offset
     */
    public function getTimeZoneOffset(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the backlight mode
     */
    public function getBacklightMode(): ?int
    {
        return $this->getValue(12);
    }

    /**
     * Gets the activity tracker enabled
     */
    public function getActivityTrackerEnabled(): ?bool
    {
        return $this->getValue(36);
    }

    /**
     * Gets the clock time
     */
    public function getClockTime(): ?DateTime
    {
        return $this->getValue(39);
    }

    /**
     * Gets the pages enabled
     */
    public function getPagesEnabled(): ?int
    {
        return $this->getValue(40);
    }

    /**
     * Gets the move alert enabled
     */
    public function getMoveAlertEnabled(): ?bool
    {
        return $this->getValue(46);
    }

    /**
     * Gets the date mode
     */
    public function getDateMode(): ?int
    {
        return $this->getValue(47);
    }

    /**
     * Gets the display orientation
     */
    public function getDisplayOrientation(): ?int
    {
        return $this->getValue(55);
    }

    /**
     * Gets the mounting side
     */
    public function getMountingSide(): ?int
    {
        return $this->getValue(56);
    }

    /**
     * Gets the default page
     */
    public function getDefaultPage(): ?int
    {
        return $this->getValue(57);
    }

    /**
     * Gets the autosync min steps
     */
    public function getAutosyncMinSteps(): ?int
    {
        return $this->getValue(58);
    }

    /**
     * Gets the autosync min time
     */
    public function getAutosyncMinTime(): ?int
    {
        return $this->getValue(59);
    }

    /**
     * Gets the lactate threshold autodetect enabled
     */
    public function getLactateThresholdAutodetectEnabled(): ?bool
    {
        return $this->getValue(80);
    }

    /**
     * Gets the ble auto upload enabled
     */
    public function getBleAutoUploadEnabled(): ?bool
    {
        return $this->getValue(86);
    }

    /**
     * Gets the auto sync frequency
     */
    public function getAutoSyncFrequency(): ?int
    {
        return $this->getValue(89);
    }

    /**
     * Gets the auto activity detect
     */
    public function getAutoActivityDetect(): ?int
    {
        return $this->getValue(90);
    }

    /**
     * Gets the number of screens
     */
    public function getNumberOfScreens(): ?int
    {
        return $this->getValue(94);
    }

    /**
     * Gets the smart notification display orientation
     */
    public function getSmartNotificationDisplayOrientation(): ?int
    {
        return $this->getValue(95);
    }

    /**
     * Gets the tap interface
     */
    public function getTapInterface(): ?int
    {
        return $this->getValue(134);
    }

    /**
     * Gets the tap sensitivity
     */
    public function getTapSensitivity(): ?int
    {
        return $this->getValue(174);
    }
}
