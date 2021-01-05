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

    public function getActiveTimeZone(): ?int
    {
        return $this->getValue(0);
    }

    public function getUtcOffset(): ?int
    {
        return $this->getValue(1);
    }

    public function getTimeOffset(): ?int
    {
        return $this->getValue(2);
    }

    public function getTimeMode(): ?int
    {
        return $this->getValue(4);
    }

    public function getTimeZoneOffset(): ?int
    {
        return $this->getValue(5);
    }

    public function getBacklightMode(): ?int
    {
        return $this->getValue(12);
    }

    public function getActivityTrackerEnabled(): ?bool
    {
        return $this->getValue(36);
    }

    public function getClockTime(): ?DateTime
    {
        return $this->getValue(39);
    }

    public function getPagesEnabled(): ?int
    {
        return $this->getValue(40);
    }

    public function getMoveAlertEnabled(): ?bool
    {
        return $this->getValue(46);
    }

    public function getDateMode(): ?int
    {
        return $this->getValue(47);
    }

    public function getDisplayOrientation(): ?int
    {
        return $this->getValue(55);
    }

    public function getMountingSide(): ?int
    {
        return $this->getValue(56);
    }

    public function getDefaultPage(): ?int
    {
        return $this->getValue(57);
    }

    public function getAutosyncMinSteps(): ?int
    {
        return $this->getValue(58);
    }

    public function getAutosyncMinTime(): ?int
    {
        return $this->getValue(59);
    }

    public function getLactateThresholdAutodetectEnabled(): ?bool
    {
        return $this->getValue(80);
    }

    public function getBleAutoUploadEnabled(): ?bool
    {
        return $this->getValue(86);
    }

    public function getAutoSyncFrequency(): ?int
    {
        return $this->getValue(89);
    }

    public function getAutoActivityDetect(): ?int
    {
        return $this->getValue(90);
    }

    public function getNumberOfScreens(): ?int
    {
        return $this->getValue(94);
    }

    public function getSmartNotificationDisplayOrientation(): ?int
    {
        return $this->getValue(95);
    }

    public function getTapInterface(): ?int
    {
        return $this->getValue(134);
    }

    public function getTapSensitivity(): ?int
    {
        return $this->getValue(174);
    }
}
