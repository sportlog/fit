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
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('FriendlyName', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $friendlyName;

    #[Field('Gender', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GENDER)]
    public ?int $gender;

    #[Field('Age', 2, FitBaseType::UINT8, 1.0, 0.0, 'years', false, ProfileType::UINT8)]
    public ?int $age;

    #[Field('Height', 3, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $height;

    #[Field('Weight', 4, FitBaseType::UINT16, 10.0, 0.0, 'kg', false, ProfileType::UINT16)]
    public ?int $weight;

    #[Field('Language', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::LANGUAGE)]
    public ?int $language;

    #[Field('ElevSetting', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
    public ?int $elevSetting;

    #[Field('WeightSetting', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
    public ?int $weightSetting;

    #[Field('RestingHeartRate', 8, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $restingHeartRate;

    #[Field('DefaultMaxRunningHeartRate', 9, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $defaultMaxRunningHeartRate;

    #[Field('DefaultMaxBikingHeartRate', 10, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $defaultMaxBikingHeartRate;

    #[Field('DefaultMaxHeartRate', 11, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $defaultMaxHeartRate;

    #[Field('HrSetting', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYHEART)]
    public ?int $hrSetting;

    #[Field('SpeedSetting', 13, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
    public ?int $speedSetting;

    #[Field('DistSetting', 14, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
    public ?int $distSetting;

    #[Field('PowerSetting', 16, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYPOWER)]
    public ?int $powerSetting;

    #[Field('ActivityClass', 17, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYCLASS)]
    public ?int $activityClass;

    #[Field('PositionSetting', 18, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYPOSITION)]
    public ?int $positionSetting;

    #[Field('TemperatureSetting', 21, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
    public ?int $temperatureSetting;

    #[Field('LocalId', 22, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::USERLOCALID)]
    public ?int $localId;

    #[Field('GlobalId', 23, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $globalId;

    #[Field('WakeTime', 28, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALTIMEINTODAY)]
    public ?int $wakeTime;

    #[Field('SleepTime', 29, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALTIMEINTODAY)]
    public ?int $sleepTime;

    #[Field('HeightSetting', 30, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
    public ?int $heightSetting;

    #[Field('UserRunningStepLength', 31, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $userRunningStepLength;

    #[Field('UserWalkingStepLength', 32, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $userWalkingStepLength;

    #[Field('DepthSetting', 47, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
    public ?int $depthSetting;

    #[Field('DiveCount', 49, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $diveCount;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("UserProfile", MessageNumber::UserProfile);
    }
}
