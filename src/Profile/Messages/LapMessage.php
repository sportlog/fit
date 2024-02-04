<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.126Release
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
 * LapMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT)]
#[Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE)]
#[Field('StartTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('StartPositionLat', 3, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('StartPositionLong', 4, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('EndPositionLat', 5, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('EndPositionLong', 6, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('TotalElapsedTime', 7, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalTimerTime', 8, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalDistance', 9, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('TotalCycles', 10, FitBaseType::UINT32, 1.0, 0.0, 'cycles', false, ProfileType::UINT32)]
#[Field('TotalCalories', 11, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('TotalFatCalories', 12, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('AvgSpeed', 13, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('MaxSpeed', 14, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('AvgHeartRate', 15, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('MaxHeartRate', 16, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('AvgCadence', 17, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('MaxCadence', 18, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('AvgPower', 19, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('MaxPower', 20, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('TotalAscent', 21, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('TotalDescent', 22, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('Intensity', 23, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::INTENSITY)]
#[Field('LapTrigger', 24, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::LAPTRIGGER)]
#[Field('Sport', 25, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('EventGroup', 26, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('NumLengths', 32, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16)]
#[Field('NormalizedPower', 33, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('LeftRightBalance', 34, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE100)]
#[Field('FirstLengthIndex', 35, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('AvgStrokeDistance', 37, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('SwimStroke', 38, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SWIMSTROKE)]
#[Field('SubSport', 39, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('NumActiveLengths', 40, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16)]
#[Field('TotalWork', 41, FitBaseType::UINT32, 1.0, 0.0, 'J', false, ProfileType::UINT32)]
#[Field('AvgAltitude', 42, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
#[Field('MaxAltitude', 43, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
#[Field('GpsAccuracy', 44, FitBaseType::UINT8, 1.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('AvgGrade', 45, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('AvgPosGrade', 46, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('AvgNegGrade', 47, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('MaxPosGrade', 48, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('MaxNegGrade', 49, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('AvgTemperature', 50, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('MaxTemperature', 51, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('TotalMovingTime', 52, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('AvgPosVerticalSpeed', 53, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('AvgNegVerticalSpeed', 54, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('MaxPosVerticalSpeed', 55, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('MaxNegVerticalSpeed', 56, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('TimeInHrZone', 57, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInSpeedZone', 58, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInCadenceZone', 59, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInPowerZone', 60, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('RepetitionNum', 61, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('MinAltitude', 62, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
#[Field('MinHeartRate', 63, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('WktStepIndex', 71, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('OpponentScore', 74, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('StrokeCount', 75, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('ZoneCount', 76, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('AvgVerticalOscillation', 77, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
#[Field('AvgStanceTimePercent', 78, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('AvgStanceTime', 79, FitBaseType::UINT16, 10.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('AvgFractionalCadence', 80, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('MaxFractionalCadence', 81, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('TotalFractionalCycles', 82, FitBaseType::UINT8, 128.0, 0.0, 'cycles', false, ProfileType::UINT8)]
#[Field('PlayerScore', 83, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('AvgTotalHemoglobinConc', 84, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
#[Field('MinTotalHemoglobinConc', 85, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
#[Field('MaxTotalHemoglobinConc', 86, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
#[Field('AvgSaturatedHemoglobinPercent', 87, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('MinSaturatedHemoglobinPercent', 88, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('MaxSaturatedHemoglobinPercent', 89, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('AvgLeftTorqueEffectiveness', 91, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgRightTorqueEffectiveness', 92, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgLeftPedalSmoothness', 93, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgRightPedalSmoothness', 94, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgCombinedPedalSmoothness', 95, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('TimeStanding', 98, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('StandCount', 99, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('AvgLeftPco', 100, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('AvgRightPco', 101, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('AvgLeftPowerPhase', 102, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgLeftPowerPhasePeak', 103, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgRightPowerPhase', 104, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgRightPowerPhasePeak', 105, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgPowerPosition', 106, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('MaxPowerPosition', 107, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('AvgCadencePosition', 108, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('MaxCadencePosition', 109, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('EnhancedAvgSpeed', 110, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('EnhancedMaxSpeed', 111, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('EnhancedAvgAltitude', 112, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
#[Field('EnhancedMinAltitude', 113, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
#[Field('EnhancedMaxAltitude', 114, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
#[Field('AvgLevMotorPower', 115, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('MaxLevMotorPower', 116, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('LevBatteryConsumption', 117, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgVerticalRatio', 118, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('AvgStanceTimeBalance', 119, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('AvgStepLength', 120, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
#[Field('AvgVam', 121, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('AvgDepth', 122, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('MaxDepth', 123, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('MinTemperature', 124, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('EnhancedAvgRespirationRate', 136, FitBaseType::UINT16, 100.0, 0.0, 'Breaths/min', false, ProfileType::UINT16)]
#[Field('EnhancedMaxRespirationRate', 137, FitBaseType::UINT16, 100.0, 0.0, 'Breaths/min', false, ProfileType::UINT16)]
#[Field('AvgRespirationRate', 147, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('MaxRespirationRate', 148, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('TotalGrit', 149, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
#[Field('TotalFlow', 150, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
#[Field('JumpCount', 151, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('AvgGrit', 153, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
#[Field('AvgFlow', 154, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
#[Field('TotalFractionalAscent', 156, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('TotalFractionalDescent', 157, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('AvgCoreTemperature', 158, FitBaseType::UINT16, 100.0, 0.0, 'C', false, ProfileType::UINT16)]
#[Field('MinCoreTemperature', 159, FitBaseType::UINT16, 100.0, 0.0, 'C', false, ProfileType::UINT16)]
#[Field('MaxCoreTemperature', 160, FitBaseType::UINT16, 100.0, 0.0, 'C', false, ProfileType::UINT16)]
final class LapMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Lap', MesgNum::LAP);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the event
     */
    public function getEvent(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the event type
     */
    public function getEventType(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the start time
     */
    public function getStartTime(): DateTime|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the start position lat
     */
    public function getStartPositionLat(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the start position long
     */
    public function getStartPositionLong(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the end position lat
     */
    public function getEndPositionLat(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the end position long
     */
    public function getEndPositionLong(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the total elapsed time
     */
    public function getTotalElapsedTime(): float|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the total timer time
     */
    public function getTotalTimerTime(): float|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the total distance
     */
    public function getTotalDistance(): float|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the total cycles
     */
    public function getTotalCycles(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the total calories
     */
    public function getTotalCalories(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the total fat calories
     */
    public function getTotalFatCalories(): int|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the avg speed
     */
    public function getAvgSpeed(): float|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the max speed
     */
    public function getMaxSpeed(): float|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the avg heart rate
     */
    public function getAvgHeartRate(): int|array|null
    {
        return $this->getFieldValue(15);
    }

    /**
     * Gets the max heart rate
     */
    public function getMaxHeartRate(): int|array|null
    {
        return $this->getFieldValue(16);
    }

    /**
     * Gets the avg cadence
     */
    public function getAvgCadence(): int|array|null
    {
        return $this->getFieldValue(17);
    }

    /**
     * Gets the max cadence
     */
    public function getMaxCadence(): int|array|null
    {
        return $this->getFieldValue(18);
    }

    /**
     * Gets the avg power
     */
    public function getAvgPower(): int|array|null
    {
        return $this->getFieldValue(19);
    }

    /**
     * Gets the max power
     */
    public function getMaxPower(): int|array|null
    {
        return $this->getFieldValue(20);
    }

    /**
     * Gets the total ascent
     */
    public function getTotalAscent(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the total descent
     */
    public function getTotalDescent(): int|array|null
    {
        return $this->getFieldValue(22);
    }

    /**
     * Gets the intensity
     */
    public function getIntensity(): int|array|null
    {
        return $this->getFieldValue(23);
    }

    /**
     * Gets the lap trigger
     */
    public function getLapTrigger(): int|array|null
    {
        return $this->getFieldValue(24);
    }

    /**
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(25);
    }

    /**
     * Gets the event group
     */
    public function getEventGroup(): int|array|null
    {
        return $this->getFieldValue(26);
    }

    /**
     * Gets the num lengths
     */
    public function getNumLengths(): int|array|null
    {
        return $this->getFieldValue(32);
    }

    /**
     * Gets the normalized power
     */
    public function getNormalizedPower(): int|array|null
    {
        return $this->getFieldValue(33);
    }

    /**
     * Gets the left right balance
     */
    public function getLeftRightBalance(): int|array|null
    {
        return $this->getFieldValue(34);
    }

    /**
     * Gets the first length index
     */
    public function getFirstLengthIndex(): int|array|null
    {
        return $this->getFieldValue(35);
    }

    /**
     * Gets the avg stroke distance
     */
    public function getAvgStrokeDistance(): float|array|null
    {
        return $this->getFieldValue(37);
    }

    /**
     * Gets the swim stroke
     */
    public function getSwimStroke(): int|array|null
    {
        return $this->getFieldValue(38);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|array|null
    {
        return $this->getFieldValue(39);
    }

    /**
     * Gets the num active lengths
     */
    public function getNumActiveLengths(): int|array|null
    {
        return $this->getFieldValue(40);
    }

    /**
     * Gets the total work
     */
    public function getTotalWork(): int|array|null
    {
        return $this->getFieldValue(41);
    }

    /**
     * Gets the avg altitude
     */
    public function getAvgAltitude(): float|array|null
    {
        return $this->getFieldValue(42);
    }

    /**
     * Gets the max altitude
     */
    public function getMaxAltitude(): float|array|null
    {
        return $this->getFieldValue(43);
    }

    /**
     * Gets the gps accuracy
     */
    public function getGpsAccuracy(): int|array|null
    {
        return $this->getFieldValue(44);
    }

    /**
     * Gets the avg grade
     */
    public function getAvgGrade(): float|array|null
    {
        return $this->getFieldValue(45);
    }

    /**
     * Gets the avg pos grade
     */
    public function getAvgPosGrade(): float|array|null
    {
        return $this->getFieldValue(46);
    }

    /**
     * Gets the avg neg grade
     */
    public function getAvgNegGrade(): float|array|null
    {
        return $this->getFieldValue(47);
    }

    /**
     * Gets the max pos grade
     */
    public function getMaxPosGrade(): float|array|null
    {
        return $this->getFieldValue(48);
    }

    /**
     * Gets the max neg grade
     */
    public function getMaxNegGrade(): float|array|null
    {
        return $this->getFieldValue(49);
    }

    /**
     * Gets the avg temperature
     */
    public function getAvgTemperature(): int|array|null
    {
        return $this->getFieldValue(50);
    }

    /**
     * Gets the max temperature
     */
    public function getMaxTemperature(): int|array|null
    {
        return $this->getFieldValue(51);
    }

    /**
     * Gets the total moving time
     */
    public function getTotalMovingTime(): float|array|null
    {
        return $this->getFieldValue(52);
    }

    /**
     * Gets the avg pos vertical speed
     */
    public function getAvgPosVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(53);
    }

    /**
     * Gets the avg neg vertical speed
     */
    public function getAvgNegVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(54);
    }

    /**
     * Gets the max pos vertical speed
     */
    public function getMaxPosVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(55);
    }

    /**
     * Gets the max neg vertical speed
     */
    public function getMaxNegVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(56);
    }

    /**
     * Gets the time in hr zone
     */
    public function getTimeInHrZone(): float|array|null
    {
        return $this->getFieldValue(57);
    }

    /**
     * Gets the time in speed zone
     */
    public function getTimeInSpeedZone(): float|array|null
    {
        return $this->getFieldValue(58);
    }

    /**
     * Gets the time in cadence zone
     */
    public function getTimeInCadenceZone(): float|array|null
    {
        return $this->getFieldValue(59);
    }

    /**
     * Gets the time in power zone
     */
    public function getTimeInPowerZone(): float|array|null
    {
        return $this->getFieldValue(60);
    }

    /**
     * Gets the repetition num
     */
    public function getRepetitionNum(): int|array|null
    {
        return $this->getFieldValue(61);
    }

    /**
     * Gets the min altitude
     */
    public function getMinAltitude(): float|array|null
    {
        return $this->getFieldValue(62);
    }

    /**
     * Gets the min heart rate
     */
    public function getMinHeartRate(): int|array|null
    {
        return $this->getFieldValue(63);
    }

    /**
     * Gets the wkt step index
     */
    public function getWktStepIndex(): int|array|null
    {
        return $this->getFieldValue(71);
    }

    /**
     * Gets the opponent score
     */
    public function getOpponentScore(): int|array|null
    {
        return $this->getFieldValue(74);
    }

    /**
     * Gets the stroke count
     */
    public function getStrokeCount(): int|array|null
    {
        return $this->getFieldValue(75);
    }

    /**
     * Gets the zone count
     */
    public function getZoneCount(): int|array|null
    {
        return $this->getFieldValue(76);
    }

    /**
     * Gets the avg vertical oscillation
     */
    public function getAvgVerticalOscillation(): float|array|null
    {
        return $this->getFieldValue(77);
    }

    /**
     * Gets the avg stance time percent
     */
    public function getAvgStanceTimePercent(): float|array|null
    {
        return $this->getFieldValue(78);
    }

    /**
     * Gets the avg stance time
     */
    public function getAvgStanceTime(): float|array|null
    {
        return $this->getFieldValue(79);
    }

    /**
     * Gets the avg fractional cadence
     */
    public function getAvgFractionalCadence(): float|array|null
    {
        return $this->getFieldValue(80);
    }

    /**
     * Gets the max fractional cadence
     */
    public function getMaxFractionalCadence(): float|array|null
    {
        return $this->getFieldValue(81);
    }

    /**
     * Gets the total fractional cycles
     */
    public function getTotalFractionalCycles(): float|array|null
    {
        return $this->getFieldValue(82);
    }

    /**
     * Gets the player score
     */
    public function getPlayerScore(): int|array|null
    {
        return $this->getFieldValue(83);
    }

    /**
     * Gets the avg total hemoglobin conc
     */
    public function getAvgTotalHemoglobinConc(): float|array|null
    {
        return $this->getFieldValue(84);
    }

    /**
     * Gets the min total hemoglobin conc
     */
    public function getMinTotalHemoglobinConc(): float|array|null
    {
        return $this->getFieldValue(85);
    }

    /**
     * Gets the max total hemoglobin conc
     */
    public function getMaxTotalHemoglobinConc(): float|array|null
    {
        return $this->getFieldValue(86);
    }

    /**
     * Gets the avg saturated hemoglobin percent
     */
    public function getAvgSaturatedHemoglobinPercent(): float|array|null
    {
        return $this->getFieldValue(87);
    }

    /**
     * Gets the min saturated hemoglobin percent
     */
    public function getMinSaturatedHemoglobinPercent(): float|array|null
    {
        return $this->getFieldValue(88);
    }

    /**
     * Gets the max saturated hemoglobin percent
     */
    public function getMaxSaturatedHemoglobinPercent(): float|array|null
    {
        return $this->getFieldValue(89);
    }

    /**
     * Gets the avg left torque effectiveness
     */
    public function getAvgLeftTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(91);
    }

    /**
     * Gets the avg right torque effectiveness
     */
    public function getAvgRightTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(92);
    }

    /**
     * Gets the avg left pedal smoothness
     */
    public function getAvgLeftPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(93);
    }

    /**
     * Gets the avg right pedal smoothness
     */
    public function getAvgRightPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(94);
    }

    /**
     * Gets the avg combined pedal smoothness
     */
    public function getAvgCombinedPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(95);
    }

    /**
     * Gets the time standing
     */
    public function getTimeStanding(): float|array|null
    {
        return $this->getFieldValue(98);
    }

    /**
     * Gets the stand count
     */
    public function getStandCount(): int|array|null
    {
        return $this->getFieldValue(99);
    }

    /**
     * Gets the avg left pco
     */
    public function getAvgLeftPco(): int|array|null
    {
        return $this->getFieldValue(100);
    }

    /**
     * Gets the avg right pco
     */
    public function getAvgRightPco(): int|array|null
    {
        return $this->getFieldValue(101);
    }

    /**
     * Gets the avg left power phase
     */
    public function getAvgLeftPowerPhase(): float|array|null
    {
        return $this->getFieldValue(102);
    }

    /**
     * Gets the avg left power phase peak
     */
    public function getAvgLeftPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(103);
    }

    /**
     * Gets the avg right power phase
     */
    public function getAvgRightPowerPhase(): float|array|null
    {
        return $this->getFieldValue(104);
    }

    /**
     * Gets the avg right power phase peak
     */
    public function getAvgRightPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(105);
    }

    /**
     * Gets the avg power position
     */
    public function getAvgPowerPosition(): int|array|null
    {
        return $this->getFieldValue(106);
    }

    /**
     * Gets the max power position
     */
    public function getMaxPowerPosition(): int|array|null
    {
        return $this->getFieldValue(107);
    }

    /**
     * Gets the avg cadence position
     */
    public function getAvgCadencePosition(): int|array|null
    {
        return $this->getFieldValue(108);
    }

    /**
     * Gets the max cadence position
     */
    public function getMaxCadencePosition(): int|array|null
    {
        return $this->getFieldValue(109);
    }

    /**
     * Gets the enhanced avg speed
     */
    public function getEnhancedAvgSpeed(): float|array|null
    {
        return $this->getFieldValue(110);
    }

    /**
     * Gets the enhanced max speed
     */
    public function getEnhancedMaxSpeed(): float|array|null
    {
        return $this->getFieldValue(111);
    }

    /**
     * Gets the enhanced avg altitude
     */
    public function getEnhancedAvgAltitude(): float|array|null
    {
        return $this->getFieldValue(112);
    }

    /**
     * Gets the enhanced min altitude
     */
    public function getEnhancedMinAltitude(): float|array|null
    {
        return $this->getFieldValue(113);
    }

    /**
     * Gets the enhanced max altitude
     */
    public function getEnhancedMaxAltitude(): float|array|null
    {
        return $this->getFieldValue(114);
    }

    /**
     * Gets the avg lev motor power
     */
    public function getAvgLevMotorPower(): int|array|null
    {
        return $this->getFieldValue(115);
    }

    /**
     * Gets the max lev motor power
     */
    public function getMaxLevMotorPower(): int|array|null
    {
        return $this->getFieldValue(116);
    }

    /**
     * Gets the lev battery consumption
     */
    public function getLevBatteryConsumption(): float|array|null
    {
        return $this->getFieldValue(117);
    }

    /**
     * Gets the avg vertical ratio
     */
    public function getAvgVerticalRatio(): float|array|null
    {
        return $this->getFieldValue(118);
    }

    /**
     * Gets the avg stance time balance
     */
    public function getAvgStanceTimeBalance(): float|array|null
    {
        return $this->getFieldValue(119);
    }

    /**
     * Gets the avg step length
     */
    public function getAvgStepLength(): float|array|null
    {
        return $this->getFieldValue(120);
    }

    /**
     * Gets the avg vam
     */
    public function getAvgVam(): float|array|null
    {
        return $this->getFieldValue(121);
    }

    /**
     * Gets the avg depth
     */
    public function getAvgDepth(): float|array|null
    {
        return $this->getFieldValue(122);
    }

    /**
     * Gets the max depth
     */
    public function getMaxDepth(): float|array|null
    {
        return $this->getFieldValue(123);
    }

    /**
     * Gets the min temperature
     */
    public function getMinTemperature(): int|array|null
    {
        return $this->getFieldValue(124);
    }

    /**
     * Gets the enhanced avg respiration rate
     */
    public function getEnhancedAvgRespirationRate(): float|array|null
    {
        return $this->getFieldValue(136);
    }

    /**
     * Gets the enhanced max respiration rate
     */
    public function getEnhancedMaxRespirationRate(): float|array|null
    {
        return $this->getFieldValue(137);
    }

    /**
     * Gets the avg respiration rate
     */
    public function getAvgRespirationRate(): int|array|null
    {
        return $this->getFieldValue(147);
    }

    /**
     * Gets the max respiration rate
     */
    public function getMaxRespirationRate(): int|array|null
    {
        return $this->getFieldValue(148);
    }

    /**
     * Gets the total grit
     */
    public function getTotalGrit(): float|array|null
    {
        return $this->getFieldValue(149);
    }

    /**
     * Gets the total flow
     */
    public function getTotalFlow(): float|array|null
    {
        return $this->getFieldValue(150);
    }

    /**
     * Gets the jump count
     */
    public function getJumpCount(): int|array|null
    {
        return $this->getFieldValue(151);
    }

    /**
     * Gets the avg grit
     */
    public function getAvgGrit(): float|array|null
    {
        return $this->getFieldValue(153);
    }

    /**
     * Gets the avg flow
     */
    public function getAvgFlow(): float|array|null
    {
        return $this->getFieldValue(154);
    }

    /**
     * Gets the total fractional ascent
     */
    public function getTotalFractionalAscent(): float|array|null
    {
        return $this->getFieldValue(156);
    }

    /**
     * Gets the total fractional descent
     */
    public function getTotalFractionalDescent(): float|array|null
    {
        return $this->getFieldValue(157);
    }

    /**
     * Gets the avg core temperature
     */
    public function getAvgCoreTemperature(): float|array|null
    {
        return $this->getFieldValue(158);
    }

    /**
     * Gets the min core temperature
     */
    public function getMinCoreTemperature(): float|array|null
    {
        return $this->getFieldValue(159);
    }

    /**
     * Gets the max core temperature
     */
    public function getMaxCoreTemperature(): float|array|null
    {
        return $this->getFieldValue(160);
    }
}
