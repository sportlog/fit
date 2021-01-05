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
     * Gets the ActiveTimeZone
     */
    public function getActiveTimeZone(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the UtcOffset
     */
    public function getUtcOffset(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the TimeOffset
     */
    public function getTimeOffset(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the TimeMode
     */
    public function getTimeMode(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the TimeZoneOffset
     */
    public function getTimeZoneOffset(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the BacklightMode
     */
    public function getBacklightMode(): ?int
    {
        return $this->getValue(12);
    }

    /**
     * Gets the ActivityTrackerEnabled
     */
    public function getActivityTrackerEnabled(): ?bool
    {
        return $this->getValue(36);
    }

    /**
     * Gets the ClockTime
     */
    public function getClockTime(): ?DateTime
    {
        return $this->getValue(39);
    }

    /**
     * Gets the PagesEnabled
     */
    public function getPagesEnabled(): ?int
    {
        return $this->getValue(40);
    }

    /**
     * Gets the MoveAlertEnabled
     */
    public function getMoveAlertEnabled(): ?bool
    {
        return $this->getValue(46);
    }

    /**
     * Gets the DateMode
     */
    public function getDateMode(): ?int
    {
        return $this->getValue(47);
    }

    /**
     * Gets the DisplayOrientation
     */
    public function getDisplayOrientation(): ?int
    {
        return $this->getValue(55);
    }

    /**
     * Gets the MountingSide
     */
    public function getMountingSide(): ?int
    {
        return $this->getValue(56);
    }

    /**
     * Gets the DefaultPage
     */
    public function getDefaultPage(): ?int
    {
        return $this->getValue(57);
    }

    /**
     * Gets the AutosyncMinSteps
     */
    public function getAutosyncMinSteps(): ?int
    {
        return $this->getValue(58);
    }

    /**
     * Gets the AutosyncMinTime
     */
    public function getAutosyncMinTime(): ?int
    {
        return $this->getValue(59);
    }

    /**
     * Gets the LactateThresholdAutodetectEnabled
     */
    public function getLactateThresholdAutodetectEnabled(): ?bool
    {
        return $this->getValue(80);
    }

    /**
     * Gets the BleAutoUploadEnabled
     */
    public function getBleAutoUploadEnabled(): ?bool
    {
        return $this->getValue(86);
    }

    /**
     * Gets the AutoSyncFrequency
     */
    public function getAutoSyncFrequency(): ?int
    {
        return $this->getValue(89);
    }

    /**
     * Gets the AutoActivityDetect
     */
    public function getAutoActivityDetect(): ?int
    {
        return $this->getValue(90);
    }

    /**
     * Gets the NumberOfScreens
     */
    public function getNumberOfScreens(): ?int
    {
        return $this->getValue(94);
    }

    /**
     * Gets the SmartNotificationDisplayOrientation
     */
    public function getSmartNotificationDisplayOrientation(): ?int
    {
        return $this->getValue(95);
    }

    /**
     * Gets the TapInterface
     */
    public function getTapInterface(): ?int
    {
        return $this->getValue(134);
    }

    /**
     * Gets the TapSensitivity
     */
    public function getTapSensitivity(): ?int
    {
        return $this->getValue(174);
    }
}
