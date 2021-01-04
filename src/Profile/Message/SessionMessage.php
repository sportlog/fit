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
final class SessionMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getEvent(): ?int
    {
        return $this->getValue(0);
    }

    public function getEventType(): ?int
    {
        return $this->getValue(1);
    }

    public function getStartTime(): ?DateTime
    {
        return $this->getValue(2);
    }

    public function getStartPositionLat(): ?int
    {
        return $this->getValue(3);
    }

    public function getStartPositionLong(): ?int
    {
        return $this->getValue(4);
    }

    public function getSport(): ?int
    {
        return $this->getValue(5);
    }

    public function getSubSport(): ?int
    {
        return $this->getValue(6);
    }

    public function getTotalElapsedTime(): ?int
    {
        return $this->getValue(7);
    }

    public function getTotalTimerTime(): ?int
    {
        return $this->getValue(8);
    }

    public function getTotalDistance(): ?int
    {
        return $this->getValue(9);
    }

    public function getTotalCycles(): ?int
    {
        return $this->getValue(10);
    }

    public function getTotalCalories(): ?int
    {
        return $this->getValue(11);
    }

    public function getTotalFatCalories(): ?int
    {
        return $this->getValue(13);
    }

    public function getAvgSpeed(): ?int
    {
        return $this->getValue(14);
    }

    public function getMaxSpeed(): ?int
    {
        return $this->getValue(15);
    }

    public function getAvgHeartRate(): ?int
    {
        return $this->getValue(16);
    }

    public function getMaxHeartRate(): ?int
    {
        return $this->getValue(17);
    }

    public function getAvgCadence(): ?int
    {
        return $this->getValue(18);
    }

    public function getMaxCadence(): ?int
    {
        return $this->getValue(19);
    }

    public function getAvgPower(): ?int
    {
        return $this->getValue(20);
    }

    public function getMaxPower(): ?int
    {
        return $this->getValue(21);
    }

    public function getTotalAscent(): ?int
    {
        return $this->getValue(22);
    }

    public function getTotalDescent(): ?int
    {
        return $this->getValue(23);
    }

    public function getTotalTrainingEffect(): ?int
    {
        return $this->getValue(24);
    }

    public function getFirstLapIndex(): ?int
    {
        return $this->getValue(25);
    }

    public function getNumLaps(): ?int
    {
        return $this->getValue(26);
    }

    public function getEventGroup(): ?int
    {
        return $this->getValue(27);
    }

    public function getTrigger(): ?int
    {
        return $this->getValue(28);
    }

    public function getNecLat(): ?int
    {
        return $this->getValue(29);
    }

    public function getNecLong(): ?int
    {
        return $this->getValue(30);
    }

    public function getSwcLat(): ?int
    {
        return $this->getValue(31);
    }

    public function getSwcLong(): ?int
    {
        return $this->getValue(32);
    }

    public function getNumLengths(): ?int
    {
        return $this->getValue(33);
    }

    public function getNormalizedPower(): ?int
    {
        return $this->getValue(34);
    }

    public function getTrainingStressScore(): ?int
    {
        return $this->getValue(35);
    }

    public function getIntensityFactor(): ?int
    {
        return $this->getValue(36);
    }

    public function getLeftRightBalance(): ?int
    {
        return $this->getValue(37);
    }

    public function getAvgStrokeCount(): ?int
    {
        return $this->getValue(41);
    }

    public function getAvgStrokeDistance(): ?int
    {
        return $this->getValue(42);
    }

    public function getSwimStroke(): ?int
    {
        return $this->getValue(43);
    }

    public function getPoolLength(): ?int
    {
        return $this->getValue(44);
    }

    public function getThresholdPower(): ?int
    {
        return $this->getValue(45);
    }

    public function getPoolLengthUnit(): ?int
    {
        return $this->getValue(46);
    }

    public function getNumActiveLengths(): ?int
    {
        return $this->getValue(47);
    }

    public function getTotalWork(): ?int
    {
        return $this->getValue(48);
    }

    public function getAvgAltitude(): ?int
    {
        return $this->getValue(49);
    }

    public function getMaxAltitude(): ?int
    {
        return $this->getValue(50);
    }

    public function getGpsAccuracy(): ?int
    {
        return $this->getValue(51);
    }

    public function getAvgGrade(): ?int
    {
        return $this->getValue(52);
    }

    public function getAvgPosGrade(): ?int
    {
        return $this->getValue(53);
    }

    public function getAvgNegGrade(): ?int
    {
        return $this->getValue(54);
    }

    public function getMaxPosGrade(): ?int
    {
        return $this->getValue(55);
    }

    public function getMaxNegGrade(): ?int
    {
        return $this->getValue(56);
    }

    public function getAvgTemperature(): ?int
    {
        return $this->getValue(57);
    }

    public function getMaxTemperature(): ?int
    {
        return $this->getValue(58);
    }

    public function getTotalMovingTime(): ?int
    {
        return $this->getValue(59);
    }

    public function getAvgPosVerticalSpeed(): ?int
    {
        return $this->getValue(60);
    }

    public function getAvgNegVerticalSpeed(): ?int
    {
        return $this->getValue(61);
    }

    public function getMaxPosVerticalSpeed(): ?int
    {
        return $this->getValue(62);
    }

    public function getMaxNegVerticalSpeed(): ?int
    {
        return $this->getValue(63);
    }

    public function getMinHeartRate(): ?int
    {
        return $this->getValue(64);
    }

    public function getTimeInHrZone(): ?int
    {
        return $this->getValue(65);
    }

    public function getTimeInSpeedZone(): ?int
    {
        return $this->getValue(66);
    }

    public function getTimeInCadenceZone(): ?int
    {
        return $this->getValue(67);
    }

    public function getTimeInPowerZone(): ?int
    {
        return $this->getValue(68);
    }

    public function getAvgLapTime(): ?int
    {
        return $this->getValue(69);
    }

    public function getBestLapIndex(): ?int
    {
        return $this->getValue(70);
    }

    public function getMinAltitude(): ?int
    {
        return $this->getValue(71);
    }

    public function getPlayerScore(): ?int
    {
        return $this->getValue(82);
    }

    public function getOpponentScore(): ?int
    {
        return $this->getValue(83);
    }

    public function getOpponentName(): ?string
    {
        return $this->getValue(84);
    }

    public function getStrokeCount(): ?int
    {
        return $this->getValue(85);
    }

    public function getZoneCount(): ?int
    {
        return $this->getValue(86);
    }

    public function getMaxBallSpeed(): ?int
    {
        return $this->getValue(87);
    }

    public function getAvgBallSpeed(): ?int
    {
        return $this->getValue(88);
    }

    public function getAvgVerticalOscillation(): ?int
    {
        return $this->getValue(89);
    }

    public function getAvgStanceTimePercent(): ?int
    {
        return $this->getValue(90);
    }

    public function getAvgStanceTime(): ?int
    {
        return $this->getValue(91);
    }

    public function getAvgFractionalCadence(): ?int
    {
        return $this->getValue(92);
    }

    public function getMaxFractionalCadence(): ?int
    {
        return $this->getValue(93);
    }

    public function getTotalFractionalCycles(): ?int
    {
        return $this->getValue(94);
    }

    public function getAvgTotalHemoglobinConc(): ?int
    {
        return $this->getValue(95);
    }

    public function getMinTotalHemoglobinConc(): ?int
    {
        return $this->getValue(96);
    }

    public function getMaxTotalHemoglobinConc(): ?int
    {
        return $this->getValue(97);
    }

    public function getAvgSaturatedHemoglobinPercent(): ?int
    {
        return $this->getValue(98);
    }

    public function getMinSaturatedHemoglobinPercent(): ?int
    {
        return $this->getValue(99);
    }

    public function getMaxSaturatedHemoglobinPercent(): ?int
    {
        return $this->getValue(100);
    }

    public function getAvgLeftTorqueEffectiveness(): ?int
    {
        return $this->getValue(101);
    }

    public function getAvgRightTorqueEffectiveness(): ?int
    {
        return $this->getValue(102);
    }

    public function getAvgLeftPedalSmoothness(): ?int
    {
        return $this->getValue(103);
    }

    public function getAvgRightPedalSmoothness(): ?int
    {
        return $this->getValue(104);
    }

    public function getAvgCombinedPedalSmoothness(): ?int
    {
        return $this->getValue(105);
    }

    public function getSportIndex(): ?int
    {
        return $this->getValue(111);
    }

    public function getTimeStanding(): ?int
    {
        return $this->getValue(112);
    }

    public function getStandCount(): ?int
    {
        return $this->getValue(113);
    }

    public function getAvgLeftPco(): ?int
    {
        return $this->getValue(114);
    }

    public function getAvgRightPco(): ?int
    {
        return $this->getValue(115);
    }

    public function getAvgLeftPowerPhase(): ?int
    {
        return $this->getValue(116);
    }

    public function getAvgLeftPowerPhasePeak(): ?int
    {
        return $this->getValue(117);
    }

    public function getAvgRightPowerPhase(): ?int
    {
        return $this->getValue(118);
    }

    public function getAvgRightPowerPhasePeak(): ?int
    {
        return $this->getValue(119);
    }

    public function getAvgPowerPosition(): ?int
    {
        return $this->getValue(120);
    }

    public function getMaxPowerPosition(): ?int
    {
        return $this->getValue(121);
    }

    public function getAvgCadencePosition(): ?int
    {
        return $this->getValue(122);
    }

    public function getMaxCadencePosition(): ?int
    {
        return $this->getValue(123);
    }

    public function getEnhancedAvgSpeed(): ?int
    {
        return $this->getValue(124);
    }

    public function getEnhancedMaxSpeed(): ?int
    {
        return $this->getValue(125);
    }

    public function getEnhancedAvgAltitude(): ?int
    {
        return $this->getValue(126);
    }

    public function getEnhancedMinAltitude(): ?int
    {
        return $this->getValue(127);
    }

    public function getEnhancedMaxAltitude(): ?int
    {
        return $this->getValue(128);
    }

    public function getAvgLevMotorPower(): ?int
    {
        return $this->getValue(129);
    }

    public function getMaxLevMotorPower(): ?int
    {
        return $this->getValue(130);
    }

    public function getLevBatteryConsumption(): ?int
    {
        return $this->getValue(131);
    }

    public function getAvgVerticalRatio(): ?int
    {
        return $this->getValue(132);
    }

    public function getAvgStanceTimeBalance(): ?int
    {
        return $this->getValue(133);
    }

    public function getAvgStepLength(): ?int
    {
        return $this->getValue(134);
    }

    public function getTotalAnaerobicTrainingEffect(): ?int
    {
        return $this->getValue(137);
    }

    public function getAvgVam(): ?int
    {
        return $this->getValue(139);
    }

    public function getTotalGrit(): ?float
    {
        return $this->getValue(181);
    }

    public function getTotalFlow(): ?float
    {
        return $this->getValue(182);
    }

    public function getJumpCount(): ?int
    {
        return $this->getValue(183);
    }

    public function getAvgGrit(): ?float
    {
        return $this->getValue(186);
    }

    public function getAvgFlow(): ?float
    {
        return $this->getValue(187);
    }

    public function getTotalFractionalAscent(): ?int
    {
        return $this->getValue(199);
    }

    public function getTotalFractionalDescent(): ?int
    {
        return $this->getValue(200);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Session", MessageNumber::Session, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT),
            new Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE),
            new Field('StartTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('StartPositionLat', 3, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('StartPositionLong', 4, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('Sport', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT),
            new Field('SubSport', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT),
            new Field('TotalElapsedTime', 7, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TotalTimerTime', 8, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TotalDistance', 9, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32),
            new Field('TotalCycles', 10, FitBaseType::UINT32, 1.0, 0.0, 'cycles', false, ProfileType::UINT32),
            new Field('TotalCalories', 11, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16),
            new Field('TotalFatCalories', 13, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16),
            new Field('AvgSpeed', 14, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16),
            new Field('MaxSpeed', 15, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16),
            new Field('AvgHeartRate', 16, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8),
            new Field('MaxHeartRate', 17, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8),
            new Field('AvgCadence', 18, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('MaxCadence', 19, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('AvgPower', 20, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('MaxPower', 21, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('TotalAscent', 22, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('TotalDescent', 23, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('TotalTrainingEffect', 24, FitBaseType::UINT8, 10.0, 0.0, '', false, ProfileType::UINT8),
            new Field('FirstLapIndex', 25, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('NumLaps', 26, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('EventGroup', 27, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('Trigger', 28, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SESSIONTRIGGER),
            new Field('NecLat', 29, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('NecLong', 30, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('SwcLat', 31, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('SwcLong', 32, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('NumLengths', 33, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16),
            new Field('NormalizedPower', 34, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('TrainingStressScore', 35, FitBaseType::UINT16, 10.0, 0.0, 'tss', false, ProfileType::UINT16),
            new Field('IntensityFactor', 36, FitBaseType::UINT16, 1000.0, 0.0, 'if', false, ProfileType::UINT16),
            new Field('LeftRightBalance', 37, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE100),
            new Field('AvgStrokeCount', 41, FitBaseType::UINT32, 10.0, 0.0, 'strokes/lap', false, ProfileType::UINT32),
            new Field('AvgStrokeDistance', 42, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('SwimStroke', 43, FitBaseType::ENUM, 1.0, 0.0, 'swim_stroke', false, ProfileType::SWIMSTROKE),
            new Field('PoolLength', 44, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('ThresholdPower', 45, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('PoolLengthUnit', 46, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE),
            new Field('NumActiveLengths', 47, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16),
            new Field('TotalWork', 48, FitBaseType::UINT32, 1.0, 0.0, 'J', false, ProfileType::UINT32),
            new Field('AvgAltitude', 49, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16),
            new Field('MaxAltitude', 50, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16),
            new Field('GpsAccuracy', 51, FitBaseType::UINT8, 1.0, 0.0, 'm', false, ProfileType::UINT8),
            new Field('AvgGrade', 52, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16),
            new Field('AvgPosGrade', 53, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16),
            new Field('AvgNegGrade', 54, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16),
            new Field('MaxPosGrade', 55, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16),
            new Field('MaxNegGrade', 56, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16),
            new Field('AvgTemperature', 57, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8),
            new Field('MaxTemperature', 58, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8),
            new Field('TotalMovingTime', 59, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('AvgPosVerticalSpeed', 60, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16),
            new Field('AvgNegVerticalSpeed', 61, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16),
            new Field('MaxPosVerticalSpeed', 62, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16),
            new Field('MaxNegVerticalSpeed', 63, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16),
            new Field('MinHeartRate', 64, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8),
            new Field('TimeInHrZone', 65, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TimeInSpeedZone', 66, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TimeInCadenceZone', 67, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TimeInPowerZone', 68, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('AvgLapTime', 69, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('BestLapIndex', 70, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('MinAltitude', 71, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16),
            new Field('PlayerScore', 82, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('OpponentScore', 83, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('OpponentName', 84, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('StrokeCount', 85, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16),
            new Field('ZoneCount', 86, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16),
            new Field('MaxBallSpeed', 87, FitBaseType::UINT16, 100.0, 0.0, 'm/s', false, ProfileType::UINT16),
            new Field('AvgBallSpeed', 88, FitBaseType::UINT16, 100.0, 0.0, 'm/s', false, ProfileType::UINT16),
            new Field('AvgVerticalOscillation', 89, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16),
            new Field('AvgStanceTimePercent', 90, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16),
            new Field('AvgStanceTime', 91, FitBaseType::UINT16, 10.0, 0.0, 'ms', false, ProfileType::UINT16),
            new Field('AvgFractionalCadence', 92, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('MaxFractionalCadence', 93, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('TotalFractionalCycles', 94, FitBaseType::UINT8, 128.0, 0.0, 'cycles', false, ProfileType::UINT8),
            new Field('AvgTotalHemoglobinConc', 95, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16),
            new Field('MinTotalHemoglobinConc', 96, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16),
            new Field('MaxTotalHemoglobinConc', 97, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16),
            new Field('AvgSaturatedHemoglobinPercent', 98, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16),
            new Field('MinSaturatedHemoglobinPercent', 99, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16),
            new Field('MaxSaturatedHemoglobinPercent', 100, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16),
            new Field('AvgLeftTorqueEffectiveness', 101, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('AvgRightTorqueEffectiveness', 102, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('AvgLeftPedalSmoothness', 103, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('AvgRightPedalSmoothness', 104, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('AvgCombinedPedalSmoothness', 105, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('SportIndex', 111, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('TimeStanding', 112, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('StandCount', 113, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('AvgLeftPco', 114, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8),
            new Field('AvgRightPco', 115, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8),
            new Field('AvgLeftPowerPhase', 116, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8),
            new Field('AvgLeftPowerPhasePeak', 117, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8),
            new Field('AvgRightPowerPhase', 118, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8),
            new Field('AvgRightPowerPhasePeak', 119, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8),
            new Field('AvgPowerPosition', 120, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('MaxPowerPosition', 121, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('AvgCadencePosition', 122, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('MaxCadencePosition', 123, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('EnhancedAvgSpeed', 124, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32),
            new Field('EnhancedMaxSpeed', 125, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32),
            new Field('EnhancedAvgAltitude', 126, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32),
            new Field('EnhancedMinAltitude', 127, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32),
            new Field('EnhancedMaxAltitude', 128, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32),
            new Field('AvgLevMotorPower', 129, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('MaxLevMotorPower', 130, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('LevBatteryConsumption', 131, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('AvgVerticalRatio', 132, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16),
            new Field('AvgStanceTimeBalance', 133, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16),
            new Field('AvgStepLength', 134, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16),
            new Field('TotalAnaerobicTrainingEffect', 137, FitBaseType::UINT8, 10.0, 0.0, '', false, ProfileType::UINT8),
            new Field('AvgVam', 139, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16),
            new Field('TotalGrit', 181, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32),
            new Field('TotalFlow', 182, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32),
            new Field('JumpCount', 183, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('AvgGrit', 186, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32),
            new Field('AvgFlow', 187, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32),
            new Field('TotalFractionalAscent', 199, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8),
            new Field('TotalFractionalDescent', 200, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)
        ]);
    }
}
