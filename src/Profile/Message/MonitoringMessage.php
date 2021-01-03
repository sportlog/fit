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
 * MonitoringMessage message
 */
final class MonitoringMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('DeviceIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)]
    public ?int $deviceIndex;

    #[Field('Calories', 1, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
    public ?int $calories;

    #[Field('Distance', 2, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $distance;

    #[Field('Cycles', 3, FitBaseType::UINT32, 2.0, 0.0, 'cycles', false, ProfileType::UINT32)]
    public ?int $cycles;

    #[Field('ActiveTime', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $activeTime;

    #[Field('ActivityType', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYTYPE)]
    public ?int $activityType;

    #[Field('ActivitySubtype', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYSUBTYPE)]
    public ?int $activitySubtype;

    #[Field('ActivityLevel', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYLEVEL)]
    public ?int $activityLevel;

    #[Field('Distance16', 8, FitBaseType::UINT16, 1.0, 0.0, '100 * m', false, ProfileType::UINT16)]
    public ?int $distance16;

    #[Field('Cycles16', 9, FitBaseType::UINT16, 1.0, 0.0, '2 * cycles (steps)', false, ProfileType::UINT16)]
    public ?int $cycles16;

    #[Field('ActiveTime16', 10, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
    public ?int $activeTime16;

    #[Field('LocalTimestamp', 11, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALDATETIME)]
    public ?DateTime $localTimestamp;

    #[Field('Temperature', 12, FitBaseType::SINT16, 100.0, 0.0, 'C', false, ProfileType::SINT16)]
    public ?int $temperature;

    #[Field('TemperatureMin', 14, FitBaseType::SINT16, 100.0, 0.0, 'C', false, ProfileType::SINT16)]
    public ?int $temperatureMin;

    #[Field('TemperatureMax', 15, FitBaseType::SINT16, 100.0, 0.0, 'C', false, ProfileType::SINT16)]
    public ?int $temperatureMax;

    #[Field('ActivityTime', 16, FitBaseType::UINT16, 1.0, 0.0, 'minutes', false, ProfileType::UINT16)]
    public ?int $activityTime;

    #[Field('ActiveCalories', 19, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
    public ?int $activeCalories;

    #[Field('CurrentActivityTypeIntensity', 24, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $currentActivityTypeIntensity;

    #[Field('TimestampMin8', 25, FitBaseType::UINT8, 1.0, 0.0, 'min', false, ProfileType::UINT8)]
    public ?int $timestampMin8;

    #[Field('Timestamp16', 26, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
    public ?int $timestamp16;

    #[Field('HeartRate', 27, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $heartRate;

    #[Field('Intensity', 28, FitBaseType::UINT8, 10.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $intensity;

    #[Field('DurationMin', 29, FitBaseType::UINT16, 1.0, 0.0, 'min', false, ProfileType::UINT16)]
    public ?int $durationMin;

    #[Field('Duration', 30, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $duration;

    #[Field('Ascent', 31, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $ascent;

    #[Field('Descent', 32, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $descent;

    #[Field('ModerateActivityMinutes', 33, FitBaseType::UINT16, 1.0, 0.0, 'minutes', false, ProfileType::UINT16)]
    public ?int $moderateActivityMinutes;

    #[Field('VigorousActivityMinutes', 34, FitBaseType::UINT16, 1.0, 0.0, 'minutes', false, ProfileType::UINT16)]
    public ?int $vigorousActivityMinutes;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Monitoring", MessageNumber::Monitoring);
    }
}
