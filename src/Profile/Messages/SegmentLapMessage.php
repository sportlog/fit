<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.54Release
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
#[Field(
	'AvgLeftPowerPhase',
	75,
	FitBaseType::UINT8,
	0.71111109999999999597974920106935314834117889404296875,
	0.0,
	'degrees',
	false,
	ProfileType::UINT8
)]
#[Field(
	'AvgLeftPowerPhasePeak',
	76,
	FitBaseType::UINT8,
	0.71111109999999999597974920106935314834117889404296875,
	0.0,
	'degrees',
	false,
	ProfileType::UINT8
)]
#[Field(
	'AvgRightPowerPhase',
	77,
	FitBaseType::UINT8,
	0.71111109999999999597974920106935314834117889404296875,
	0.0,
	'degrees',
	false,
	ProfileType::UINT8
)]
#[Field(
	'AvgRightPowerPhasePeak',
	78,
	FitBaseType::UINT8,
	0.71111109999999999597974920106935314834117889404296875,
	0.0,
	'degrees',
	false,
	ProfileType::UINT8
)]
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
        parent::__construct('SegmentLap', MesgNum::SEGMENT_LAP);
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
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(23);
    }

    /**
     * Gets the event group
     */
    public function getEventGroup(): int|array|null
    {
        return $this->getFieldValue(24);
    }

    /**
     * Gets the nec lat
     */
    public function getNecLat(): int|array|null
    {
        return $this->getFieldValue(25);
    }

    /**
     * Gets the nec long
     */
    public function getNecLong(): int|array|null
    {
        return $this->getFieldValue(26);
    }

    /**
     * Gets the swc lat
     */
    public function getSwcLat(): int|array|null
    {
        return $this->getFieldValue(27);
    }

    /**
     * Gets the swc long
     */
    public function getSwcLong(): int|array|null
    {
        return $this->getFieldValue(28);
    }

    /**
     * Gets the name
     */
    public function getName(): string|array|null
    {
        return $this->getFieldValue(29);
    }

    /**
     * Gets the normalized power
     */
    public function getNormalizedPower(): int|array|null
    {
        return $this->getFieldValue(30);
    }

    /**
     * Gets the left right balance
     */
    public function getLeftRightBalance(): int|array|null
    {
        return $this->getFieldValue(31);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|array|null
    {
        return $this->getFieldValue(32);
    }

    /**
     * Gets the total work
     */
    public function getTotalWork(): int|array|null
    {
        return $this->getFieldValue(33);
    }

    /**
     * Gets the avg altitude
     */
    public function getAvgAltitude(): float|array|null
    {
        return $this->getFieldValue(34);
    }

    /**
     * Gets the max altitude
     */
    public function getMaxAltitude(): float|array|null
    {
        return $this->getFieldValue(35);
    }

    /**
     * Gets the gps accuracy
     */
    public function getGpsAccuracy(): int|array|null
    {
        return $this->getFieldValue(36);
    }

    /**
     * Gets the avg grade
     */
    public function getAvgGrade(): float|array|null
    {
        return $this->getFieldValue(37);
    }

    /**
     * Gets the avg pos grade
     */
    public function getAvgPosGrade(): float|array|null
    {
        return $this->getFieldValue(38);
    }

    /**
     * Gets the avg neg grade
     */
    public function getAvgNegGrade(): float|array|null
    {
        return $this->getFieldValue(39);
    }

    /**
     * Gets the max pos grade
     */
    public function getMaxPosGrade(): float|array|null
    {
        return $this->getFieldValue(40);
    }

    /**
     * Gets the max neg grade
     */
    public function getMaxNegGrade(): float|array|null
    {
        return $this->getFieldValue(41);
    }

    /**
     * Gets the avg temperature
     */
    public function getAvgTemperature(): int|array|null
    {
        return $this->getFieldValue(42);
    }

    /**
     * Gets the max temperature
     */
    public function getMaxTemperature(): int|array|null
    {
        return $this->getFieldValue(43);
    }

    /**
     * Gets the total moving time
     */
    public function getTotalMovingTime(): float|array|null
    {
        return $this->getFieldValue(44);
    }

    /**
     * Gets the avg pos vertical speed
     */
    public function getAvgPosVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(45);
    }

    /**
     * Gets the avg neg vertical speed
     */
    public function getAvgNegVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(46);
    }

    /**
     * Gets the max pos vertical speed
     */
    public function getMaxPosVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(47);
    }

    /**
     * Gets the max neg vertical speed
     */
    public function getMaxNegVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(48);
    }

    /**
     * Gets the time in hr zone
     */
    public function getTimeInHrZone(): float|array|null
    {
        return $this->getFieldValue(49);
    }

    /**
     * Gets the time in speed zone
     */
    public function getTimeInSpeedZone(): float|array|null
    {
        return $this->getFieldValue(50);
    }

    /**
     * Gets the time in cadence zone
     */
    public function getTimeInCadenceZone(): float|array|null
    {
        return $this->getFieldValue(51);
    }

    /**
     * Gets the time in power zone
     */
    public function getTimeInPowerZone(): float|array|null
    {
        return $this->getFieldValue(52);
    }

    /**
     * Gets the repetition num
     */
    public function getRepetitionNum(): int|array|null
    {
        return $this->getFieldValue(53);
    }

    /**
     * Gets the min altitude
     */
    public function getMinAltitude(): float|array|null
    {
        return $this->getFieldValue(54);
    }

    /**
     * Gets the min heart rate
     */
    public function getMinHeartRate(): int|array|null
    {
        return $this->getFieldValue(55);
    }

    /**
     * Gets the active time
     */
    public function getActiveTime(): float|array|null
    {
        return $this->getFieldValue(56);
    }

    /**
     * Gets the wkt step index
     */
    public function getWktStepIndex(): int|array|null
    {
        return $this->getFieldValue(57);
    }

    /**
     * Gets the sport event
     */
    public function getSportEvent(): int|array|null
    {
        return $this->getFieldValue(58);
    }

    /**
     * Gets the avg left torque effectiveness
     */
    public function getAvgLeftTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(59);
    }

    /**
     * Gets the avg right torque effectiveness
     */
    public function getAvgRightTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(60);
    }

    /**
     * Gets the avg left pedal smoothness
     */
    public function getAvgLeftPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(61);
    }

    /**
     * Gets the avg right pedal smoothness
     */
    public function getAvgRightPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(62);
    }

    /**
     * Gets the avg combined pedal smoothness
     */
    public function getAvgCombinedPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(63);
    }

    /**
     * Gets the status
     */
    public function getStatus(): int|array|null
    {
        return $this->getFieldValue(64);
    }

    /**
     * Gets the uuid
     */
    public function getUuid(): string|array|null
    {
        return $this->getFieldValue(65);
    }

    /**
     * Gets the avg fractional cadence
     */
    public function getAvgFractionalCadence(): float|array|null
    {
        return $this->getFieldValue(66);
    }

    /**
     * Gets the max fractional cadence
     */
    public function getMaxFractionalCadence(): float|array|null
    {
        return $this->getFieldValue(67);
    }

    /**
     * Gets the total fractional cycles
     */
    public function getTotalFractionalCycles(): float|array|null
    {
        return $this->getFieldValue(68);
    }

    /**
     * Gets the front gear shift count
     */
    public function getFrontGearShiftCount(): int|array|null
    {
        return $this->getFieldValue(69);
    }

    /**
     * Gets the rear gear shift count
     */
    public function getRearGearShiftCount(): int|array|null
    {
        return $this->getFieldValue(70);
    }

    /**
     * Gets the time standing
     */
    public function getTimeStanding(): float|array|null
    {
        return $this->getFieldValue(71);
    }

    /**
     * Gets the stand count
     */
    public function getStandCount(): int|array|null
    {
        return $this->getFieldValue(72);
    }

    /**
     * Gets the avg left pco
     */
    public function getAvgLeftPco(): int|array|null
    {
        return $this->getFieldValue(73);
    }

    /**
     * Gets the avg right pco
     */
    public function getAvgRightPco(): int|array|null
    {
        return $this->getFieldValue(74);
    }

    /**
     * Gets the avg left power phase
     */
    public function getAvgLeftPowerPhase(): float|array|null
    {
        return $this->getFieldValue(75);
    }

    /**
     * Gets the avg left power phase peak
     */
    public function getAvgLeftPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(76);
    }

    /**
     * Gets the avg right power phase
     */
    public function getAvgRightPowerPhase(): float|array|null
    {
        return $this->getFieldValue(77);
    }

    /**
     * Gets the avg right power phase peak
     */
    public function getAvgRightPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(78);
    }

    /**
     * Gets the avg power position
     */
    public function getAvgPowerPosition(): int|array|null
    {
        return $this->getFieldValue(79);
    }

    /**
     * Gets the max power position
     */
    public function getMaxPowerPosition(): int|array|null
    {
        return $this->getFieldValue(80);
    }

    /**
     * Gets the avg cadence position
     */
    public function getAvgCadencePosition(): int|array|null
    {
        return $this->getFieldValue(81);
    }

    /**
     * Gets the max cadence position
     */
    public function getMaxCadencePosition(): int|array|null
    {
        return $this->getFieldValue(82);
    }

    /**
     * Gets the manufacturer
     */
    public function getManufacturer(): int|array|null
    {
        return $this->getFieldValue(83);
    }

    /**
     * Gets the total grit
     */
    public function getTotalGrit(): float|array|null
    {
        return $this->getFieldValue(84);
    }

    /**
     * Gets the total flow
     */
    public function getTotalFlow(): float|array|null
    {
        return $this->getFieldValue(85);
    }

    /**
     * Gets the avg grit
     */
    public function getAvgGrit(): float|array|null
    {
        return $this->getFieldValue(86);
    }

    /**
     * Gets the avg flow
     */
    public function getAvgFlow(): float|array|null
    {
        return $this->getFieldValue(87);
    }

    /**
     * Gets the total fractional ascent
     */
    public function getTotalFractionalAscent(): float|array|null
    {
        return $this->getFieldValue(89);
    }

    /**
     * Gets the total fractional descent
     */
    public function getTotalFractionalDescent(): float|array|null
    {
        return $this->getFieldValue(90);
    }
}
