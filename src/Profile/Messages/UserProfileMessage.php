<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.89Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

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
        parent::__construct('UserProfile', MesgNum::USER_PROFILE);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the friendly name
     */
    public function getFriendlyName(): string|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the gender
     */
    public function getGender(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the age
     */
    public function getAge(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the height
     */
    public function getHeight(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the weight
     */
    public function getWeight(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the language
     */
    public function getLanguage(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the elev setting
     */
    public function getElevSetting(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the weight setting
     */
    public function getWeightSetting(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the resting heart rate
     */
    public function getRestingHeartRate(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the default max running heart rate
     */
    public function getDefaultMaxRunningHeartRate(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the default max biking heart rate
     */
    public function getDefaultMaxBikingHeartRate(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the default max heart rate
     */
    public function getDefaultMaxHeartRate(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the hr setting
     */
    public function getHrSetting(): int|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the speed setting
     */
    public function getSpeedSetting(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the dist setting
     */
    public function getDistSetting(): int|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the power setting
     */
    public function getPowerSetting(): int|array|null
    {
        return $this->getFieldValue(16);
    }

    /**
     * Gets the activity class
     */
    public function getActivityClass(): int|array|null
    {
        return $this->getFieldValue(17);
    }

    /**
     * Gets the position setting
     */
    public function getPositionSetting(): int|array|null
    {
        return $this->getFieldValue(18);
    }

    /**
     * Gets the temperature setting
     */
    public function getTemperatureSetting(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the local id
     */
    public function getLocalId(): int|array|null
    {
        return $this->getFieldValue(22);
    }

    /**
     * Gets the global id
     */
    public function getGlobalId(): mixed
    {
        return $this->getFieldValue(23);
    }

    /**
     * Gets the wake time
     */
    public function getWakeTime(): int|array|null
    {
        return $this->getFieldValue(28);
    }

    /**
     * Gets the sleep time
     */
    public function getSleepTime(): int|array|null
    {
        return $this->getFieldValue(29);
    }

    /**
     * Gets the height setting
     */
    public function getHeightSetting(): int|array|null
    {
        return $this->getFieldValue(30);
    }

    /**
     * Gets the user running step length
     */
    public function getUserRunningStepLength(): float|array|null
    {
        return $this->getFieldValue(31);
    }

    /**
     * Gets the user walking step length
     */
    public function getUserWalkingStepLength(): float|array|null
    {
        return $this->getFieldValue(32);
    }

    /**
     * Gets the depth setting
     */
    public function getDepthSetting(): int|array|null
    {
        return $this->getFieldValue(47);
    }

    /**
     * Gets the dive count
     */
    public function getDiveCount(): int|array|null
    {
        return $this->getFieldValue(49);
    }
}
