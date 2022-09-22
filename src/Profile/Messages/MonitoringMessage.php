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
 * MonitoringMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('DeviceIndex', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)]
#[Field('Calories', 1, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('Distance', 2, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('Cycles', 3, FitBaseType::UINT32, 2.0, 0.0, 'cycles', false, ProfileType::UINT32)]
#[Field('ActiveTime', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('ActivityType', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYTYPE)]
#[Field('ActivitySubtype', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYSUBTYPE)]
#[Field('ActivityLevel', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYLEVEL)]
#[Field('Distance16', 8, FitBaseType::UINT16, 1.0, 0.0, '100 * m', false, ProfileType::UINT16)]
#[Field('Cycles16', 9, FitBaseType::UINT16, 1.0, 0.0, '2 * cycles (steps)', false, ProfileType::UINT16)]
#[Field('ActiveTime16', 10, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('LocalTimestamp', 11, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALDATETIME)]
#[Field('Temperature', 12, FitBaseType::SINT16, 100.0, 0.0, 'C', false, ProfileType::SINT16)]
#[Field('TemperatureMin', 14, FitBaseType::SINT16, 100.0, 0.0, 'C', false, ProfileType::SINT16)]
#[Field('TemperatureMax', 15, FitBaseType::SINT16, 100.0, 0.0, 'C', false, ProfileType::SINT16)]
#[Field('ActivityTime', 16, FitBaseType::UINT16, 1.0, 0.0, 'minutes', false, ProfileType::UINT16)]
#[Field('ActiveCalories', 19, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('CurrentActivityTypeIntensity', 24, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('TimestampMin8', 25, FitBaseType::UINT8, 1.0, 0.0, 'min', false, ProfileType::UINT8)]
#[Field('Timestamp16', 26, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('HeartRate', 27, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('Intensity', 28, FitBaseType::UINT8, 10.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('DurationMin', 29, FitBaseType::UINT16, 1.0, 0.0, 'min', false, ProfileType::UINT16)]
#[Field('Duration', 30, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('Ascent', 31, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('Descent', 32, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('ModerateActivityMinutes', 33, FitBaseType::UINT16, 1.0, 0.0, 'minutes', false, ProfileType::UINT16)]
#[Field('VigorousActivityMinutes', 34, FitBaseType::UINT16, 1.0, 0.0, 'minutes', false, ProfileType::UINT16)]
final class MonitoringMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Monitoring', MesgNum::MONITORING);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the device index
     */
    public function getDeviceIndex(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the calories
     */
    public function getCalories(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the distance
     */
    public function getDistance(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the cycles
     */
    public function getCycles(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the active time
     */
    public function getActiveTime(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the activity type
     */
    public function getActivityType(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the activity subtype
     */
    public function getActivitySubtype(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the activity level
     */
    public function getActivityLevel(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the distance16
     */
    public function getDistance16(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the cycles16
     */
    public function getCycles16(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the active time16
     */
    public function getActiveTime16(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the local timestamp
     */
    public function getLocalTimestamp(): DateTime|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the temperature
     */
    public function getTemperature(): float|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the temperature min
     */
    public function getTemperatureMin(): float|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the temperature max
     */
    public function getTemperatureMax(): float|array|null
    {
        return $this->getFieldValue(15);
    }

    /**
     * Gets the activity time
     */
    public function getActivityTime(): int|array|null
    {
        return $this->getFieldValue(16);
    }

    /**
     * Gets the active calories
     */
    public function getActiveCalories(): int|array|null
    {
        return $this->getFieldValue(19);
    }

    /**
     * Gets the current activity type intensity
     */
    public function getCurrentActivityTypeIntensity(): mixed
    {
        return $this->getFieldValue(24);
    }

    /**
     * Gets the timestamp min8
     */
    public function getTimestampMin8(): int|array|null
    {
        return $this->getFieldValue(25);
    }

    /**
     * Gets the timestamp16
     */
    public function getTimestamp16(): int|array|null
    {
        return $this->getFieldValue(26);
    }

    /**
     * Gets the heart rate
     */
    public function getHeartRate(): int|array|null
    {
        return $this->getFieldValue(27);
    }

    /**
     * Gets the intensity
     */
    public function getIntensity(): float|array|null
    {
        return $this->getFieldValue(28);
    }

    /**
     * Gets the duration min
     */
    public function getDurationMin(): int|array|null
    {
        return $this->getFieldValue(29);
    }

    /**
     * Gets the duration
     */
    public function getDuration(): int|array|null
    {
        return $this->getFieldValue(30);
    }

    /**
     * Gets the ascent
     */
    public function getAscent(): float|array|null
    {
        return $this->getFieldValue(31);
    }

    /**
     * Gets the descent
     */
    public function getDescent(): float|array|null
    {
        return $this->getFieldValue(32);
    }

    /**
     * Gets the moderate activity minutes
     */
    public function getModerateActivityMinutes(): int|array|null
    {
        return $this->getFieldValue(33);
    }

    /**
     * Gets the vigorous activity minutes
     */
    public function getVigorousActivityMinutes(): int|array|null
    {
        return $this->getFieldValue(34);
    }
}
