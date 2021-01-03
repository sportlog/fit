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
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT)]
    public ?int $event;

    #[Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE)]
    public ?int $eventType;

    #[Field('StartTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $startTime;

    #[Field('StartPositionLat', 3, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $startPositionLat;

    #[Field('StartPositionLong', 4, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $startPositionLong;

    #[Field('EndPositionLat', 5, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $endPositionLat;

    #[Field('EndPositionLong', 6, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $endPositionLong;

    #[Field('TotalElapsedTime', 7, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $totalElapsedTime;

    #[Field('TotalTimerTime', 8, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $totalTimerTime;

    #[Field('TotalDistance', 9, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $totalDistance;

    #[Field('TotalCycles', 10, FitBaseType::UINT32, 1.0, 0.0, 'cycles', false, ProfileType::UINT32)]
    public ?int $totalCycles;

    #[Field('TotalCalories', 11, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
    public ?int $totalCalories;

    #[Field('TotalFatCalories', 12, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
    public ?int $totalFatCalories;

    #[Field('AvgSpeed', 13, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $avgSpeed;

    #[Field('MaxSpeed', 14, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $maxSpeed;

    #[Field('AvgHeartRate', 15, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $avgHeartRate;

    #[Field('MaxHeartRate', 16, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $maxHeartRate;

    #[Field('AvgCadence', 17, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $avgCadence;

    #[Field('MaxCadence', 18, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $maxCadence;

    #[Field('AvgPower', 19, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $avgPower;

    #[Field('MaxPower', 20, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $maxPower;

    #[Field('TotalAscent', 21, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $totalAscent;

    #[Field('TotalDescent', 22, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $totalDescent;

    #[Field('Intensity', 23, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::INTENSITY)]
    public ?int $intensity;

    #[Field('LapTrigger', 24, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::LAPTRIGGER)]
    public ?int $lapTrigger;

    #[Field('Sport', 25, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
    public ?int $sport;

    #[Field('EventGroup', 26, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $eventGroup;

    #[Field('NumLengths', 32, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16)]
    public ?int $numLengths;

    #[Field('NormalizedPower', 33, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $normalizedPower;

    #[Field('LeftRightBalance', 34, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE100)]
    public ?int $leftRightBalance;

    #[Field('FirstLengthIndex', 35, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $firstLengthIndex;

    #[Field('AvgStrokeDistance', 37, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $avgStrokeDistance;

    #[Field('SwimStroke', 38, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SWIMSTROKE)]
    public ?int $swimStroke;

    #[Field('SubSport', 39, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
    public ?int $subSport;

    #[Field('NumActiveLengths', 40, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16)]
    public ?int $numActiveLengths;

    #[Field('TotalWork', 41, FitBaseType::UINT32, 1.0, 0.0, 'J', false, ProfileType::UINT32)]
    public ?int $totalWork;

    #[Field('AvgAltitude', 42, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
    public ?int $avgAltitude;

    #[Field('MaxAltitude', 43, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
    public ?int $maxAltitude;

    #[Field('GpsAccuracy', 44, FitBaseType::UINT8, 1.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $gpsAccuracy;

    #[Field('AvgGrade', 45, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $avgGrade;

    #[Field('AvgPosGrade', 46, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $avgPosGrade;

    #[Field('AvgNegGrade', 47, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $avgNegGrade;

    #[Field('MaxPosGrade', 48, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $maxPosGrade;

    #[Field('MaxNegGrade', 49, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $maxNegGrade;

    #[Field('AvgTemperature', 50, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
    public ?int $avgTemperature;

    #[Field('MaxTemperature', 51, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
    public ?int $maxTemperature;

    #[Field('TotalMovingTime', 52, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $totalMovingTime;

    #[Field('AvgPosVerticalSpeed', 53, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $avgPosVerticalSpeed;

    #[Field('AvgNegVerticalSpeed', 54, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $avgNegVerticalSpeed;

    #[Field('MaxPosVerticalSpeed', 55, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $maxPosVerticalSpeed;

    #[Field('MaxNegVerticalSpeed', 56, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $maxNegVerticalSpeed;

    #[Field('TimeInHrZone', 57, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInHrZone;

    #[Field('TimeInSpeedZone', 58, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInSpeedZone;

    #[Field('TimeInCadenceZone', 59, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInCadenceZone;

    #[Field('TimeInPowerZone', 60, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInPowerZone;

    #[Field('RepetitionNum', 61, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $repetitionNum;

    #[Field('MinAltitude', 62, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
    public ?int $minAltitude;

    #[Field('MinHeartRate', 63, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $minHeartRate;

    #[Field('WktStepIndex', 71, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $wktStepIndex;

    #[Field('OpponentScore', 74, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $opponentScore;

    #[Field('StrokeCount', 75, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $strokeCount;

    #[Field('ZoneCount', 76, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $zoneCount;

    #[Field('AvgVerticalOscillation', 77, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
    public ?int $avgVerticalOscillation;

    #[Field('AvgStanceTimePercent', 78, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $avgStanceTimePercent;

    #[Field('AvgStanceTime', 79, FitBaseType::UINT16, 10.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $avgStanceTime;

    #[Field('AvgFractionalCadence', 80, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $avgFractionalCadence;

    #[Field('MaxFractionalCadence', 81, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $maxFractionalCadence;

    #[Field('TotalFractionalCycles', 82, FitBaseType::UINT8, 128.0, 0.0, 'cycles', false, ProfileType::UINT8)]
    public ?int $totalFractionalCycles;

    #[Field('PlayerScore', 83, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $playerScore;

    #[Field('AvgTotalHemoglobinConc', 84, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
    public ?int $avgTotalHemoglobinConc;

    #[Field('MinTotalHemoglobinConc', 85, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
    public ?int $minTotalHemoglobinConc;

    #[Field('MaxTotalHemoglobinConc', 86, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
    public ?int $maxTotalHemoglobinConc;

    #[Field('AvgSaturatedHemoglobinPercent', 87, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $avgSaturatedHemoglobinPercent;

    #[Field('MinSaturatedHemoglobinPercent', 88, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $minSaturatedHemoglobinPercent;

    #[Field('MaxSaturatedHemoglobinPercent', 89, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $maxSaturatedHemoglobinPercent;

    #[Field('AvgLeftTorqueEffectiveness', 91, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgLeftTorqueEffectiveness;

    #[Field('AvgRightTorqueEffectiveness', 92, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgRightTorqueEffectiveness;

    #[Field('AvgLeftPedalSmoothness', 93, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgLeftPedalSmoothness;

    #[Field('AvgRightPedalSmoothness', 94, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgRightPedalSmoothness;

    #[Field('AvgCombinedPedalSmoothness', 95, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgCombinedPedalSmoothness;

    #[Field('TimeStanding', 98, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeStanding;

    #[Field('StandCount', 99, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $standCount;

    #[Field('AvgLeftPco', 100, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
    public ?int $avgLeftPco;

    #[Field('AvgRightPco', 101, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
    public ?int $avgRightPco;

    #[Field('AvgLeftPowerPhase', 102, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgLeftPowerPhase;

    #[Field('AvgLeftPowerPhasePeak', 103, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgLeftPowerPhasePeak;

    #[Field('AvgRightPowerPhase', 104, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgRightPowerPhase;

    #[Field('AvgRightPowerPhasePeak', 105, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgRightPowerPhasePeak;

    #[Field('AvgPowerPosition', 106, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $avgPowerPosition;

    #[Field('MaxPowerPosition', 107, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $maxPowerPosition;

    #[Field('AvgCadencePosition', 108, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $avgCadencePosition;

    #[Field('MaxCadencePosition', 109, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $maxCadencePosition;

    #[Field('EnhancedAvgSpeed', 110, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
    public ?int $enhancedAvgSpeed;

    #[Field('EnhancedMaxSpeed', 111, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
    public ?int $enhancedMaxSpeed;

    #[Field('EnhancedAvgAltitude', 112, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
    public ?int $enhancedAvgAltitude;

    #[Field('EnhancedMinAltitude', 113, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
    public ?int $enhancedMinAltitude;

    #[Field('EnhancedMaxAltitude', 114, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
    public ?int $enhancedMaxAltitude;

    #[Field('AvgLevMotorPower', 115, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $avgLevMotorPower;

    #[Field('MaxLevMotorPower', 116, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $maxLevMotorPower;

    #[Field('LevBatteryConsumption', 117, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $levBatteryConsumption;

    #[Field('AvgVerticalRatio', 118, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $avgVerticalRatio;

    #[Field('AvgStanceTimeBalance', 119, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $avgStanceTimeBalance;

    #[Field('AvgStepLength', 120, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
    public ?int $avgStepLength;

    #[Field('AvgVam', 121, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $avgVam;

    #[Field('TotalGrit', 149, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
    public ?float $totalGrit;

    #[Field('TotalFlow', 150, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
    public ?float $totalFlow;

    #[Field('JumpCount', 151, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $jumpCount;

    #[Field('AvgGrit', 153, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
    public ?float $avgGrit;

    #[Field('AvgFlow', 154, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
    public ?float $avgFlow;

    #[Field('TotalFractionalAscent', 156, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $totalFractionalAscent;

    #[Field('TotalFractionalDescent', 157, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $totalFractionalDescent;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Lap", MessageNumber::Lap);
    }
}
