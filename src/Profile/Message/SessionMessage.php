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
 * SessionMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT)]
#[Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE)]
#[Field('StartTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('StartPositionLat', 3, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('StartPositionLong', 4, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('Sport', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('SubSport', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('TotalElapsedTime', 7, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalTimerTime', 8, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalDistance', 9, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('TotalCycles', 10, FitBaseType::UINT32, 1.0, 0.0, 'cycles', false, ProfileType::UINT32)]
#[Field('TotalCalories', 11, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('TotalFatCalories', 13, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('AvgSpeed', 14, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('MaxSpeed', 15, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('AvgHeartRate', 16, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('MaxHeartRate', 17, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('AvgCadence', 18, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('MaxCadence', 19, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('AvgPower', 20, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('MaxPower', 21, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('TotalAscent', 22, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('TotalDescent', 23, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('TotalTrainingEffect', 24, FitBaseType::UINT8, 10.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('FirstLapIndex', 25, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('NumLaps', 26, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('EventGroup', 27, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Trigger', 28, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SESSIONTRIGGER)]
#[Field('NecLat', 29, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('NecLong', 30, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('SwcLat', 31, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('SwcLong', 32, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('NumLengths', 33, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16)]
#[Field('NormalizedPower', 34, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('TrainingStressScore', 35, FitBaseType::UINT16, 10.0, 0.0, 'tss', false, ProfileType::UINT16)]
#[Field('IntensityFactor', 36, FitBaseType::UINT16, 1000.0, 0.0, 'if', false, ProfileType::UINT16)]
#[Field('LeftRightBalance', 37, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE100)]
#[Field('AvgStrokeCount', 41, FitBaseType::UINT32, 10.0, 0.0, 'strokes/lap', false, ProfileType::UINT32)]
#[Field('AvgStrokeDistance', 42, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('SwimStroke', 43, FitBaseType::ENUM, 1.0, 0.0, 'swim_stroke', false, ProfileType::SWIMSTROKE)]
#[Field('PoolLength', 44, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('ThresholdPower', 45, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('PoolLengthUnit', 46, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
#[Field('NumActiveLengths', 47, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16)]
#[Field('TotalWork', 48, FitBaseType::UINT32, 1.0, 0.0, 'J', false, ProfileType::UINT32)]
#[Field('AvgAltitude', 49, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
#[Field('MaxAltitude', 50, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
#[Field('GpsAccuracy', 51, FitBaseType::UINT8, 1.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('AvgGrade', 52, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('AvgPosGrade', 53, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('AvgNegGrade', 54, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('MaxPosGrade', 55, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('MaxNegGrade', 56, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('AvgTemperature', 57, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('MaxTemperature', 58, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('TotalMovingTime', 59, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('AvgPosVerticalSpeed', 60, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('AvgNegVerticalSpeed', 61, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('MaxPosVerticalSpeed', 62, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('MaxNegVerticalSpeed', 63, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('MinHeartRate', 64, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('TimeInHrZone', 65, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInSpeedZone', 66, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInCadenceZone', 67, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInPowerZone', 68, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('AvgLapTime', 69, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('BestLapIndex', 70, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('MinAltitude', 71, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
#[Field('PlayerScore', 82, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('OpponentScore', 83, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('OpponentName', 84, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('StrokeCount', 85, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('ZoneCount', 86, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('MaxBallSpeed', 87, FitBaseType::UINT16, 100.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('AvgBallSpeed', 88, FitBaseType::UINT16, 100.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('AvgVerticalOscillation', 89, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
#[Field('AvgStanceTimePercent', 90, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('AvgStanceTime', 91, FitBaseType::UINT16, 10.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('AvgFractionalCadence', 92, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('MaxFractionalCadence', 93, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('TotalFractionalCycles', 94, FitBaseType::UINT8, 128.0, 0.0, 'cycles', false, ProfileType::UINT8)]
#[Field('AvgTotalHemoglobinConc', 95, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
#[Field('MinTotalHemoglobinConc', 96, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
#[Field('MaxTotalHemoglobinConc', 97, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
#[Field('AvgSaturatedHemoglobinPercent', 98, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('MinSaturatedHemoglobinPercent', 99, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('MaxSaturatedHemoglobinPercent', 100, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('AvgLeftTorqueEffectiveness', 101, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgRightTorqueEffectiveness', 102, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgLeftPedalSmoothness', 103, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgRightPedalSmoothness', 104, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgCombinedPedalSmoothness', 105, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('SportIndex', 111, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('TimeStanding', 112, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('StandCount', 113, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('AvgLeftPco', 114, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('AvgRightPco', 115, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('AvgLeftPowerPhase', 116, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgLeftPowerPhasePeak', 117, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgRightPowerPhase', 118, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgRightPowerPhasePeak', 119, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgPowerPosition', 120, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('MaxPowerPosition', 121, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('AvgCadencePosition', 122, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('MaxCadencePosition', 123, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('EnhancedAvgSpeed', 124, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('EnhancedMaxSpeed', 125, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('EnhancedAvgAltitude', 126, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
#[Field('EnhancedMinAltitude', 127, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
#[Field('EnhancedMaxAltitude', 128, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
#[Field('AvgLevMotorPower', 129, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('MaxLevMotorPower', 130, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('LevBatteryConsumption', 131, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgVerticalRatio', 132, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('AvgStanceTimeBalance', 133, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('AvgStepLength', 134, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
#[Field('TotalAnaerobicTrainingEffect', 137, FitBaseType::UINT8, 10.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('AvgVam', 139, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('TotalGrit', 181, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
#[Field('TotalFlow', 182, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
#[Field('JumpCount', 183, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('AvgGrit', 186, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
#[Field('AvgFlow', 187, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
#[Field('TotalFractionalAscent', 199, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('TotalFractionalDescent', 200, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
final class SessionMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Session', MessageNumber::Session);
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
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|array|null
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
        return $this->getFieldValue(13);
    }

    /**
     * Gets the avg speed
     */
    public function getAvgSpeed(): float|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the max speed
     */
    public function getMaxSpeed(): float|array|null
    {
        return $this->getFieldValue(15);
    }

    /**
     * Gets the avg heart rate
     */
    public function getAvgHeartRate(): int|array|null
    {
        return $this->getFieldValue(16);
    }

    /**
     * Gets the max heart rate
     */
    public function getMaxHeartRate(): int|array|null
    {
        return $this->getFieldValue(17);
    }

    /**
     * Gets the avg cadence
     */
    public function getAvgCadence(): int|array|null
    {
        return $this->getFieldValue(18);
    }

    /**
     * Gets the max cadence
     */
    public function getMaxCadence(): int|array|null
    {
        return $this->getFieldValue(19);
    }

    /**
     * Gets the avg power
     */
    public function getAvgPower(): int|array|null
    {
        return $this->getFieldValue(20);
    }

    /**
     * Gets the max power
     */
    public function getMaxPower(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the total ascent
     */
    public function getTotalAscent(): int|array|null
    {
        return $this->getFieldValue(22);
    }

    /**
     * Gets the total descent
     */
    public function getTotalDescent(): int|array|null
    {
        return $this->getFieldValue(23);
    }

    /**
     * Gets the total training effect
     */
    public function getTotalTrainingEffect(): float|array|null
    {
        return $this->getFieldValue(24);
    }

    /**
     * Gets the first lap index
     */
    public function getFirstLapIndex(): int|array|null
    {
        return $this->getFieldValue(25);
    }

    /**
     * Gets the num laps
     */
    public function getNumLaps(): int|array|null
    {
        return $this->getFieldValue(26);
    }

    /**
     * Gets the event group
     */
    public function getEventGroup(): int|array|null
    {
        return $this->getFieldValue(27);
    }

    /**
     * Gets the trigger
     */
    public function getTrigger(): int|array|null
    {
        return $this->getFieldValue(28);
    }

    /**
     * Gets the nec lat
     */
    public function getNecLat(): int|array|null
    {
        return $this->getFieldValue(29);
    }

    /**
     * Gets the nec long
     */
    public function getNecLong(): int|array|null
    {
        return $this->getFieldValue(30);
    }

    /**
     * Gets the swc lat
     */
    public function getSwcLat(): int|array|null
    {
        return $this->getFieldValue(31);
    }

    /**
     * Gets the swc long
     */
    public function getSwcLong(): int|array|null
    {
        return $this->getFieldValue(32);
    }

    /**
     * Gets the num lengths
     */
    public function getNumLengths(): int|array|null
    {
        return $this->getFieldValue(33);
    }

    /**
     * Gets the normalized power
     */
    public function getNormalizedPower(): int|array|null
    {
        return $this->getFieldValue(34);
    }

    /**
     * Gets the training stress score
     */
    public function getTrainingStressScore(): float|array|null
    {
        return $this->getFieldValue(35);
    }

    /**
     * Gets the intensity factor
     */
    public function getIntensityFactor(): float|array|null
    {
        return $this->getFieldValue(36);
    }

    /**
     * Gets the left right balance
     */
    public function getLeftRightBalance(): int|array|null
    {
        return $this->getFieldValue(37);
    }

    /**
     * Gets the avg stroke count
     */
    public function getAvgStrokeCount(): float|array|null
    {
        return $this->getFieldValue(41);
    }

    /**
     * Gets the avg stroke distance
     */
    public function getAvgStrokeDistance(): float|array|null
    {
        return $this->getFieldValue(42);
    }

    /**
     * Gets the swim stroke
     */
    public function getSwimStroke(): int|array|null
    {
        return $this->getFieldValue(43);
    }

    /**
     * Gets the pool length
     */
    public function getPoolLength(): float|array|null
    {
        return $this->getFieldValue(44);
    }

    /**
     * Gets the threshold power
     */
    public function getThresholdPower(): int|array|null
    {
        return $this->getFieldValue(45);
    }

    /**
     * Gets the pool length unit
     */
    public function getPoolLengthUnit(): int|array|null
    {
        return $this->getFieldValue(46);
    }

    /**
     * Gets the num active lengths
     */
    public function getNumActiveLengths(): int|array|null
    {
        return $this->getFieldValue(47);
    }

    /**
     * Gets the total work
     */
    public function getTotalWork(): int|array|null
    {
        return $this->getFieldValue(48);
    }

    /**
     * Gets the avg altitude
     */
    public function getAvgAltitude(): float|array|null
    {
        return $this->getFieldValue(49);
    }

    /**
     * Gets the max altitude
     */
    public function getMaxAltitude(): float|array|null
    {
        return $this->getFieldValue(50);
    }

    /**
     * Gets the gps accuracy
     */
    public function getGpsAccuracy(): int|array|null
    {
        return $this->getFieldValue(51);
    }

    /**
     * Gets the avg grade
     */
    public function getAvgGrade(): float|array|null
    {
        return $this->getFieldValue(52);
    }

    /**
     * Gets the avg pos grade
     */
    public function getAvgPosGrade(): float|array|null
    {
        return $this->getFieldValue(53);
    }

    /**
     * Gets the avg neg grade
     */
    public function getAvgNegGrade(): float|array|null
    {
        return $this->getFieldValue(54);
    }

    /**
     * Gets the max pos grade
     */
    public function getMaxPosGrade(): float|array|null
    {
        return $this->getFieldValue(55);
    }

    /**
     * Gets the max neg grade
     */
    public function getMaxNegGrade(): float|array|null
    {
        return $this->getFieldValue(56);
    }

    /**
     * Gets the avg temperature
     */
    public function getAvgTemperature(): int|array|null
    {
        return $this->getFieldValue(57);
    }

    /**
     * Gets the max temperature
     */
    public function getMaxTemperature(): int|array|null
    {
        return $this->getFieldValue(58);
    }

    /**
     * Gets the total moving time
     */
    public function getTotalMovingTime(): float|array|null
    {
        return $this->getFieldValue(59);
    }

    /**
     * Gets the avg pos vertical speed
     */
    public function getAvgPosVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(60);
    }

    /**
     * Gets the avg neg vertical speed
     */
    public function getAvgNegVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(61);
    }

    /**
     * Gets the max pos vertical speed
     */
    public function getMaxPosVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(62);
    }

    /**
     * Gets the max neg vertical speed
     */
    public function getMaxNegVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(63);
    }

    /**
     * Gets the min heart rate
     */
    public function getMinHeartRate(): int|array|null
    {
        return $this->getFieldValue(64);
    }

    /**
     * Gets the time in hr zone
     */
    public function getTimeInHrZone(): float|array|null
    {
        return $this->getFieldValue(65);
    }

    /**
     * Gets the time in speed zone
     */
    public function getTimeInSpeedZone(): float|array|null
    {
        return $this->getFieldValue(66);
    }

    /**
     * Gets the time in cadence zone
     */
    public function getTimeInCadenceZone(): float|array|null
    {
        return $this->getFieldValue(67);
    }

    /**
     * Gets the time in power zone
     */
    public function getTimeInPowerZone(): float|array|null
    {
        return $this->getFieldValue(68);
    }

    /**
     * Gets the avg lap time
     */
    public function getAvgLapTime(): float|array|null
    {
        return $this->getFieldValue(69);
    }

    /**
     * Gets the best lap index
     */
    public function getBestLapIndex(): int|array|null
    {
        return $this->getFieldValue(70);
    }

    /**
     * Gets the min altitude
     */
    public function getMinAltitude(): float|array|null
    {
        return $this->getFieldValue(71);
    }

    /**
     * Gets the player score
     */
    public function getPlayerScore(): int|array|null
    {
        return $this->getFieldValue(82);
    }

    /**
     * Gets the opponent score
     */
    public function getOpponentScore(): int|array|null
    {
        return $this->getFieldValue(83);
    }

    /**
     * Gets the opponent name
     */
    public function getOpponentName(): string|array|null
    {
        return $this->getFieldValue(84);
    }

    /**
     * Gets the stroke count
     */
    public function getStrokeCount(): int|array|null
    {
        return $this->getFieldValue(85);
    }

    /**
     * Gets the zone count
     */
    public function getZoneCount(): int|array|null
    {
        return $this->getFieldValue(86);
    }

    /**
     * Gets the max ball speed
     */
    public function getMaxBallSpeed(): float|array|null
    {
        return $this->getFieldValue(87);
    }

    /**
     * Gets the avg ball speed
     */
    public function getAvgBallSpeed(): float|array|null
    {
        return $this->getFieldValue(88);
    }

    /**
     * Gets the avg vertical oscillation
     */
    public function getAvgVerticalOscillation(): float|array|null
    {
        return $this->getFieldValue(89);
    }

    /**
     * Gets the avg stance time percent
     */
    public function getAvgStanceTimePercent(): float|array|null
    {
        return $this->getFieldValue(90);
    }

    /**
     * Gets the avg stance time
     */
    public function getAvgStanceTime(): float|array|null
    {
        return $this->getFieldValue(91);
    }

    /**
     * Gets the avg fractional cadence
     */
    public function getAvgFractionalCadence(): float|array|null
    {
        return $this->getFieldValue(92);
    }

    /**
     * Gets the max fractional cadence
     */
    public function getMaxFractionalCadence(): float|array|null
    {
        return $this->getFieldValue(93);
    }

    /**
     * Gets the total fractional cycles
     */
    public function getTotalFractionalCycles(): float|array|null
    {
        return $this->getFieldValue(94);
    }

    /**
     * Gets the avg total hemoglobin conc
     */
    public function getAvgTotalHemoglobinConc(): float|array|null
    {
        return $this->getFieldValue(95);
    }

    /**
     * Gets the min total hemoglobin conc
     */
    public function getMinTotalHemoglobinConc(): float|array|null
    {
        return $this->getFieldValue(96);
    }

    /**
     * Gets the max total hemoglobin conc
     */
    public function getMaxTotalHemoglobinConc(): float|array|null
    {
        return $this->getFieldValue(97);
    }

    /**
     * Gets the avg saturated hemoglobin percent
     */
    public function getAvgSaturatedHemoglobinPercent(): float|array|null
    {
        return $this->getFieldValue(98);
    }

    /**
     * Gets the min saturated hemoglobin percent
     */
    public function getMinSaturatedHemoglobinPercent(): float|array|null
    {
        return $this->getFieldValue(99);
    }

    /**
     * Gets the max saturated hemoglobin percent
     */
    public function getMaxSaturatedHemoglobinPercent(): float|array|null
    {
        return $this->getFieldValue(100);
    }

    /**
     * Gets the avg left torque effectiveness
     */
    public function getAvgLeftTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(101);
    }

    /**
     * Gets the avg right torque effectiveness
     */
    public function getAvgRightTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(102);
    }

    /**
     * Gets the avg left pedal smoothness
     */
    public function getAvgLeftPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(103);
    }

    /**
     * Gets the avg right pedal smoothness
     */
    public function getAvgRightPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(104);
    }

    /**
     * Gets the avg combined pedal smoothness
     */
    public function getAvgCombinedPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(105);
    }

    /**
     * Gets the sport index
     */
    public function getSportIndex(): int|array|null
    {
        return $this->getFieldValue(111);
    }

    /**
     * Gets the time standing
     */
    public function getTimeStanding(): float|array|null
    {
        return $this->getFieldValue(112);
    }

    /**
     * Gets the stand count
     */
    public function getStandCount(): int|array|null
    {
        return $this->getFieldValue(113);
    }

    /**
     * Gets the avg left pco
     */
    public function getAvgLeftPco(): int|array|null
    {
        return $this->getFieldValue(114);
    }

    /**
     * Gets the avg right pco
     */
    public function getAvgRightPco(): int|array|null
    {
        return $this->getFieldValue(115);
    }

    /**
     * Gets the avg left power phase
     */
    public function getAvgLeftPowerPhase(): float|array|null
    {
        return $this->getFieldValue(116);
    }

    /**
     * Gets the avg left power phase peak
     */
    public function getAvgLeftPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(117);
    }

    /**
     * Gets the avg right power phase
     */
    public function getAvgRightPowerPhase(): float|array|null
    {
        return $this->getFieldValue(118);
    }

    /**
     * Gets the avg right power phase peak
     */
    public function getAvgRightPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(119);
    }

    /**
     * Gets the avg power position
     */
    public function getAvgPowerPosition(): int|array|null
    {
        return $this->getFieldValue(120);
    }

    /**
     * Gets the max power position
     */
    public function getMaxPowerPosition(): int|array|null
    {
        return $this->getFieldValue(121);
    }

    /**
     * Gets the avg cadence position
     */
    public function getAvgCadencePosition(): int|array|null
    {
        return $this->getFieldValue(122);
    }

    /**
     * Gets the max cadence position
     */
    public function getMaxCadencePosition(): int|array|null
    {
        return $this->getFieldValue(123);
    }

    /**
     * Gets the enhanced avg speed
     */
    public function getEnhancedAvgSpeed(): float|array|null
    {
        return $this->getFieldValue(124);
    }

    /**
     * Gets the enhanced max speed
     */
    public function getEnhancedMaxSpeed(): float|array|null
    {
        return $this->getFieldValue(125);
    }

    /**
     * Gets the enhanced avg altitude
     */
    public function getEnhancedAvgAltitude(): float|array|null
    {
        return $this->getFieldValue(126);
    }

    /**
     * Gets the enhanced min altitude
     */
    public function getEnhancedMinAltitude(): float|array|null
    {
        return $this->getFieldValue(127);
    }

    /**
     * Gets the enhanced max altitude
     */
    public function getEnhancedMaxAltitude(): float|array|null
    {
        return $this->getFieldValue(128);
    }

    /**
     * Gets the avg lev motor power
     */
    public function getAvgLevMotorPower(): int|array|null
    {
        return $this->getFieldValue(129);
    }

    /**
     * Gets the max lev motor power
     */
    public function getMaxLevMotorPower(): int|array|null
    {
        return $this->getFieldValue(130);
    }

    /**
     * Gets the lev battery consumption
     */
    public function getLevBatteryConsumption(): float|array|null
    {
        return $this->getFieldValue(131);
    }

    /**
     * Gets the avg vertical ratio
     */
    public function getAvgVerticalRatio(): float|array|null
    {
        return $this->getFieldValue(132);
    }

    /**
     * Gets the avg stance time balance
     */
    public function getAvgStanceTimeBalance(): float|array|null
    {
        return $this->getFieldValue(133);
    }

    /**
     * Gets the avg step length
     */
    public function getAvgStepLength(): float|array|null
    {
        return $this->getFieldValue(134);
    }

    /**
     * Gets the total anaerobic training effect
     */
    public function getTotalAnaerobicTrainingEffect(): float|array|null
    {
        return $this->getFieldValue(137);
    }

    /**
     * Gets the avg vam
     */
    public function getAvgVam(): float|array|null
    {
        return $this->getFieldValue(139);
    }

    /**
     * Gets the total grit
     */
    public function getTotalGrit(): float|array|null
    {
        return $this->getFieldValue(181);
    }

    /**
     * Gets the total flow
     */
    public function getTotalFlow(): float|array|null
    {
        return $this->getFieldValue(182);
    }

    /**
     * Gets the jump count
     */
    public function getJumpCount(): int|array|null
    {
        return $this->getFieldValue(183);
    }

    /**
     * Gets the avg grit
     */
    public function getAvgGrit(): float|array|null
    {
        return $this->getFieldValue(186);
    }

    /**
     * Gets the avg flow
     */
    public function getAvgFlow(): float|array|null
    {
        return $this->getFieldValue(187);
    }

    /**
     * Gets the total fractional ascent
     */
    public function getTotalFractionalAscent(): float|array|null
    {
        return $this->getFieldValue(199);
    }

    /**
     * Gets the total fractional descent
     */
    public function getTotalFractionalDescent(): float|array|null
    {
        return $this->getFieldValue(200);
    }
}
