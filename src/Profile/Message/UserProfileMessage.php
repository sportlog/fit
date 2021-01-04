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
final class UserProfileMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getFriendlyName(): ?string
    {
        return $this->getValue(0);
    }

    public function getGender(): ?int
    {
        return $this->getValue(1);
    }

    public function getAge(): ?int
    {
        return $this->getValue(2);
    }

    public function getHeight(): ?int
    {
        return $this->getValue(3);
    }

    public function getWeight(): ?int
    {
        return $this->getValue(4);
    }

    public function getLanguage(): ?int
    {
        return $this->getValue(5);
    }

    public function getElevSetting(): ?int
    {
        return $this->getValue(6);
    }

    public function getWeightSetting(): ?int
    {
        return $this->getValue(7);
    }

    public function getRestingHeartRate(): ?int
    {
        return $this->getValue(8);
    }

    public function getDefaultMaxRunningHeartRate(): ?int
    {
        return $this->getValue(9);
    }

    public function getDefaultMaxBikingHeartRate(): ?int
    {
        return $this->getValue(10);
    }

    public function getDefaultMaxHeartRate(): ?int
    {
        return $this->getValue(11);
    }

    public function getHrSetting(): ?int
    {
        return $this->getValue(12);
    }

    public function getSpeedSetting(): ?int
    {
        return $this->getValue(13);
    }

    public function getDistSetting(): ?int
    {
        return $this->getValue(14);
    }

    public function getPowerSetting(): ?int
    {
        return $this->getValue(16);
    }

    public function getActivityClass(): ?int
    {
        return $this->getValue(17);
    }

    public function getPositionSetting(): ?int
    {
        return $this->getValue(18);
    }

    public function getTemperatureSetting(): ?int
    {
        return $this->getValue(21);
    }

    public function getLocalId(): ?int
    {
        return $this->getValue(22);
    }

    public function getGlobalId(): ?int
    {
        return $this->getValue(23);
    }

    public function getWakeTime(): ?int
    {
        return $this->getValue(28);
    }

    public function getSleepTime(): ?int
    {
        return $this->getValue(29);
    }

    public function getHeightSetting(): ?int
    {
        return $this->getValue(30);
    }

    public function getUserRunningStepLength(): ?int
    {
        return $this->getValue(31);
    }

    public function getUserWalkingStepLength(): ?int
    {
        return $this->getValue(32);
    }

    public function getDepthSetting(): ?int
    {
        return $this->getValue(47);
    }

    public function getDiveCount(): ?int
    {
        return $this->getValue(49);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("UserProfile", MessageNumber::UserProfile, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('FriendlyName', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('Gender', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GENDER),
            new Field('Age', 2, FitBaseType::UINT8, 1.0, 0.0, 'years', false, ProfileType::UINT8),
            new Field('Height', 3, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8),
            new Field('Weight', 4, FitBaseType::UINT16, 10.0, 0.0, 'kg', false, ProfileType::UINT16),
            new Field('Language', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::LANGUAGE),
            new Field('ElevSetting', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE),
            new Field('WeightSetting', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE),
            new Field('RestingHeartRate', 8, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8),
            new Field('DefaultMaxRunningHeartRate', 9, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8),
            new Field('DefaultMaxBikingHeartRate', 10, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8),
            new Field('DefaultMaxHeartRate', 11, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8),
            new Field('HrSetting', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYHEART),
            new Field('SpeedSetting', 13, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE),
            new Field('DistSetting', 14, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE),
            new Field('PowerSetting', 16, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYPOWER),
            new Field('ActivityClass', 17, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYCLASS),
            new Field('PositionSetting', 18, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYPOSITION),
            new Field('TemperatureSetting', 21, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE),
            new Field('LocalId', 22, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::USERLOCALID),
            new Field('GlobalId', 23, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE),
            new Field('WakeTime', 28, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALTIMEINTODAY),
            new Field('SleepTime', 29, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALTIMEINTODAY),
            new Field('HeightSetting', 30, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE),
            new Field('UserRunningStepLength', 31, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('UserWalkingStepLength', 32, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('DepthSetting', 47, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE),
            new Field('DiveCount', 49, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)
        ]);
    }
}
