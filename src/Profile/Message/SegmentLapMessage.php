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
 * SegmentLapMessage message
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
#[Field('Sport', 23, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('EventGroup', 24, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('NecLat', 25, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('NecLong', 26, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('SwcLat', 27, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('SwcLong', 28, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('Name', 29, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('NormalizedPower', 30, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('LeftRightBalance', 31, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE100)]
#[Field('SubSport', 32, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('TotalWork', 33, FitBaseType::UINT32, 1.0, 0.0, 'J', false, ProfileType::UINT32)]
#[Field('AvgAltitude', 34, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
#[Field('MaxAltitude', 35, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
#[Field('GpsAccuracy', 36, FitBaseType::UINT8, 1.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('AvgGrade', 37, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('AvgPosGrade', 38, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('AvgNegGrade', 39, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('MaxPosGrade', 40, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('MaxNegGrade', 41, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('AvgTemperature', 42, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('MaxTemperature', 43, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('TotalMovingTime', 44, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('AvgPosVerticalSpeed', 45, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('AvgNegVerticalSpeed', 46, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('MaxPosVerticalSpeed', 47, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('MaxNegVerticalSpeed', 48, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('TimeInHrZone', 49, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInSpeedZone', 50, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInCadenceZone', 51, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInPowerZone', 52, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('RepetitionNum', 53, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('MinAltitude', 54, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
#[Field('MinHeartRate', 55, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('ActiveTime', 56, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('WktStepIndex', 57, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('SportEvent', 58, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORTEVENT)]
#[Field('AvgLeftTorqueEffectiveness', 59, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgRightTorqueEffectiveness', 60, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgLeftPedalSmoothness', 61, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgRightPedalSmoothness', 62, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgCombinedPedalSmoothness', 63, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('Status', 64, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTLAPSTATUS)]
#[Field('Uuid', 65, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('AvgFractionalCadence', 66, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('MaxFractionalCadence', 67, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('TotalFractionalCycles', 68, FitBaseType::UINT8, 128.0, 0.0, 'cycles', false, ProfileType::UINT8)]
#[Field('FrontGearShiftCount', 69, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('RearGearShiftCount', 70, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('TimeStanding', 71, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('StandCount', 72, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('AvgLeftPco', 73, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('AvgRightPco', 74, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('AvgLeftPowerPhase', 75, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgLeftPowerPhasePeak', 76, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgRightPowerPhase', 77, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgRightPowerPhasePeak', 78, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgPowerPosition', 79, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('MaxPowerPosition', 80, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('AvgCadencePosition', 81, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('MaxCadencePosition', 82, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('Manufacturer', 83, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER)]
#[Field('TotalGrit', 84, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
#[Field('TotalFlow', 85, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
#[Field('AvgGrit', 86, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
#[Field('AvgFlow', 87, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
#[Field('TotalFractionalAscent', 89, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('TotalFractionalDescent', 90, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
final class SegmentLapMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SegmentLap', MessageNumber::SegmentLap);
    }

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

    public function getSport(): ?int
    {
        return $this->getValue(23);
    }

    public function getEventGroup(): ?int
    {
        return $this->getValue(24);
    }

    public function getNecLat(): ?int
    {
        return $this->getValue(25);
    }

    public function getNecLong(): ?int
    {
        return $this->getValue(26);
    }

    public function getSwcLat(): ?int
    {
        return $this->getValue(27);
    }

    public function getSwcLong(): ?int
    {
        return $this->getValue(28);
    }

    public function getName(): ?string
    {
        return $this->getValue(29);
    }

    public function getNormalizedPower(): ?int
    {
        return $this->getValue(30);
    }

    public function getLeftRightBalance(): ?int
    {
        return $this->getValue(31);
    }

    public function getSubSport(): ?int
    {
        return $this->getValue(32);
    }

    public function getTotalWork(): ?int
    {
        return $this->getValue(33);
    }

    public function getAvgAltitude(): ?int
    {
        return $this->getValue(34);
    }

    public function getMaxAltitude(): ?int
    {
        return $this->getValue(35);
    }

    public function getGpsAccuracy(): ?int
    {
        return $this->getValue(36);
    }

    public function getAvgGrade(): ?int
    {
        return $this->getValue(37);
    }

    public function getAvgPosGrade(): ?int
    {
        return $this->getValue(38);
    }

    public function getAvgNegGrade(): ?int
    {
        return $this->getValue(39);
    }

    public function getMaxPosGrade(): ?int
    {
        return $this->getValue(40);
    }

    public function getMaxNegGrade(): ?int
    {
        return $this->getValue(41);
    }

    public function getAvgTemperature(): ?int
    {
        return $this->getValue(42);
    }

    public function getMaxTemperature(): ?int
    {
        return $this->getValue(43);
    }

    public function getTotalMovingTime(): ?int
    {
        return $this->getValue(44);
    }

    public function getAvgPosVerticalSpeed(): ?int
    {
        return $this->getValue(45);
    }

    public function getAvgNegVerticalSpeed(): ?int
    {
        return $this->getValue(46);
    }

    public function getMaxPosVerticalSpeed(): ?int
    {
        return $this->getValue(47);
    }

    public function getMaxNegVerticalSpeed(): ?int
    {
        return $this->getValue(48);
    }

    public function getTimeInHrZone(): ?int
    {
        return $this->getValue(49);
    }

    public function getTimeInSpeedZone(): ?int
    {
        return $this->getValue(50);
    }

    public function getTimeInCadenceZone(): ?int
    {
        return $this->getValue(51);
    }

    public function getTimeInPowerZone(): ?int
    {
        return $this->getValue(52);
    }

    public function getRepetitionNum(): ?int
    {
        return $this->getValue(53);
    }

    public function getMinAltitude(): ?int
    {
        return $this->getValue(54);
    }

    public function getMinHeartRate(): ?int
    {
        return $this->getValue(55);
    }

    public function getActiveTime(): ?int
    {
        return $this->getValue(56);
    }

    public function getWktStepIndex(): ?int
    {
        return $this->getValue(57);
    }

    public function getSportEvent(): ?int
    {
        return $this->getValue(58);
    }

    public function getAvgLeftTorqueEffectiveness(): ?int
    {
        return $this->getValue(59);
    }

    public function getAvgRightTorqueEffectiveness(): ?int
    {
        return $this->getValue(60);
    }

    public function getAvgLeftPedalSmoothness(): ?int
    {
        return $this->getValue(61);
    }

    public function getAvgRightPedalSmoothness(): ?int
    {
        return $this->getValue(62);
    }

    public function getAvgCombinedPedalSmoothness(): ?int
    {
        return $this->getValue(63);
    }

    public function getStatus(): ?int
    {
        return $this->getValue(64);
    }

    public function getUuid(): ?string
    {
        return $this->getValue(65);
    }

    public function getAvgFractionalCadence(): ?int
    {
        return $this->getValue(66);
    }

    public function getMaxFractionalCadence(): ?int
    {
        return $this->getValue(67);
    }

    public function getTotalFractionalCycles(): ?int
    {
        return $this->getValue(68);
    }

    public function getFrontGearShiftCount(): ?int
    {
        return $this->getValue(69);
    }

    public function getRearGearShiftCount(): ?int
    {
        return $this->getValue(70);
    }

    public function getTimeStanding(): ?int
    {
        return $this->getValue(71);
    }

    public function getStandCount(): ?int
    {
        return $this->getValue(72);
    }

    public function getAvgLeftPco(): ?int
    {
        return $this->getValue(73);
    }

    public function getAvgRightPco(): ?int
    {
        return $this->getValue(74);
    }

    public function getAvgLeftPowerPhase(): ?int
    {
        return $this->getValue(75);
    }

    public function getAvgLeftPowerPhasePeak(): ?int
    {
        return $this->getValue(76);
    }

    public function getAvgRightPowerPhase(): ?int
    {
        return $this->getValue(77);
    }

    public function getAvgRightPowerPhasePeak(): ?int
    {
        return $this->getValue(78);
    }

    public function getAvgPowerPosition(): ?int
    {
        return $this->getValue(79);
    }

    public function getMaxPowerPosition(): ?int
    {
        return $this->getValue(80);
    }

    public function getAvgCadencePosition(): ?int
    {
        return $this->getValue(81);
    }

    public function getMaxCadencePosition(): ?int
    {
        return $this->getValue(82);
    }

    public function getManufacturer(): ?int
    {
        return $this->getValue(83);
    }

    public function getTotalGrit(): ?float
    {
        return $this->getValue(84);
    }

    public function getTotalFlow(): ?float
    {
        return $this->getValue(85);
    }

    public function getAvgGrit(): ?float
    {
        return $this->getValue(86);
    }

    public function getAvgFlow(): ?float
    {
        return $this->getValue(87);
    }

    public function getTotalFractionalAscent(): ?int
    {
        return $this->getValue(89);
    }

    public function getTotalFractionalDescent(): ?int
    {
        return $this->getValue(90);
    }
}
