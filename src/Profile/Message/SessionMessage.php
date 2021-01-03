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

    #[Field('Sport', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
    public ?int $sport;

    #[Field('SubSport', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
    public ?int $subSport;

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

    #[Field('TotalFatCalories', 13, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
    public ?int $totalFatCalories;

    #[Field('AvgSpeed', 14, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $avgSpeed;

    #[Field('MaxSpeed', 15, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $maxSpeed;

    #[Field('AvgHeartRate', 16, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $avgHeartRate;

    #[Field('MaxHeartRate', 17, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $maxHeartRate;

    #[Field('AvgCadence', 18, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $avgCadence;

    #[Field('MaxCadence', 19, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $maxCadence;

    #[Field('AvgPower', 20, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $avgPower;

    #[Field('MaxPower', 21, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $maxPower;

    #[Field('TotalAscent', 22, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $totalAscent;

    #[Field('TotalDescent', 23, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $totalDescent;

    #[Field('TotalTrainingEffect', 24, FitBaseType::UINT8, 10.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $totalTrainingEffect;

    #[Field('FirstLapIndex', 25, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $firstLapIndex;

    #[Field('NumLaps', 26, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $numLaps;

    #[Field('EventGroup', 27, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $eventGroup;

    #[Field('Trigger', 28, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SESSIONTRIGGER)]
    public ?int $trigger;

    #[Field('NecLat', 29, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $necLat;

    #[Field('NecLong', 30, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $necLong;

    #[Field('SwcLat', 31, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $swcLat;

    #[Field('SwcLong', 32, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $swcLong;

    #[Field('NumLengths', 33, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16)]
    public ?int $numLengths;

    #[Field('NormalizedPower', 34, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $normalizedPower;

    #[Field('TrainingStressScore', 35, FitBaseType::UINT16, 10.0, 0.0, 'tss', false, ProfileType::UINT16)]
    public ?int $trainingStressScore;

    #[Field('IntensityFactor', 36, FitBaseType::UINT16, 1000.0, 0.0, 'if', false, ProfileType::UINT16)]
    public ?int $intensityFactor;

    #[Field('LeftRightBalance', 37, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE100)]
    public ?int $leftRightBalance;

    #[Field('AvgStrokeCount', 41, FitBaseType::UINT32, 10.0, 0.0, 'strokes/lap', false, ProfileType::UINT32)]
    public ?int $avgStrokeCount;

    #[Field('AvgStrokeDistance', 42, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $avgStrokeDistance;

    #[Field('SwimStroke', 43, FitBaseType::ENUM, 1.0, 0.0, 'swim_stroke', false, ProfileType::SWIMSTROKE)]
    public ?int $swimStroke;

    #[Field('PoolLength', 44, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $poolLength;

    #[Field('ThresholdPower', 45, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $thresholdPower;

    #[Field('PoolLengthUnit', 46, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
    public ?int $poolLengthUnit;

    #[Field('NumActiveLengths', 47, FitBaseType::UINT16, 1.0, 0.0, 'lengths', false, ProfileType::UINT16)]
    public ?int $numActiveLengths;

    #[Field('TotalWork', 48, FitBaseType::UINT32, 1.0, 0.0, 'J', false, ProfileType::UINT32)]
    public ?int $totalWork;

    #[Field('AvgAltitude', 49, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
    public ?int $avgAltitude;

    #[Field('MaxAltitude', 50, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
    public ?int $maxAltitude;

    #[Field('GpsAccuracy', 51, FitBaseType::UINT8, 1.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $gpsAccuracy;

    #[Field('AvgGrade', 52, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $avgGrade;

    #[Field('AvgPosGrade', 53, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $avgPosGrade;

    #[Field('AvgNegGrade', 54, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $avgNegGrade;

    #[Field('MaxPosGrade', 55, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $maxPosGrade;

    #[Field('MaxNegGrade', 56, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $maxNegGrade;

    #[Field('AvgTemperature', 57, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
    public ?int $avgTemperature;

    #[Field('MaxTemperature', 58, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
    public ?int $maxTemperature;

    #[Field('TotalMovingTime', 59, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $totalMovingTime;

    #[Field('AvgPosVerticalSpeed', 60, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $avgPosVerticalSpeed;

    #[Field('AvgNegVerticalSpeed', 61, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $avgNegVerticalSpeed;

    #[Field('MaxPosVerticalSpeed', 62, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $maxPosVerticalSpeed;

    #[Field('MaxNegVerticalSpeed', 63, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $maxNegVerticalSpeed;

    #[Field('MinHeartRate', 64, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $minHeartRate;

    #[Field('TimeInHrZone', 65, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInHrZone;

    #[Field('TimeInSpeedZone', 66, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInSpeedZone;

    #[Field('TimeInCadenceZone', 67, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInCadenceZone;

    #[Field('TimeInPowerZone', 68, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInPowerZone;

    #[Field('AvgLapTime', 69, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $avgLapTime;

    #[Field('BestLapIndex', 70, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $bestLapIndex;

    #[Field('MinAltitude', 71, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
    public ?int $minAltitude;

    #[Field('PlayerScore', 82, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $playerScore;

    #[Field('OpponentScore', 83, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $opponentScore;

    #[Field('OpponentName', 84, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $opponentName;

    #[Field('StrokeCount', 85, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $strokeCount;

    #[Field('ZoneCount', 86, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $zoneCount;

    #[Field('MaxBallSpeed', 87, FitBaseType::UINT16, 100.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $maxBallSpeed;

    #[Field('AvgBallSpeed', 88, FitBaseType::UINT16, 100.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $avgBallSpeed;

    #[Field('AvgVerticalOscillation', 89, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
    public ?int $avgVerticalOscillation;

    #[Field('AvgStanceTimePercent', 90, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $avgStanceTimePercent;

    #[Field('AvgStanceTime', 91, FitBaseType::UINT16, 10.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $avgStanceTime;

    #[Field('AvgFractionalCadence', 92, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $avgFractionalCadence;

    #[Field('MaxFractionalCadence', 93, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $maxFractionalCadence;

    #[Field('TotalFractionalCycles', 94, FitBaseType::UINT8, 128.0, 0.0, 'cycles', false, ProfileType::UINT8)]
    public ?int $totalFractionalCycles;

    #[Field('AvgTotalHemoglobinConc', 95, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
    public ?int $avgTotalHemoglobinConc;

    #[Field('MinTotalHemoglobinConc', 96, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
    public ?int $minTotalHemoglobinConc;

    #[Field('MaxTotalHemoglobinConc', 97, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
    public ?int $maxTotalHemoglobinConc;

    #[Field('AvgSaturatedHemoglobinPercent', 98, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $avgSaturatedHemoglobinPercent;

    #[Field('MinSaturatedHemoglobinPercent', 99, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $minSaturatedHemoglobinPercent;

    #[Field('MaxSaturatedHemoglobinPercent', 100, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $maxSaturatedHemoglobinPercent;

    #[Field('AvgLeftTorqueEffectiveness', 101, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgLeftTorqueEffectiveness;

    #[Field('AvgRightTorqueEffectiveness', 102, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgRightTorqueEffectiveness;

    #[Field('AvgLeftPedalSmoothness', 103, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgLeftPedalSmoothness;

    #[Field('AvgRightPedalSmoothness', 104, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgRightPedalSmoothness;

    #[Field('AvgCombinedPedalSmoothness', 105, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgCombinedPedalSmoothness;

    #[Field('SportIndex', 111, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $sportIndex;

    #[Field('TimeStanding', 112, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeStanding;

    #[Field('StandCount', 113, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $standCount;

    #[Field('AvgLeftPco', 114, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
    public ?int $avgLeftPco;

    #[Field('AvgRightPco', 115, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
    public ?int $avgRightPco;

    #[Field('AvgLeftPowerPhase', 116, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgLeftPowerPhase;

    #[Field('AvgLeftPowerPhasePeak', 117, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgLeftPowerPhasePeak;

    #[Field('AvgRightPowerPhase', 118, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgRightPowerPhase;

    #[Field('AvgRightPowerPhasePeak', 119, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgRightPowerPhasePeak;

    #[Field('AvgPowerPosition', 120, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $avgPowerPosition;

    #[Field('MaxPowerPosition', 121, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $maxPowerPosition;

    #[Field('AvgCadencePosition', 122, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $avgCadencePosition;

    #[Field('MaxCadencePosition', 123, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $maxCadencePosition;

    #[Field('EnhancedAvgSpeed', 124, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
    public ?int $enhancedAvgSpeed;

    #[Field('EnhancedMaxSpeed', 125, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
    public ?int $enhancedMaxSpeed;

    #[Field('EnhancedAvgAltitude', 126, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
    public ?int $enhancedAvgAltitude;

    #[Field('EnhancedMinAltitude', 127, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
    public ?int $enhancedMinAltitude;

    #[Field('EnhancedMaxAltitude', 128, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
    public ?int $enhancedMaxAltitude;

    #[Field('AvgLevMotorPower', 129, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $avgLevMotorPower;

    #[Field('MaxLevMotorPower', 130, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $maxLevMotorPower;

    #[Field('LevBatteryConsumption', 131, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $levBatteryConsumption;

    #[Field('AvgVerticalRatio', 132, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $avgVerticalRatio;

    #[Field('AvgStanceTimeBalance', 133, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $avgStanceTimeBalance;

    #[Field('AvgStepLength', 134, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
    public ?int $avgStepLength;

    #[Field('TotalAnaerobicTrainingEffect', 137, FitBaseType::UINT8, 10.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $totalAnaerobicTrainingEffect;

    #[Field('AvgVam', 139, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $avgVam;

    #[Field('TotalGrit', 181, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
    public ?float $totalGrit;

    #[Field('TotalFlow', 182, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
    public ?float $totalFlow;

    #[Field('JumpCount', 183, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $jumpCount;

    #[Field('AvgGrit', 186, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
    public ?float $avgGrit;

    #[Field('AvgFlow', 187, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
    public ?float $avgFlow;

    #[Field('TotalFractionalAscent', 199, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $totalFractionalAscent;

    #[Field('TotalFractionalDescent', 200, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $totalFractionalDescent;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Session", MessageNumber::Session);
    }
}
