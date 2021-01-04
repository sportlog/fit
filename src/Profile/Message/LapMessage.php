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
 * LapMessage message
 */
final class LapMessage extends Message
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

    public function getEndPositionLat(): ?int
    {
        return $this->getValue(5);
    }

    public function getEndPositionLong(): ?int
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
        return $this->getValue(12);
    }

    public function getAvgSpeed(): ?int
    {
        return $this->getValue(13);
    }

    public function getMaxSpeed(): ?int
    {
        return $this->getValue(14);
    }

    public function getAvgHeartRate(): ?int
    {
        return $this->getValue(15);
    }

    public function getMaxHeartRate(): ?int
    {
        return $this->getValue(16);
    }

    public function getAvgCadence(): ?int
    {
        return $this->getValue(17);
    }

    public function getMaxCadence(): ?int
    {
        return $this->getValue(18);
    }

    public function getAvgPower(): ?int
    {
        return $this->getValue(19);
    }

    public function getMaxPower(): ?int
    {
        return $this->getValue(20);
    }

    public function getTotalAscent(): ?int
    {
        return $this->getValue(21);
    }

    public function getTotalDescent(): ?int
    {
        return $this->getValue(22);
    }

    public function getIntensity(): ?int
    {
        return $this->getValue(23);
    }

    public function getLapTrigger(): ?int
    {
        return $this->getValue(24);
    }

    public function getSport(): ?int
    {
        return $this->getValue(25);
    }

    public function getEventGroup(): ?int
    {
        return $this->getValue(26);
    }

    public function getNumLengths(): ?int
    {
        return $this->getValue(32);
    }

    public function getNormalizedPower(): ?int
    {
        return $this->getValue(33);
    }

    public function getLeftRightBalance(): ?int
    {
        return $this->getValue(34);
    }

    public function getFirstLengthIndex(): ?int
    {
        return $this->getValue(35);
    }

    public function getAvgStrokeDistance(): ?int
    {
        return $this->getValue(37);
    }

    public function getSwimStroke(): ?int
    {
        return $this->getValue(38);
    }

    public function getSubSport(): ?int
    {
        return $this->getValue(39);
    }

    public function getNumActiveLengths(): ?int
    {
        return $this->getValue(40);
    }

    public function getTotalWork(): ?int
    {
        return $this->getValue(41);
    }

    public function getAvgAltitude(): ?int
    {
        return $this->getValue(42);
    }

    public function getMaxAltitude(): ?int
    {
        return $this->getValue(43);
    }

    public function getGpsAccuracy(): ?int
    {
        return $this->getValue(44);
    }

    public function getAvgGrade(): ?int
    {
        return $this->getValue(45);
    }

    public function getAvgPosGrade(): ?int
    {
        return $this->getValue(46);
    }

    public function getAvgNegGrade(): ?int
    {
        return $this->getValue(47);
    }

    public function getMaxPosGrade(): ?int
    {
        return $this->getValue(48);
    }

    public function getMaxNegGrade(): ?int
    {
        return $this->getValue(49);
    }

    public function getAvgTemperature(): ?int
    {
        return $this->getValue(50);
    }

    public function getMaxTemperature(): ?int
    {
        return $this->getValue(51);
    }

    public function getTotalMovingTime(): ?int
    {
        return $this->getValue(52);
    }

    public function getAvgPosVerticalSpeed(): ?int
    {
        return $this->getValue(53);
    }

    public function getAvgNegVerticalSpeed(): ?int
    {
        return $this->getValue(54);
    }

    public function getMaxPosVerticalSpeed(): ?int
    {
        return $this->getValue(55);
    }

    public function getMaxNegVerticalSpeed(): ?int
    {
        return $this->getValue(56);
    }

    public function getTimeInHrZone(): ?int
    {
        return $this->getValue(57);
    }

    public function getTimeInSpeedZone(): ?int
    {
        return $this->getValue(58);
    }

    public function getTimeInCadenceZone(): ?int
    {
        return $this->getValue(59);
    }

    public function getTimeInPowerZone(): ?int
    {
        return $this->getValue(60);
    }

    public function getRepetitionNum(): ?int
    {
        return $this->getValue(61);
    }

    public function getMinAltitude(): ?int
    {
        return $this->getValue(62);
    }

    public function getMinHeartRate(): ?int
    {
        return $this->getValue(63);
    }

    public function getWktStepIndex(): ?int
    {
        return $this->getValue(71);
    }

    public function getOpponentScore(): ?int
    {
        return $this->getValue(74);
    }

    public function getStrokeCount(): ?int
    {
        return $this->getValue(75);
    }

    public function getZoneCount(): ?int
    {
        return $this->getValue(76);
    }

    public function getAvgVerticalOscillation(): ?int
    {
        return $this->getValue(77);
    }

    public function getAvgStanceTimePercent(): ?int
    {
        return $this->getValue(78);
    }

    public function getAvgStanceTime(): ?int
    {
        return $this->getValue(79);
    }

    public function getAvgFractionalCadence(): ?int
    {
        return $this->getValue(80);
    }

    public function getMaxFractionalCadence(): ?int
    {
        return $this->getValue(81);
    }

    public function getTotalFractionalCycles(): ?int
    {
        return $this->getValue(82);
    }

    public function getPlayerScore(): ?int
    {
        return $this->getValue(83);
    }

    public function getAvgTotalHemoglobinConc(): ?int
    {
        return $this->getValue(84);
    }

    public function getMinTotalHemoglobinConc(): ?int
    {
        return $this->getValue(85);
    }

    public function getMaxTotalHemoglobinConc(): ?int
    {
        return $this->getValue(86);
    }

    public function getAvgSaturatedHemoglobinPercent(): ?int
    {
        return $this->getValue(87);
    }

    public function getMinSaturatedHemoglobinPercent(): ?int
    {
        return $this->getValue(88);
    }

    public function getMaxSaturatedHemoglobinPercent(): ?int
    {
        return $this->getValue(89);
    }

    public function getAvgLeftTorqueEffectiveness(): ?int
    {
        return $this->getValue(91);
    }

    public function getAvgRightTorqueEffectiveness(): ?int
    {
        return $this->getValue(92);
    }

    public function getAvgLeftPedalSmoothness(): ?int
    {
        return $this->getValue(93);
    }

    public function getAvgRightPedalSmoothness(): ?int
    {
        return $this->getValue(94);
    }

    public function getAvgCombinedPedalSmoothness(): ?int
    {
        return $this->getValue(95);
    }

    public function getTimeStanding(): ?int
    {
        return $this->getValue(98);
    }

    public function getStandCount(): ?int
    {
        return $this->getValue(99);
    }

    public function getAvgLeftPco(): ?int
    {
        return $this->getValue(100);
    }

    public function getAvgRightPco(): ?int
    {
        return $this->getValue(101);
    }

    public function getAvgLeftPowerPhase(): ?int
    {
        return $this->getValue(102);
    }

    public function getAvgLeftPowerPhasePeak(): ?int
    {
        return $this->getValue(103);
    }

    public function getAvgRightPowerPhase(): ?int
    {
        return $this->getValue(104);
    }

    public function getAvgRightPowerPhasePeak(): ?int
    {
        return $this->getValue(105);
    }

    public function getAvgPowerPosition(): ?int
    {
        return $this->getValue(106);
    }

    public function getMaxPowerPosition(): ?int
    {
        return $this->getValue(107);
    }

    public function getAvgCadencePosition(): ?int
    {
        return $this->getValue(108);
    }

    public function getMaxCadencePosition(): ?int
    {
        return $this->getValue(109);
    }

    public function getEnhancedAvgSpeed(): ?int
    {
        return $this->getValue(110);
    }

    public function getEnhancedMaxSpeed(): ?int
    {
        return $this->getValue(111);
    }

    public function getEnhancedAvgAltitude(): ?int
    {
        return $this->getValue(112);
    }

    public function getEnhancedMinAltitude(): ?int
    {
        return $this->getValue(113);
    }

    public function getEnhancedMaxAltitude(): ?int
    {
        return $this->getValue(114);
    }

    public function getAvgLevMotorPower(): ?int
    {
        return $this->getValue(115);
    }

    public function getMaxLevMotorPower(): ?int
    {
        return $this->getValue(116);
    }

    public function getLevBatteryConsumption(): ?int
    {
        return $this->getValue(117);
    }

    public function getAvgVerticalRatio(): ?int
    {
        return $this->getValue(118);
    }

    public function getAvgStanceTimeBalance(): ?int
    {
        return $this->getValue(119);
    }

    public function getAvgStepLength(): ?int
    {
        return $this->getValue(120);
    }

    public function getAvgVam(): ?int
    {
        return $this->getValue(121);
    }

    public function getTotalGrit(): ?float
    {
        return $this->getValue(149);
    }

    public function getTotalFlow(): ?float
    {
        return $this->getValue(150);
    }

    public function getJumpCount(): ?int
    {
        return $this->getValue(151);
    }

    public function getAvgGrit(): ?float
    {
        return $this->getValue(153);
    }

    public function getAvgFlow(): ?float
    {
        return $this->getValue(154);
    }

    public function getTotalFractionalAscent(): ?int
    {
        return $this->getValue(156);
    }

    public function getTotalFractionalDescent(): ?int
    {
        return $this->getValue(157);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Lap", MessageNumber::Lap, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT),
            new Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE),
            new Field('StartTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('StartPositionLat', 3, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('StartPositionLong', 4, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('EndPositionLat', 5, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('EndPositionLong', 6, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('TotalElapsedTime', 7, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TotalTimerTime', 8, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TotalDistance', 9, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32),
            new Field('TotalCycles', 10, FitBaseType::UINT32, 1.0, 0.0, 'cycles', false, ProfileType::UINT32),
            new Field('TotalCalories', 11, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16),
            new Field('TotalFatCalories', 12, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16),
            new Field('AvgSpeed', 13, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16),
            new Field('MaxSpeed', 14, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16),
            new Field('AvgHeartRate', 15, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8),
            new Field('MaxHeartRate', 16, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8),
            new Field('AvgCadence', 17, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('MaxCadence', 18, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('AvgPower', 19, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('MaxPower', 20, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('TotalAscent', 21, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('TotalDescent', 22, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('Intensity', 23, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::INTENSITY),
            new Field('LapTrigger', 24, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::LAPTRIGGER),
            new Field('Sport', 25, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT),
            new Field('EventGroup', 26, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('NumLengths', 32, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16),
            new Field('NormalizedPower', 33, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('LeftRightBalance', 34, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE100),
            new Field('FirstLengthIndex', 35, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('AvgStrokeDistance', 37, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('SwimStroke', 38, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SWIMSTROKE),
            new Field('SubSport', 39, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT),
            new Field('NumActiveLengths', 40, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16),
            new Field('TotalWork', 41, FitBaseType::UINT32, 1.0, 0.0, 'J', false, ProfileType::UINT32),
            new Field('AvgAltitude', 42, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16),
            new Field('MaxAltitude', 43, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16),
            new Field('GpsAccuracy', 44, FitBaseType::UINT8, 1.0, 0.0, 'm', false, ProfileType::UINT8),
            new Field('AvgGrade', 45, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16),
            new Field('AvgPosGrade', 46, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16),
            new Field('AvgNegGrade', 47, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16),
            new Field('MaxPosGrade', 48, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16),
            new Field('MaxNegGrade', 49, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16),
            new Field('AvgTemperature', 50, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8),
            new Field('MaxTemperature', 51, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8),
            new Field('TotalMovingTime', 52, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('AvgPosVerticalSpeed', 53, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16),
            new Field('AvgNegVerticalSpeed', 54, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16),
            new Field('MaxPosVerticalSpeed', 55, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16),
            new Field('MaxNegVerticalSpeed', 56, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16),
            new Field('TimeInHrZone', 57, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TimeInSpeedZone', 58, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TimeInCadenceZone', 59, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TimeInPowerZone', 60, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('RepetitionNum', 61, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('MinAltitude', 62, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16),
            new Field('MinHeartRate', 63, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8),
            new Field('WktStepIndex', 71, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('OpponentScore', 74, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('StrokeCount', 75, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16),
            new Field('ZoneCount', 76, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16),
            new Field('AvgVerticalOscillation', 77, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16),
            new Field('AvgStanceTimePercent', 78, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16),
            new Field('AvgStanceTime', 79, FitBaseType::UINT16, 10.0, 0.0, 'ms', false, ProfileType::UINT16),
            new Field('AvgFractionalCadence', 80, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('MaxFractionalCadence', 81, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('TotalFractionalCycles', 82, FitBaseType::UINT8, 128.0, 0.0, 'cycles', false, ProfileType::UINT8),
            new Field('PlayerScore', 83, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('AvgTotalHemoglobinConc', 84, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16),
            new Field('MinTotalHemoglobinConc', 85, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16),
            new Field('MaxTotalHemoglobinConc', 86, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16),
            new Field('AvgSaturatedHemoglobinPercent', 87, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16),
            new Field('MinSaturatedHemoglobinPercent', 88, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16),
            new Field('MaxSaturatedHemoglobinPercent', 89, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16),
            new Field('AvgLeftTorqueEffectiveness', 91, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('AvgRightTorqueEffectiveness', 92, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('AvgLeftPedalSmoothness', 93, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('AvgRightPedalSmoothness', 94, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('AvgCombinedPedalSmoothness', 95, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('TimeStanding', 98, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('StandCount', 99, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('AvgLeftPco', 100, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8),
            new Field('AvgRightPco', 101, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8),
            new Field('AvgLeftPowerPhase', 102, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8),
            new Field('AvgLeftPowerPhasePeak', 103, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8),
            new Field('AvgRightPowerPhase', 104, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8),
            new Field('AvgRightPowerPhasePeak', 105, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8),
            new Field('AvgPowerPosition', 106, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('MaxPowerPosition', 107, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('AvgCadencePosition', 108, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('MaxCadencePosition', 109, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8),
            new Field('EnhancedAvgSpeed', 110, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32),
            new Field('EnhancedMaxSpeed', 111, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32),
            new Field('EnhancedAvgAltitude', 112, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32),
            new Field('EnhancedMinAltitude', 113, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32),
            new Field('EnhancedMaxAltitude', 114, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32),
            new Field('AvgLevMotorPower', 115, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('MaxLevMotorPower', 116, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16),
            new Field('LevBatteryConsumption', 117, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('AvgVerticalRatio', 118, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16),
            new Field('AvgStanceTimeBalance', 119, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16),
            new Field('AvgStepLength', 120, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16),
            new Field('AvgVam', 121, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16),
            new Field('TotalGrit', 149, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32),
            new Field('TotalFlow', 150, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32),
            new Field('JumpCount', 151, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('AvgGrit', 153, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32),
            new Field('AvgFlow', 154, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32),
            new Field('TotalFractionalAscent', 156, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8),
            new Field('TotalFractionalDescent', 157, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)
        ]);
    }
}
