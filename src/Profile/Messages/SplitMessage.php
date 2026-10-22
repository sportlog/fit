<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.218 SDK
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
 * SplitMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('SplitType', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPLITTYPE)]
#[Field('TotalElapsedTime', 1, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalTimerTime', 2, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalDistance', 3, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('AvgSpeed', 4, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('StartTime', 9, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('Sport', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('SubSport', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('TotalAscent', 13, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('TotalDescent', 14, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('AvgHeartRate', 15, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('MaxHeartRate', 16, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('NecLat', 17, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('NecLong', 18, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('SwcLat', 19, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('SwcLong', 20, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('StartPositionLat', 21, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('StartPositionLong', 22, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('EndPositionLat', 23, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('EndPositionLong', 24, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('MaxSpeed', 25, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('AvgVertSpeed', 26, FitBaseType::SINT32, 1000.0, 0.0, 'm/s', false, ProfileType::SINT32)]
#[Field('EndTime', 27, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('TotalCalories', 28, FitBaseType::UINT32, 1.0, 0.0, 'kcal', false, ProfileType::UINT32)]
#[Field('AvgCadence', 29, FitBaseType::UINT16, 128.0, 0.0, 'rpm', false, ProfileType::UINT16)]
#[Field('MaxCadence', 30, FitBaseType::UINT16, 128.0, 0.0, 'rpm', false, ProfileType::UINT16)]
#[Field('TotalCycles', 31, FitBaseType::UINT32, 1.0, 0.0, 'cycles', false, ProfileType::UINT32)]
#[Field('AvgTemperature', 32, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('MaxTemperature', 33, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('MinTemperature', 34, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('AvgVerticalOscillation', 35, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
#[Field('AvgVerticalRatio', 36, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('AvgStanceTime', 37, FitBaseType::UINT16, 10.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('AvgStanceTimeBalance', 38, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('AvgStepLength', 39, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
#[Field('AvgPower', 40, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('MaxPower', 41, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('NormalizedPower', 42, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('LeftRightBalance', 43, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE100)]
#[Field('TimeStanding', 44, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('AvgLeftPco', 45, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('AvgRightPco', 46, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('AvgLeftPowerPhase', 47, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgLeftPowerPhasePeak', 48, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgRightPowerPhase', 49, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgRightPowerPhasePeak', 50, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgPowerPosition', 51, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('MaxPowerPosition', 52, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('AvgLeftTorqueEffectiveness', 53, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgRightTorqueEffectiveness', 54, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgLeftPedalSmoothness', 55, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgRightPedalSmoothness', 56, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgCombinedPedalSmoothness', 57, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgFlow', 58, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
#[Field('TotalGrit', 59, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
#[Field('SwimStroke', 62, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SWIMSTROKE)]
#[Field('NumActiveLengths', 63, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16)]
#[Field('AvgSwolf', 64, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('AvgStrokeDistance', 65, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('AvgStrokesPerLength', 66, FitBaseType::UINT16, 10.0, 0.0, 'strokes / length', false, ProfileType::UINT16)]
#[Field('FirstLapIndex', 67, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('NumLaps', 68, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('ClimbGradingScale', 69, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CLIMBGRADINGSCALE)]
#[Field('ClimbGradeValue', 70, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('Status', 71, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPLITSTATUS)]
#[Field('NumFalls', 72, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('ClimbSend', 73, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('StartElevation', 74, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
#[Field('ActiveTime', 78, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('MetabolicCalories', 79, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('TotalFractionalAscent', 80, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('TotalFractionalDescent', 81, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('AvgGrade', 88, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('MaxGrade', 89, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('MinCadence', 90, FitBaseType::UINT16, 128.0, 0.0, 'rpm', false, ProfileType::UINT16)]
#[Field('AvgGradeAdjustedSpeed', 93, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('AvgStress', 94, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('AvgVam', 99, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('JumpCount', 104, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('TotalMovingTime', 110, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('DiveSectionType', 112, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVESECTIONTYPE)]
#[Field('AvgAscentRate', 113, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('MaxAscentRate', 114, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('AvgDescentRate', 115, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('MaxDescentRate', 116, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('TotalAscentTime', 117, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalDescentTime', 118, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalHangTime', 119, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('ApneaDiscipline', 120, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::APNEADISCIPLINE)]
#[Field('AvgDepth', 121, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('MaxDepth', 122, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('MinHeartRate', 124, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('SurfaceInterval', 127, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalFractionalCycles', 142, FitBaseType::UINT8, 128.0, 0.0, 'cycles', false, ProfileType::UINT8)]
#[Field('AvgStanceTimePercent', 144, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('TotalAnaerobicTrainingEffect', 168, FitBaseType::UINT8, 10.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('FrontGearShiftCount', 169, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('RearGearShiftCount', 170, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
final class SplitMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Split', MesgNum::SPLIT);
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
     * Gets the split type
     */
    public function getSplitType(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the total elapsed time
     */
    public function getTotalElapsedTime(): float|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the total timer time
     */
    public function getTotalTimerTime(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the total distance
     */
    public function getTotalDistance(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the avg speed
     */
    public function getAvgSpeed(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the start time
     */
    public function getStartTime(): DateTime|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the total ascent
     */
    public function getTotalAscent(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the total descent
     */
    public function getTotalDescent(): int|array|null
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
     * Gets the nec lat
     */
    public function getNecLat(): int|array|null
    {
        return $this->getFieldValue(17);
    }

    /**
     * Gets the nec long
     */
    public function getNecLong(): int|array|null
    {
        return $this->getFieldValue(18);
    }

    /**
     * Gets the swc lat
     */
    public function getSwcLat(): int|array|null
    {
        return $this->getFieldValue(19);
    }

    /**
     * Gets the swc long
     */
    public function getSwcLong(): int|array|null
    {
        return $this->getFieldValue(20);
    }

    /**
     * Gets the start position lat
     */
    public function getStartPositionLat(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the start position long
     */
    public function getStartPositionLong(): int|array|null
    {
        return $this->getFieldValue(22);
    }

    /**
     * Gets the end position lat
     */
    public function getEndPositionLat(): int|array|null
    {
        return $this->getFieldValue(23);
    }

    /**
     * Gets the end position long
     */
    public function getEndPositionLong(): int|array|null
    {
        return $this->getFieldValue(24);
    }

    /**
     * Gets the max speed
     */
    public function getMaxSpeed(): float|array|null
    {
        return $this->getFieldValue(25);
    }

    /**
     * Gets the avg vert speed
     */
    public function getAvgVertSpeed(): float|array|null
    {
        return $this->getFieldValue(26);
    }

    /**
     * Gets the end time
     */
    public function getEndTime(): DateTime|null
    {
        return $this->getFieldValue(27);
    }

    /**
     * Gets the total calories
     */
    public function getTotalCalories(): int|array|null
    {
        return $this->getFieldValue(28);
    }

    /**
     * Gets the avg cadence
     */
    public function getAvgCadence(): float|array|null
    {
        return $this->getFieldValue(29);
    }

    /**
     * Gets the max cadence
     */
    public function getMaxCadence(): float|array|null
    {
        return $this->getFieldValue(30);
    }

    /**
     * Gets the total cycles
     */
    public function getTotalCycles(): int|array|null
    {
        return $this->getFieldValue(31);
    }

    /**
     * Gets the avg temperature
     */
    public function getAvgTemperature(): int|array|null
    {
        return $this->getFieldValue(32);
    }

    /**
     * Gets the max temperature
     */
    public function getMaxTemperature(): int|array|null
    {
        return $this->getFieldValue(33);
    }

    /**
     * Gets the min temperature
     */
    public function getMinTemperature(): int|array|null
    {
        return $this->getFieldValue(34);
    }

    /**
     * Gets the avg vertical oscillation
     */
    public function getAvgVerticalOscillation(): float|array|null
    {
        return $this->getFieldValue(35);
    }

    /**
     * Gets the avg vertical ratio
     */
    public function getAvgVerticalRatio(): float|array|null
    {
        return $this->getFieldValue(36);
    }

    /**
     * Gets the avg stance time
     */
    public function getAvgStanceTime(): float|array|null
    {
        return $this->getFieldValue(37);
    }

    /**
     * Gets the avg stance time balance
     */
    public function getAvgStanceTimeBalance(): float|array|null
    {
        return $this->getFieldValue(38);
    }

    /**
     * Gets the avg step length
     */
    public function getAvgStepLength(): float|array|null
    {
        return $this->getFieldValue(39);
    }

    /**
     * Gets the avg power
     */
    public function getAvgPower(): int|array|null
    {
        return $this->getFieldValue(40);
    }

    /**
     * Gets the max power
     */
    public function getMaxPower(): int|array|null
    {
        return $this->getFieldValue(41);
    }

    /**
     * Gets the normalized power
     */
    public function getNormalizedPower(): int|array|null
    {
        return $this->getFieldValue(42);
    }

    /**
     * Gets the left right balance
     */
    public function getLeftRightBalance(): int|array|null
    {
        return $this->getFieldValue(43);
    }

    /**
     * Gets the time standing
     */
    public function getTimeStanding(): float|array|null
    {
        return $this->getFieldValue(44);
    }

    /**
     * Gets the avg left pco
     */
    public function getAvgLeftPco(): int|array|null
    {
        return $this->getFieldValue(45);
    }

    /**
     * Gets the avg right pco
     */
    public function getAvgRightPco(): int|array|null
    {
        return $this->getFieldValue(46);
    }

    /**
     * Gets the avg left power phase
     */
    public function getAvgLeftPowerPhase(): float|array|null
    {
        return $this->getFieldValue(47);
    }

    /**
     * Gets the avg left power phase peak
     */
    public function getAvgLeftPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(48);
    }

    /**
     * Gets the avg right power phase
     */
    public function getAvgRightPowerPhase(): float|array|null
    {
        return $this->getFieldValue(49);
    }

    /**
     * Gets the avg right power phase peak
     */
    public function getAvgRightPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(50);
    }

    /**
     * Gets the avg power position
     */
    public function getAvgPowerPosition(): int|array|null
    {
        return $this->getFieldValue(51);
    }

    /**
     * Gets the max power position
     */
    public function getMaxPowerPosition(): int|array|null
    {
        return $this->getFieldValue(52);
    }

    /**
     * Gets the avg left torque effectiveness
     */
    public function getAvgLeftTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(53);
    }

    /**
     * Gets the avg right torque effectiveness
     */
    public function getAvgRightTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(54);
    }

    /**
     * Gets the avg left pedal smoothness
     */
    public function getAvgLeftPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(55);
    }

    /**
     * Gets the avg right pedal smoothness
     */
    public function getAvgRightPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(56);
    }

    /**
     * Gets the avg combined pedal smoothness
     */
    public function getAvgCombinedPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(57);
    }

    /**
     * Gets the avg flow
     */
    public function getAvgFlow(): float|array|null
    {
        return $this->getFieldValue(58);
    }

    /**
     * Gets the total grit
     */
    public function getTotalGrit(): float|array|null
    {
        return $this->getFieldValue(59);
    }

    /**
     * Gets the swim stroke
     */
    public function getSwimStroke(): int|array|null
    {
        return $this->getFieldValue(62);
    }

    /**
     * Gets the num active lengths
     */
    public function getNumActiveLengths(): int|array|null
    {
        return $this->getFieldValue(63);
    }

    /**
     * Gets the avg swolf
     */
    public function getAvgSwolf(): int|array|null
    {
        return $this->getFieldValue(64);
    }

    /**
     * Gets the avg stroke distance
     */
    public function getAvgStrokeDistance(): float|array|null
    {
        return $this->getFieldValue(65);
    }

    /**
     * Gets the avg strokes per length
     */
    public function getAvgStrokesPerLength(): float|array|null
    {
        return $this->getFieldValue(66);
    }

    /**
     * Gets the first lap index
     */
    public function getFirstLapIndex(): int|array|null
    {
        return $this->getFieldValue(67);
    }

    /**
     * Gets the num laps
     */
    public function getNumLaps(): int|array|null
    {
        return $this->getFieldValue(68);
    }

    /**
     * Gets the climb grading scale
     */
    public function getClimbGradingScale(): int|array|null
    {
        return $this->getFieldValue(69);
    }

    /**
     * Gets the climb grade value
     */
    public function getClimbGradeValue(): int|array|null
    {
        return $this->getFieldValue(70);
    }

    /**
     * Gets the status
     */
    public function getStatus(): int|array|null
    {
        return $this->getFieldValue(71);
    }

    /**
     * Gets the num falls
     */
    public function getNumFalls(): int|array|null
    {
        return $this->getFieldValue(72);
    }

    /**
     * Gets the climb send
     */
    public function getClimbSend(): bool|array|null
    {
        return $this->getFieldValue(73);
    }

    /**
     * Gets the start elevation
     */
    public function getStartElevation(): float|array|null
    {
        return $this->getFieldValue(74);
    }

    /**
     * Gets the active time
     */
    public function getActiveTime(): float|array|null
    {
        return $this->getFieldValue(78);
    }

    /**
     * Gets the metabolic calories
     */
    public function getMetabolicCalories(): int|array|null
    {
        return $this->getFieldValue(79);
    }

    /**
     * Gets the total fractional ascent
     */
    public function getTotalFractionalAscent(): float|array|null
    {
        return $this->getFieldValue(80);
    }

    /**
     * Gets the total fractional descent
     */
    public function getTotalFractionalDescent(): float|array|null
    {
        return $this->getFieldValue(81);
    }

    /**
     * Gets the avg grade
     */
    public function getAvgGrade(): float|array|null
    {
        return $this->getFieldValue(88);
    }

    /**
     * Gets the max grade
     */
    public function getMaxGrade(): float|array|null
    {
        return $this->getFieldValue(89);
    }

    /**
     * Gets the min cadence
     */
    public function getMinCadence(): float|array|null
    {
        return $this->getFieldValue(90);
    }

    /**
     * Gets the avg grade adjusted speed
     */
    public function getAvgGradeAdjustedSpeed(): float|array|null
    {
        return $this->getFieldValue(93);
    }

    /**
     * Gets the avg stress
     */
    public function getAvgStress(): int|array|null
    {
        return $this->getFieldValue(94);
    }

    /**
     * Gets the avg vam
     */
    public function getAvgVam(): float|array|null
    {
        return $this->getFieldValue(99);
    }

    /**
     * Gets the jump count
     */
    public function getJumpCount(): int|array|null
    {
        return $this->getFieldValue(104);
    }

    /**
     * Gets the total moving time
     */
    public function getTotalMovingTime(): float|array|null
    {
        return $this->getFieldValue(110);
    }

    /**
     * Gets the dive section type
     */
    public function getDiveSectionType(): int|array|null
    {
        return $this->getFieldValue(112);
    }

    /**
     * Gets the avg ascent rate
     */
    public function getAvgAscentRate(): float|array|null
    {
        return $this->getFieldValue(113);
    }

    /**
     * Gets the max ascent rate
     */
    public function getMaxAscentRate(): float|array|null
    {
        return $this->getFieldValue(114);
    }

    /**
     * Gets the avg descent rate
     */
    public function getAvgDescentRate(): float|array|null
    {
        return $this->getFieldValue(115);
    }

    /**
     * Gets the max descent rate
     */
    public function getMaxDescentRate(): float|array|null
    {
        return $this->getFieldValue(116);
    }

    /**
     * Gets the total ascent time
     */
    public function getTotalAscentTime(): float|array|null
    {
        return $this->getFieldValue(117);
    }

    /**
     * Gets the total descent time
     */
    public function getTotalDescentTime(): float|array|null
    {
        return $this->getFieldValue(118);
    }

    /**
     * Gets the total hang time
     */
    public function getTotalHangTime(): float|array|null
    {
        return $this->getFieldValue(119);
    }

    /**
     * Gets the apnea discipline
     */
    public function getApneaDiscipline(): int|array|null
    {
        return $this->getFieldValue(120);
    }

    /**
     * Gets the avg depth
     */
    public function getAvgDepth(): float|array|null
    {
        return $this->getFieldValue(121);
    }

    /**
     * Gets the max depth
     */
    public function getMaxDepth(): float|array|null
    {
        return $this->getFieldValue(122);
    }

    /**
     * Gets the min heart rate
     */
    public function getMinHeartRate(): int|array|null
    {
        return $this->getFieldValue(124);
    }

    /**
     * Gets the surface interval
     */
    public function getSurfaceInterval(): int|array|null
    {
        return $this->getFieldValue(127);
    }

    /**
     * Gets the total fractional cycles
     */
    public function getTotalFractionalCycles(): float|array|null
    {
        return $this->getFieldValue(142);
    }

    /**
     * Gets the avg stance time percent
     */
    public function getAvgStanceTimePercent(): float|array|null
    {
        return $this->getFieldValue(144);
    }

    /**
     * Gets the total anaerobic training effect
     */
    public function getTotalAnaerobicTrainingEffect(): float|array|null
    {
        return $this->getFieldValue(168);
    }

    /**
     * Gets the front gear shift count
     */
    public function getFrontGearShiftCount(): int|array|null
    {
        return $this->getFieldValue(169);
    }

    /**
     * Gets the rear gear shift count
     */
    public function getRearGearShiftCount(): int|array|null
    {
        return $this->getFieldValue(170);
    }
}
