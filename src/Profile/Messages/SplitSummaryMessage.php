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
 * SplitSummaryMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('SplitType', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPLITTYPE)]
#[Field('Sport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('SubSport', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('NumSplits', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('TotalTimerTime', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalDistance', 5, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('AvgSpeed', 6, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('MaxSpeed', 7, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('TotalAscent', 8, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('TotalDescent', 9, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('AvgHeartRate', 10, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('MaxHeartRate', 11, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('AvgVertSpeed', 12, FitBaseType::SINT32, 1000.0, 0.0, 'm/s', false, ProfileType::SINT32)]
#[Field('TotalCalories', 13, FitBaseType::UINT32, 1.0, 0.0, 'kcal', false, ProfileType::UINT32)]
#[Field('AvgCadence', 14, FitBaseType::UINT16, 128.0, 0.0, 'rpm', false, ProfileType::UINT16)]
#[Field('MaxCadence', 15, FitBaseType::UINT16, 128.0, 0.0, 'rpm', false, ProfileType::UINT16)]
#[Field('TotalCycles', 16, FitBaseType::UINT32, 1.0, 0.0, 'cycles', false, ProfileType::UINT32)]
#[Field('AvgTemperature', 17, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('MaxTemperature', 18, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('MinTemperature', 19, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('AvgVerticalOscillation', 20, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
#[Field('AvgVerticalRatio', 21, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('AvgStanceTime', 22, FitBaseType::UINT16, 10.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('AvgStanceTimeBalance', 23, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('AvgStepLength', 24, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
#[Field('AvgPower', 25, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('MaxPower', 26, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('NormalizedPower', 27, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('LeftRightBalance', 28, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE100)]
#[Field('TimeStanding', 29, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('AvgLeftPco', 30, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('AvgRightPco', 31, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('AvgLeftPowerPhase', 32, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgLeftPowerPhasePeak', 33, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgRightPowerPhase', 34, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgRightPowerPhasePeak', 35, FitBaseType::UINT8, 0.7111111, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('AvgPowerPosition', 36, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('MaxPowerPosition', 37, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('AvgLeftTorqueEffectiveness', 38, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgRightTorqueEffectiveness', 39, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgLeftPedalSmoothness', 40, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgRightPedalSmoothness', 41, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgCombinedPedalSmoothness', 42, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('AvgFlow', 43, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
#[Field('TotalGrit', 44, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
#[Field('SwimStroke', 47, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SWIMSTROKE)]
#[Field('NumActiveLengths', 48, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16)]
#[Field('AvgSwolf', 49, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('AvgStrokeDistance', 50, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('AvgStrokesPerLength', 51, FitBaseType::UINT16, 10.0, 0.0, 'strokes / length', false, ProfileType::UINT16)]
#[Field('AvgAscent', 52, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('MaxAscent', 53, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('ClimbGradingScale', 54, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CLIMBGRADINGSCALE)]
#[Field('ClimbMaxGradeValue', 55, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('NumFalls', 56, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('NumClimbsAttempted', 58, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('NumClimbsCompleted', 59, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('MaxDistance', 60, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('MetabolicCalories', 64, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('ActiveTime', 65, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalFractionalAscent', 66, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('TotalFractionalDescent', 67, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('AvgFractionalAscent', 68, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('MaxFractionalAscent', 69, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('AvgGradeAdjustedSpeed', 71, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('AvgStress', 72, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('TotalMovingTime', 77, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('StartTime', 79, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('MinHeartRate', 87, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('AvgStanceTimePercent', 91, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('MaxTotalTimerTime', 101, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
final class SplitSummaryMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SplitSummary', MesgNum::SPLIT_SUMMARY);
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
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the num splits
     */
    public function getNumSplits(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the total timer time
     */
    public function getTotalTimerTime(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the total distance
     */
    public function getTotalDistance(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the avg speed
     */
    public function getAvgSpeed(): float|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the max speed
     */
    public function getMaxSpeed(): float|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the total ascent
     */
    public function getTotalAscent(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the total descent
     */
    public function getTotalDescent(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the avg heart rate
     */
    public function getAvgHeartRate(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the max heart rate
     */
    public function getMaxHeartRate(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the avg vert speed
     */
    public function getAvgVertSpeed(): float|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the total calories
     */
    public function getTotalCalories(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the avg cadence
     */
    public function getAvgCadence(): float|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the max cadence
     */
    public function getMaxCadence(): float|array|null
    {
        return $this->getFieldValue(15);
    }

    /**
     * Gets the total cycles
     */
    public function getTotalCycles(): int|array|null
    {
        return $this->getFieldValue(16);
    }

    /**
     * Gets the avg temperature
     */
    public function getAvgTemperature(): int|array|null
    {
        return $this->getFieldValue(17);
    }

    /**
     * Gets the max temperature
     */
    public function getMaxTemperature(): int|array|null
    {
        return $this->getFieldValue(18);
    }

    /**
     * Gets the min temperature
     */
    public function getMinTemperature(): int|array|null
    {
        return $this->getFieldValue(19);
    }

    /**
     * Gets the avg vertical oscillation
     */
    public function getAvgVerticalOscillation(): float|array|null
    {
        return $this->getFieldValue(20);
    }

    /**
     * Gets the avg vertical ratio
     */
    public function getAvgVerticalRatio(): float|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the avg stance time
     */
    public function getAvgStanceTime(): float|array|null
    {
        return $this->getFieldValue(22);
    }

    /**
     * Gets the avg stance time balance
     */
    public function getAvgStanceTimeBalance(): float|array|null
    {
        return $this->getFieldValue(23);
    }

    /**
     * Gets the avg step length
     */
    public function getAvgStepLength(): float|array|null
    {
        return $this->getFieldValue(24);
    }

    /**
     * Gets the avg power
     */
    public function getAvgPower(): int|array|null
    {
        return $this->getFieldValue(25);
    }

    /**
     * Gets the max power
     */
    public function getMaxPower(): int|array|null
    {
        return $this->getFieldValue(26);
    }

    /**
     * Gets the normalized power
     */
    public function getNormalizedPower(): int|array|null
    {
        return $this->getFieldValue(27);
    }

    /**
     * Gets the left right balance
     */
    public function getLeftRightBalance(): int|array|null
    {
        return $this->getFieldValue(28);
    }

    /**
     * Gets the time standing
     */
    public function getTimeStanding(): float|array|null
    {
        return $this->getFieldValue(29);
    }

    /**
     * Gets the avg left pco
     */
    public function getAvgLeftPco(): int|array|null
    {
        return $this->getFieldValue(30);
    }

    /**
     * Gets the avg right pco
     */
    public function getAvgRightPco(): int|array|null
    {
        return $this->getFieldValue(31);
    }

    /**
     * Gets the avg left power phase
     */
    public function getAvgLeftPowerPhase(): float|array|null
    {
        return $this->getFieldValue(32);
    }

    /**
     * Gets the avg left power phase peak
     */
    public function getAvgLeftPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(33);
    }

    /**
     * Gets the avg right power phase
     */
    public function getAvgRightPowerPhase(): float|array|null
    {
        return $this->getFieldValue(34);
    }

    /**
     * Gets the avg right power phase peak
     */
    public function getAvgRightPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(35);
    }

    /**
     * Gets the avg power position
     */
    public function getAvgPowerPosition(): int|array|null
    {
        return $this->getFieldValue(36);
    }

    /**
     * Gets the max power position
     */
    public function getMaxPowerPosition(): int|array|null
    {
        return $this->getFieldValue(37);
    }

    /**
     * Gets the avg left torque effectiveness
     */
    public function getAvgLeftTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(38);
    }

    /**
     * Gets the avg right torque effectiveness
     */
    public function getAvgRightTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(39);
    }

    /**
     * Gets the avg left pedal smoothness
     */
    public function getAvgLeftPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(40);
    }

    /**
     * Gets the avg right pedal smoothness
     */
    public function getAvgRightPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(41);
    }

    /**
     * Gets the avg combined pedal smoothness
     */
    public function getAvgCombinedPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(42);
    }

    /**
     * Gets the avg flow
     */
    public function getAvgFlow(): float|array|null
    {
        return $this->getFieldValue(43);
    }

    /**
     * Gets the total grit
     */
    public function getTotalGrit(): float|array|null
    {
        return $this->getFieldValue(44);
    }

    /**
     * Gets the swim stroke
     */
    public function getSwimStroke(): int|array|null
    {
        return $this->getFieldValue(47);
    }

    /**
     * Gets the num active lengths
     */
    public function getNumActiveLengths(): int|array|null
    {
        return $this->getFieldValue(48);
    }

    /**
     * Gets the avg swolf
     */
    public function getAvgSwolf(): int|array|null
    {
        return $this->getFieldValue(49);
    }

    /**
     * Gets the avg stroke distance
     */
    public function getAvgStrokeDistance(): float|array|null
    {
        return $this->getFieldValue(50);
    }

    /**
     * Gets the avg strokes per length
     */
    public function getAvgStrokesPerLength(): float|array|null
    {
        return $this->getFieldValue(51);
    }

    /**
     * Gets the avg ascent
     */
    public function getAvgAscent(): int|array|null
    {
        return $this->getFieldValue(52);
    }

    /**
     * Gets the max ascent
     */
    public function getMaxAscent(): int|array|null
    {
        return $this->getFieldValue(53);
    }

    /**
     * Gets the climb grading scale
     */
    public function getClimbGradingScale(): int|array|null
    {
        return $this->getFieldValue(54);
    }

    /**
     * Gets the climb max grade value
     */
    public function getClimbMaxGradeValue(): int|array|null
    {
        return $this->getFieldValue(55);
    }

    /**
     * Gets the num falls
     */
    public function getNumFalls(): int|array|null
    {
        return $this->getFieldValue(56);
    }

    /**
     * Gets the num climbs attempted
     */
    public function getNumClimbsAttempted(): int|array|null
    {
        return $this->getFieldValue(58);
    }

    /**
     * Gets the num climbs completed
     */
    public function getNumClimbsCompleted(): int|array|null
    {
        return $this->getFieldValue(59);
    }

    /**
     * Gets the max distance
     */
    public function getMaxDistance(): float|array|null
    {
        return $this->getFieldValue(60);
    }

    /**
     * Gets the metabolic calories
     */
    public function getMetabolicCalories(): int|array|null
    {
        return $this->getFieldValue(64);
    }

    /**
     * Gets the active time
     */
    public function getActiveTime(): float|array|null
    {
        return $this->getFieldValue(65);
    }

    /**
     * Gets the total fractional ascent
     */
    public function getTotalFractionalAscent(): float|array|null
    {
        return $this->getFieldValue(66);
    }

    /**
     * Gets the total fractional descent
     */
    public function getTotalFractionalDescent(): float|array|null
    {
        return $this->getFieldValue(67);
    }

    /**
     * Gets the avg fractional ascent
     */
    public function getAvgFractionalAscent(): float|array|null
    {
        return $this->getFieldValue(68);
    }

    /**
     * Gets the max fractional ascent
     */
    public function getMaxFractionalAscent(): float|array|null
    {
        return $this->getFieldValue(69);
    }

    /**
     * Gets the avg grade adjusted speed
     */
    public function getAvgGradeAdjustedSpeed(): float|array|null
    {
        return $this->getFieldValue(71);
    }

    /**
     * Gets the avg stress
     */
    public function getAvgStress(): int|array|null
    {
        return $this->getFieldValue(72);
    }

    /**
     * Gets the total moving time
     */
    public function getTotalMovingTime(): float|array|null
    {
        return $this->getFieldValue(77);
    }

    /**
     * Gets the start time
     */
    public function getStartTime(): DateTime|null
    {
        return $this->getFieldValue(79);
    }

    /**
     * Gets the min heart rate
     */
    public function getMinHeartRate(): int|array|null
    {
        return $this->getFieldValue(87);
    }

    /**
     * Gets the avg stance time percent
     */
    public function getAvgStanceTimePercent(): float|array|null
    {
        return $this->getFieldValue(91);
    }

    /**
     * Gets the max total timer time
     */
    public function getMaxTotalTimerTime(): float|array|null
    {
        return $this->getFieldValue(101);
    }
}
