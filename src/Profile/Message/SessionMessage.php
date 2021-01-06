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
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the event
     */
    public function getEvent(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the event type
     */
    public function getEventType(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the start time
     */
    public function getStartTime(): ?DateTime
    {
        return $this->getValue(2);
    }

    /**
     * Gets the start position lat
     */
    public function getStartPositionLat(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the start position long
     */
    public function getStartPositionLong(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the sport
     */
    public function getSport(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the total elapsed time
     */
    public function getTotalElapsedTime(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the total timer time
     */
    public function getTotalTimerTime(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the total distance
     */
    public function getTotalDistance(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the total cycles
     */
    public function getTotalCycles(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Gets the total calories
     */
    public function getTotalCalories(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Gets the total fat calories
     */
    public function getTotalFatCalories(): ?int
    {
        return $this->getValue(13);
    }

    /**
     * Gets the avg speed
     */
    public function getAvgSpeed(): ?int
    {
        return $this->getValue(14);
    }

    /**
     * Gets the max speed
     */
    public function getMaxSpeed(): ?int
    {
        return $this->getValue(15);
    }

    /**
     * Gets the avg heart rate
     */
    public function getAvgHeartRate(): ?int
    {
        return $this->getValue(16);
    }

    /**
     * Gets the max heart rate
     */
    public function getMaxHeartRate(): ?int
    {
        return $this->getValue(17);
    }

    /**
     * Gets the avg cadence
     */
    public function getAvgCadence(): ?int
    {
        return $this->getValue(18);
    }

    /**
     * Gets the max cadence
     */
    public function getMaxCadence(): ?int
    {
        return $this->getValue(19);
    }

    /**
     * Gets the avg power
     */
    public function getAvgPower(): ?int
    {
        return $this->getValue(20);
    }

    /**
     * Gets the max power
     */
    public function getMaxPower(): ?int
    {
        return $this->getValue(21);
    }

    /**
     * Gets the total ascent
     */
    public function getTotalAscent(): ?int
    {
        return $this->getValue(22);
    }

    /**
     * Gets the total descent
     */
    public function getTotalDescent(): ?int
    {
        return $this->getValue(23);
    }

    /**
     * Gets the total training effect
     */
    public function getTotalTrainingEffect(): ?int
    {
        return $this->getValue(24);
    }

    /**
     * Gets the first lap index
     */
    public function getFirstLapIndex(): ?int
    {
        return $this->getValue(25);
    }

    /**
     * Gets the num laps
     */
    public function getNumLaps(): ?int
    {
        return $this->getValue(26);
    }

    /**
     * Gets the event group
     */
    public function getEventGroup(): ?int
    {
        return $this->getValue(27);
    }

    /**
     * Gets the trigger
     */
    public function getTrigger(): ?int
    {
        return $this->getValue(28);
    }

    /**
     * Gets the nec lat
     */
    public function getNecLat(): ?int
    {
        return $this->getValue(29);
    }

    /**
     * Gets the nec long
     */
    public function getNecLong(): ?int
    {
        return $this->getValue(30);
    }

    /**
     * Gets the swc lat
     */
    public function getSwcLat(): ?int
    {
        return $this->getValue(31);
    }

    /**
     * Gets the swc long
     */
    public function getSwcLong(): ?int
    {
        return $this->getValue(32);
    }

    /**
     * Gets the num lengths
     */
    public function getNumLengths(): ?int
    {
        return $this->getValue(33);
    }

    /**
     * Gets the normalized power
     */
    public function getNormalizedPower(): ?int
    {
        return $this->getValue(34);
    }

    /**
     * Gets the training stress score
     */
    public function getTrainingStressScore(): ?int
    {
        return $this->getValue(35);
    }

    /**
     * Gets the intensity factor
     */
    public function getIntensityFactor(): ?int
    {
        return $this->getValue(36);
    }

    /**
     * Gets the left right balance
     */
    public function getLeftRightBalance(): ?int
    {
        return $this->getValue(37);
    }

    /**
     * Gets the avg stroke count
     */
    public function getAvgStrokeCount(): ?int
    {
        return $this->getValue(41);
    }

    /**
     * Gets the avg stroke distance
     */
    public function getAvgStrokeDistance(): ?int
    {
        return $this->getValue(42);
    }

    /**
     * Gets the swim stroke
     */
    public function getSwimStroke(): ?int
    {
        return $this->getValue(43);
    }

    /**
     * Gets the pool length
     */
    public function getPoolLength(): ?int
    {
        return $this->getValue(44);
    }

    /**
     * Gets the threshold power
     */
    public function getThresholdPower(): ?int
    {
        return $this->getValue(45);
    }

    /**
     * Gets the pool length unit
     */
    public function getPoolLengthUnit(): ?int
    {
        return $this->getValue(46);
    }

    /**
     * Gets the num active lengths
     */
    public function getNumActiveLengths(): ?int
    {
        return $this->getValue(47);
    }

    /**
     * Gets the total work
     */
    public function getTotalWork(): ?int
    {
        return $this->getValue(48);
    }

    /**
     * Gets the avg altitude
     */
    public function getAvgAltitude(): ?int
    {
        return $this->getValue(49);
    }

    /**
     * Gets the max altitude
     */
    public function getMaxAltitude(): ?int
    {
        return $this->getValue(50);
    }

    /**
     * Gets the gps accuracy
     */
    public function getGpsAccuracy(): ?int
    {
        return $this->getValue(51);
    }

    /**
     * Gets the avg grade
     */
    public function getAvgGrade(): ?int
    {
        return $this->getValue(52);
    }

    /**
     * Gets the avg pos grade
     */
    public function getAvgPosGrade(): ?int
    {
        return $this->getValue(53);
    }

    /**
     * Gets the avg neg grade
     */
    public function getAvgNegGrade(): ?int
    {
        return $this->getValue(54);
    }

    /**
     * Gets the max pos grade
     */
    public function getMaxPosGrade(): ?int
    {
        return $this->getValue(55);
    }

    /**
     * Gets the max neg grade
     */
    public function getMaxNegGrade(): ?int
    {
        return $this->getValue(56);
    }

    /**
     * Gets the avg temperature
     */
    public function getAvgTemperature(): ?int
    {
        return $this->getValue(57);
    }

    /**
     * Gets the max temperature
     */
    public function getMaxTemperature(): ?int
    {
        return $this->getValue(58);
    }

    /**
     * Gets the total moving time
     */
    public function getTotalMovingTime(): ?int
    {
        return $this->getValue(59);
    }

    /**
     * Gets the avg pos vertical speed
     */
    public function getAvgPosVerticalSpeed(): ?int
    {
        return $this->getValue(60);
    }

    /**
     * Gets the avg neg vertical speed
     */
    public function getAvgNegVerticalSpeed(): ?int
    {
        return $this->getValue(61);
    }

    /**
     * Gets the max pos vertical speed
     */
    public function getMaxPosVerticalSpeed(): ?int
    {
        return $this->getValue(62);
    }

    /**
     * Gets the max neg vertical speed
     */
    public function getMaxNegVerticalSpeed(): ?int
    {
        return $this->getValue(63);
    }

    /**
     * Gets the min heart rate
     */
    public function getMinHeartRate(): ?int
    {
        return $this->getValue(64);
    }

    /**
     * Gets the time in hr zone
     */
    public function getTimeInHrZone(): ?int
    {
        return $this->getValue(65);
    }

    /**
     * Gets the time in speed zone
     */
    public function getTimeInSpeedZone(): ?int
    {
        return $this->getValue(66);
    }

    /**
     * Gets the time in cadence zone
     */
    public function getTimeInCadenceZone(): ?int
    {
        return $this->getValue(67);
    }

    /**
     * Gets the time in power zone
     */
    public function getTimeInPowerZone(): ?int
    {
        return $this->getValue(68);
    }

    /**
     * Gets the avg lap time
     */
    public function getAvgLapTime(): ?int
    {
        return $this->getValue(69);
    }

    /**
     * Gets the best lap index
     */
    public function getBestLapIndex(): ?int
    {
        return $this->getValue(70);
    }

    /**
     * Gets the min altitude
     */
    public function getMinAltitude(): ?int
    {
        return $this->getValue(71);
    }

    /**
     * Gets the player score
     */
    public function getPlayerScore(): ?int
    {
        return $this->getValue(82);
    }

    /**
     * Gets the opponent score
     */
    public function getOpponentScore(): ?int
    {
        return $this->getValue(83);
    }

    /**
     * Gets the opponent name
     */
    public function getOpponentName(): ?string
    {
        return $this->getValue(84);
    }

    /**
     * Gets the stroke count
     */
    public function getStrokeCount(): ?int
    {
        return $this->getValue(85);
    }

    /**
     * Gets the zone count
     */
    public function getZoneCount(): ?int
    {
        return $this->getValue(86);
    }

    /**
     * Gets the max ball speed
     */
    public function getMaxBallSpeed(): ?int
    {
        return $this->getValue(87);
    }

    /**
     * Gets the avg ball speed
     */
    public function getAvgBallSpeed(): ?int
    {
        return $this->getValue(88);
    }

    /**
     * Gets the avg vertical oscillation
     */
    public function getAvgVerticalOscillation(): ?int
    {
        return $this->getValue(89);
    }

    /**
     * Gets the avg stance time percent
     */
    public function getAvgStanceTimePercent(): ?int
    {
        return $this->getValue(90);
    }

    /**
     * Gets the avg stance time
     */
    public function getAvgStanceTime(): ?int
    {
        return $this->getValue(91);
    }

    /**
     * Gets the avg fractional cadence
     */
    public function getAvgFractionalCadence(): ?int
    {
        return $this->getValue(92);
    }

    /**
     * Gets the max fractional cadence
     */
    public function getMaxFractionalCadence(): ?int
    {
        return $this->getValue(93);
    }

    /**
     * Gets the total fractional cycles
     */
    public function getTotalFractionalCycles(): ?int
    {
        return $this->getValue(94);
    }

    /**
     * Gets the avg total hemoglobin conc
     */
    public function getAvgTotalHemoglobinConc(): ?int
    {
        return $this->getValue(95);
    }

    /**
     * Gets the min total hemoglobin conc
     */
    public function getMinTotalHemoglobinConc(): ?int
    {
        return $this->getValue(96);
    }

    /**
     * Gets the max total hemoglobin conc
     */
    public function getMaxTotalHemoglobinConc(): ?int
    {
        return $this->getValue(97);
    }

    /**
     * Gets the avg saturated hemoglobin percent
     */
    public function getAvgSaturatedHemoglobinPercent(): ?int
    {
        return $this->getValue(98);
    }

    /**
     * Gets the min saturated hemoglobin percent
     */
    public function getMinSaturatedHemoglobinPercent(): ?int
    {
        return $this->getValue(99);
    }

    /**
     * Gets the max saturated hemoglobin percent
     */
    public function getMaxSaturatedHemoglobinPercent(): ?int
    {
        return $this->getValue(100);
    }

    /**
     * Gets the avg left torque effectiveness
     */
    public function getAvgLeftTorqueEffectiveness(): ?int
    {
        return $this->getValue(101);
    }

    /**
     * Gets the avg right torque effectiveness
     */
    public function getAvgRightTorqueEffectiveness(): ?int
    {
        return $this->getValue(102);
    }

    /**
     * Gets the avg left pedal smoothness
     */
    public function getAvgLeftPedalSmoothness(): ?int
    {
        return $this->getValue(103);
    }

    /**
     * Gets the avg right pedal smoothness
     */
    public function getAvgRightPedalSmoothness(): ?int
    {
        return $this->getValue(104);
    }

    /**
     * Gets the avg combined pedal smoothness
     */
    public function getAvgCombinedPedalSmoothness(): ?int
    {
        return $this->getValue(105);
    }

    /**
     * Gets the sport index
     */
    public function getSportIndex(): ?int
    {
        return $this->getValue(111);
    }

    /**
     * Gets the time standing
     */
    public function getTimeStanding(): ?int
    {
        return $this->getValue(112);
    }

    /**
     * Gets the stand count
     */
    public function getStandCount(): ?int
    {
        return $this->getValue(113);
    }

    /**
     * Gets the avg left pco
     */
    public function getAvgLeftPco(): ?int
    {
        return $this->getValue(114);
    }

    /**
     * Gets the avg right pco
     */
    public function getAvgRightPco(): ?int
    {
        return $this->getValue(115);
    }

    /**
     * Gets the avg left power phase
     */
    public function getAvgLeftPowerPhase(): ?int
    {
        return $this->getValue(116);
    }

    /**
     * Gets the avg left power phase peak
     */
    public function getAvgLeftPowerPhasePeak(): ?int
    {
        return $this->getValue(117);
    }

    /**
     * Gets the avg right power phase
     */
    public function getAvgRightPowerPhase(): ?int
    {
        return $this->getValue(118);
    }

    /**
     * Gets the avg right power phase peak
     */
    public function getAvgRightPowerPhasePeak(): ?int
    {
        return $this->getValue(119);
    }

    /**
     * Gets the avg power position
     */
    public function getAvgPowerPosition(): ?int
    {
        return $this->getValue(120);
    }

    /**
     * Gets the max power position
     */
    public function getMaxPowerPosition(): ?int
    {
        return $this->getValue(121);
    }

    /**
     * Gets the avg cadence position
     */
    public function getAvgCadencePosition(): ?int
    {
        return $this->getValue(122);
    }

    /**
     * Gets the max cadence position
     */
    public function getMaxCadencePosition(): ?int
    {
        return $this->getValue(123);
    }

    /**
     * Gets the enhanced avg speed
     */
    public function getEnhancedAvgSpeed(): ?int
    {
        return $this->getValue(124);
    }

    /**
     * Gets the enhanced max speed
     */
    public function getEnhancedMaxSpeed(): ?int
    {
        return $this->getValue(125);
    }

    /**
     * Gets the enhanced avg altitude
     */
    public function getEnhancedAvgAltitude(): ?int
    {
        return $this->getValue(126);
    }

    /**
     * Gets the enhanced min altitude
     */
    public function getEnhancedMinAltitude(): ?int
    {
        return $this->getValue(127);
    }

    /**
     * Gets the enhanced max altitude
     */
    public function getEnhancedMaxAltitude(): ?int
    {
        return $this->getValue(128);
    }

    /**
     * Gets the avg lev motor power
     */
    public function getAvgLevMotorPower(): ?int
    {
        return $this->getValue(129);
    }

    /**
     * Gets the max lev motor power
     */
    public function getMaxLevMotorPower(): ?int
    {
        return $this->getValue(130);
    }

    /**
     * Gets the lev battery consumption
     */
    public function getLevBatteryConsumption(): ?int
    {
        return $this->getValue(131);
    }

    /**
     * Gets the avg vertical ratio
     */
    public function getAvgVerticalRatio(): ?int
    {
        return $this->getValue(132);
    }

    /**
     * Gets the avg stance time balance
     */
    public function getAvgStanceTimeBalance(): ?int
    {
        return $this->getValue(133);
    }

    /**
     * Gets the avg step length
     */
    public function getAvgStepLength(): ?int
    {
        return $this->getValue(134);
    }

    /**
     * Gets the total anaerobic training effect
     */
    public function getTotalAnaerobicTrainingEffect(): ?int
    {
        return $this->getValue(137);
    }

    /**
     * Gets the avg vam
     */
    public function getAvgVam(): ?int
    {
        return $this->getValue(139);
    }

    /**
     * Gets the total grit
     */
    public function getTotalGrit(): ?float
    {
        return $this->getValue(181);
    }

    /**
     * Gets the total flow
     */
    public function getTotalFlow(): ?float
    {
        return $this->getValue(182);
    }

    /**
     * Gets the jump count
     */
    public function getJumpCount(): ?int
    {
        return $this->getValue(183);
    }

    /**
     * Gets the avg grit
     */
    public function getAvgGrit(): ?float
    {
        return $this->getValue(186);
    }

    /**
     * Gets the avg flow
     */
    public function getAvgFlow(): ?float
    {
        return $this->getValue(187);
    }

    /**
     * Gets the total fractional ascent
     */
    public function getTotalFractionalAscent(): ?int
    {
        return $this->getValue(199);
    }

    /**
     * Gets the total fractional descent
     */
    public function getTotalFractionalDescent(): ?int
    {
        return $this->getValue(200);
    }
}
