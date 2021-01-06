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
     * Gets the end position lat
     */
    public function getEndPositionLat(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the end position long
     */
    public function getEndPositionLong(): ?int
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
        return $this->getValue(12);
    }

    /**
     * Gets the avg speed
     */
    public function getAvgSpeed(): ?int
    {
        return $this->getValue(13);
    }

    /**
     * Gets the max speed
     */
    public function getMaxSpeed(): ?int
    {
        return $this->getValue(14);
    }

    /**
     * Gets the avg heart rate
     */
    public function getAvgHeartRate(): ?int
    {
        return $this->getValue(15);
    }

    /**
     * Gets the max heart rate
     */
    public function getMaxHeartRate(): ?int
    {
        return $this->getValue(16);
    }

    /**
     * Gets the avg cadence
     */
    public function getAvgCadence(): ?int
    {
        return $this->getValue(17);
    }

    /**
     * Gets the max cadence
     */
    public function getMaxCadence(): ?int
    {
        return $this->getValue(18);
    }

    /**
     * Gets the avg power
     */
    public function getAvgPower(): ?int
    {
        return $this->getValue(19);
    }

    /**
     * Gets the max power
     */
    public function getMaxPower(): ?int
    {
        return $this->getValue(20);
    }

    /**
     * Gets the total ascent
     */
    public function getTotalAscent(): ?int
    {
        return $this->getValue(21);
    }

    /**
     * Gets the total descent
     */
    public function getTotalDescent(): ?int
    {
        return $this->getValue(22);
    }

    /**
     * Gets the sport
     */
    public function getSport(): ?int
    {
        return $this->getValue(23);
    }

    /**
     * Gets the event group
     */
    public function getEventGroup(): ?int
    {
        return $this->getValue(24);
    }

    /**
     * Gets the nec lat
     */
    public function getNecLat(): ?int
    {
        return $this->getValue(25);
    }

    /**
     * Gets the nec long
     */
    public function getNecLong(): ?int
    {
        return $this->getValue(26);
    }

    /**
     * Gets the swc lat
     */
    public function getSwcLat(): ?int
    {
        return $this->getValue(27);
    }

    /**
     * Gets the swc long
     */
    public function getSwcLong(): ?int
    {
        return $this->getValue(28);
    }

    /**
     * Gets the name
     */
    public function getName(): ?string
    {
        return $this->getValue(29);
    }

    /**
     * Gets the normalized power
     */
    public function getNormalizedPower(): ?int
    {
        return $this->getValue(30);
    }

    /**
     * Gets the left right balance
     */
    public function getLeftRightBalance(): ?int
    {
        return $this->getValue(31);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): ?int
    {
        return $this->getValue(32);
    }

    /**
     * Gets the total work
     */
    public function getTotalWork(): ?int
    {
        return $this->getValue(33);
    }

    /**
     * Gets the avg altitude
     */
    public function getAvgAltitude(): ?int
    {
        return $this->getValue(34);
    }

    /**
     * Gets the max altitude
     */
    public function getMaxAltitude(): ?int
    {
        return $this->getValue(35);
    }

    /**
     * Gets the gps accuracy
     */
    public function getGpsAccuracy(): ?int
    {
        return $this->getValue(36);
    }

    /**
     * Gets the avg grade
     */
    public function getAvgGrade(): ?int
    {
        return $this->getValue(37);
    }

    /**
     * Gets the avg pos grade
     */
    public function getAvgPosGrade(): ?int
    {
        return $this->getValue(38);
    }

    /**
     * Gets the avg neg grade
     */
    public function getAvgNegGrade(): ?int
    {
        return $this->getValue(39);
    }

    /**
     * Gets the max pos grade
     */
    public function getMaxPosGrade(): ?int
    {
        return $this->getValue(40);
    }

    /**
     * Gets the max neg grade
     */
    public function getMaxNegGrade(): ?int
    {
        return $this->getValue(41);
    }

    /**
     * Gets the avg temperature
     */
    public function getAvgTemperature(): ?int
    {
        return $this->getValue(42);
    }

    /**
     * Gets the max temperature
     */
    public function getMaxTemperature(): ?int
    {
        return $this->getValue(43);
    }

    /**
     * Gets the total moving time
     */
    public function getTotalMovingTime(): ?int
    {
        return $this->getValue(44);
    }

    /**
     * Gets the avg pos vertical speed
     */
    public function getAvgPosVerticalSpeed(): ?int
    {
        return $this->getValue(45);
    }

    /**
     * Gets the avg neg vertical speed
     */
    public function getAvgNegVerticalSpeed(): ?int
    {
        return $this->getValue(46);
    }

    /**
     * Gets the max pos vertical speed
     */
    public function getMaxPosVerticalSpeed(): ?int
    {
        return $this->getValue(47);
    }

    /**
     * Gets the max neg vertical speed
     */
    public function getMaxNegVerticalSpeed(): ?int
    {
        return $this->getValue(48);
    }

    /**
     * Gets the time in hr zone
     */
    public function getTimeInHrZone(): ?int
    {
        return $this->getValue(49);
    }

    /**
     * Gets the time in speed zone
     */
    public function getTimeInSpeedZone(): ?int
    {
        return $this->getValue(50);
    }

    /**
     * Gets the time in cadence zone
     */
    public function getTimeInCadenceZone(): ?int
    {
        return $this->getValue(51);
    }

    /**
     * Gets the time in power zone
     */
    public function getTimeInPowerZone(): ?int
    {
        return $this->getValue(52);
    }

    /**
     * Gets the repetition num
     */
    public function getRepetitionNum(): ?int
    {
        return $this->getValue(53);
    }

    /**
     * Gets the min altitude
     */
    public function getMinAltitude(): ?int
    {
        return $this->getValue(54);
    }

    /**
     * Gets the min heart rate
     */
    public function getMinHeartRate(): ?int
    {
        return $this->getValue(55);
    }

    /**
     * Gets the active time
     */
    public function getActiveTime(): ?int
    {
        return $this->getValue(56);
    }

    /**
     * Gets the wkt step index
     */
    public function getWktStepIndex(): ?int
    {
        return $this->getValue(57);
    }

    /**
     * Gets the sport event
     */
    public function getSportEvent(): ?int
    {
        return $this->getValue(58);
    }

    /**
     * Gets the avg left torque effectiveness
     */
    public function getAvgLeftTorqueEffectiveness(): ?int
    {
        return $this->getValue(59);
    }

    /**
     * Gets the avg right torque effectiveness
     */
    public function getAvgRightTorqueEffectiveness(): ?int
    {
        return $this->getValue(60);
    }

    /**
     * Gets the avg left pedal smoothness
     */
    public function getAvgLeftPedalSmoothness(): ?int
    {
        return $this->getValue(61);
    }

    /**
     * Gets the avg right pedal smoothness
     */
    public function getAvgRightPedalSmoothness(): ?int
    {
        return $this->getValue(62);
    }

    /**
     * Gets the avg combined pedal smoothness
     */
    public function getAvgCombinedPedalSmoothness(): ?int
    {
        return $this->getValue(63);
    }

    /**
     * Gets the status
     */
    public function getStatus(): ?int
    {
        return $this->getValue(64);
    }

    /**
     * Gets the uuid
     */
    public function getUuid(): ?string
    {
        return $this->getValue(65);
    }

    /**
     * Gets the avg fractional cadence
     */
    public function getAvgFractionalCadence(): ?int
    {
        return $this->getValue(66);
    }

    /**
     * Gets the max fractional cadence
     */
    public function getMaxFractionalCadence(): ?int
    {
        return $this->getValue(67);
    }

    /**
     * Gets the total fractional cycles
     */
    public function getTotalFractionalCycles(): ?int
    {
        return $this->getValue(68);
    }

    /**
     * Gets the front gear shift count
     */
    public function getFrontGearShiftCount(): ?int
    {
        return $this->getValue(69);
    }

    /**
     * Gets the rear gear shift count
     */
    public function getRearGearShiftCount(): ?int
    {
        return $this->getValue(70);
    }

    /**
     * Gets the time standing
     */
    public function getTimeStanding(): ?int
    {
        return $this->getValue(71);
    }

    /**
     * Gets the stand count
     */
    public function getStandCount(): ?int
    {
        return $this->getValue(72);
    }

    /**
     * Gets the avg left pco
     */
    public function getAvgLeftPco(): ?int
    {
        return $this->getValue(73);
    }

    /**
     * Gets the avg right pco
     */
    public function getAvgRightPco(): ?int
    {
        return $this->getValue(74);
    }

    /**
     * Gets the avg left power phase
     */
    public function getAvgLeftPowerPhase(): ?int
    {
        return $this->getValue(75);
    }

    /**
     * Gets the avg left power phase peak
     */
    public function getAvgLeftPowerPhasePeak(): ?int
    {
        return $this->getValue(76);
    }

    /**
     * Gets the avg right power phase
     */
    public function getAvgRightPowerPhase(): ?int
    {
        return $this->getValue(77);
    }

    /**
     * Gets the avg right power phase peak
     */
    public function getAvgRightPowerPhasePeak(): ?int
    {
        return $this->getValue(78);
    }

    /**
     * Gets the avg power position
     */
    public function getAvgPowerPosition(): ?int
    {
        return $this->getValue(79);
    }

    /**
     * Gets the max power position
     */
    public function getMaxPowerPosition(): ?int
    {
        return $this->getValue(80);
    }

    /**
     * Gets the avg cadence position
     */
    public function getAvgCadencePosition(): ?int
    {
        return $this->getValue(81);
    }

    /**
     * Gets the max cadence position
     */
    public function getMaxCadencePosition(): ?int
    {
        return $this->getValue(82);
    }

    /**
     * Gets the manufacturer
     */
    public function getManufacturer(): ?int
    {
        return $this->getValue(83);
    }

    /**
     * Gets the total grit
     */
    public function getTotalGrit(): ?float
    {
        return $this->getValue(84);
    }

    /**
     * Gets the total flow
     */
    public function getTotalFlow(): ?float
    {
        return $this->getValue(85);
    }

    /**
     * Gets the avg grit
     */
    public function getAvgGrit(): ?float
    {
        return $this->getValue(86);
    }

    /**
     * Gets the avg flow
     */
    public function getAvgFlow(): ?float
    {
        return $this->getValue(87);
    }

    /**
     * Gets the total fractional ascent
     */
    public function getTotalFractionalAscent(): ?int
    {
        return $this->getValue(89);
    }

    /**
     * Gets the total fractional descent
     */
    public function getTotalFractionalDescent(): ?int
    {
        return $this->getValue(90);
    }
}
