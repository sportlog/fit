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
 * UserProfileMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('FriendlyName', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Gender', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GENDER)]
#[Field('Age', 2, FitBaseType::UINT8, 1.0, 0.0, 'years', false, ProfileType::UINT8)]
#[Field('Height', 3, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('Weight', 4, FitBaseType::UINT16, 10.0, 0.0, 'kg', false, ProfileType::UINT16)]
#[Field('Language', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::LANGUAGE)]
#[Field('ElevSetting', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
#[Field('WeightSetting', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
#[Field('RestingHeartRate', 8, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('DefaultMaxRunningHeartRate', 9, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('DefaultMaxBikingHeartRate', 10, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('DefaultMaxHeartRate', 11, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('HrSetting', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYHEART)]
#[Field('SpeedSetting', 13, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
#[Field('DistSetting', 14, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
#[Field('PowerSetting', 16, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYPOWER)]
#[Field('ActivityClass', 17, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYCLASS)]
#[Field('PositionSetting', 18, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYPOSITION)]
#[Field('TemperatureSetting', 21, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
#[Field('LocalId', 22, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::USERLOCALID)]
#[Field('GlobalId', 23, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('WakeTime', 28, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALTIMEINTODAY)]
#[Field('SleepTime', 29, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALTIMEINTODAY)]
#[Field('HeightSetting', 30, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
#[Field('UserRunningStepLength', 31, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('UserWalkingStepLength', 32, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('DepthSetting', 47, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
#[Field('DiveCount', 49, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
final class UserProfileMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('UserProfile', MessageNumber::UserProfile);
    }

    /**
     * Gets the MessageIndex
     */
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    /**
     * Gets the FriendlyName
     */
    public function getFriendlyName(): ?string
    {
        return $this->getValue(0);
    }

    /**
     * Gets the Gender
     */
    public function getGender(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the Age
     */
    public function getAge(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the Height
     */
    public function getHeight(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the Weight
     */
    public function getWeight(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the Language
     */
    public function getLanguage(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the ElevSetting
     */
    public function getElevSetting(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the WeightSetting
     */
    public function getWeightSetting(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the RestingHeartRate
     */
    public function getRestingHeartRate(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the DefaultMaxRunningHeartRate
     */
    public function getDefaultMaxRunningHeartRate(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the DefaultMaxBikingHeartRate
     */
    public function getDefaultMaxBikingHeartRate(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Gets the DefaultMaxHeartRate
     */
    public function getDefaultMaxHeartRate(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Gets the HrSetting
     */
    public function getHrSetting(): ?int
    {
        return $this->getValue(12);
    }

    /**
     * Gets the SpeedSetting
     */
    public function getSpeedSetting(): ?int
    {
        return $this->getValue(13);
    }

    /**
     * Gets the DistSetting
     */
    public function getDistSetting(): ?int
    {
        return $this->getValue(14);
    }

    /**
     * Gets the PowerSetting
     */
    public function getPowerSetting(): ?int
    {
        return $this->getValue(16);
    }

    /**
     * Gets the ActivityClass
     */
    public function getActivityClass(): ?int
    {
        return $this->getValue(17);
    }

    /**
     * Gets the PositionSetting
     */
    public function getPositionSetting(): ?int
    {
        return $this->getValue(18);
    }

    /**
     * Gets the TemperatureSetting
     */
    public function getTemperatureSetting(): ?int
    {
        return $this->getValue(21);
    }

    /**
     * Gets the LocalId
     */
    public function getLocalId(): ?int
    {
        return $this->getValue(22);
    }

    /**
     * Gets the GlobalId
     */
    public function getGlobalId(): ?int
    {
        return $this->getValue(23);
    }

    /**
     * Gets the WakeTime
     */
    public function getWakeTime(): ?int
    {
        return $this->getValue(28);
    }

    /**
     * Gets the SleepTime
     */
    public function getSleepTime(): ?int
    {
        return $this->getValue(29);
    }

    /**
     * Gets the HeightSetting
     */
    public function getHeightSetting(): ?int
    {
        return $this->getValue(30);
    }

    /**
     * Gets the UserRunningStepLength
     */
    public function getUserRunningStepLength(): ?int
    {
        return $this->getValue(31);
    }

    /**
     * Gets the UserWalkingStepLength
     */
    public function getUserWalkingStepLength(): ?int
    {
        return $this->getValue(32);
    }

    /**
     * Gets the DepthSetting
     */
    public function getDepthSetting(): ?int
    {
        return $this->getValue(47);
    }

    /**
     * Gets the DiveCount
     */
    public function getDiveCount(): ?int
    {
        return $this->getValue(49);
    }
}
