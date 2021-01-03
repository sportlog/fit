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
final class SegmentLapMessage extends Message
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

    #[Field('Sport', 23, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
    public ?int $sport;

    #[Field('EventGroup', 24, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $eventGroup;

    #[Field('NecLat', 25, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $necLat;

    #[Field('NecLong', 26, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $necLong;

    #[Field('SwcLat', 27, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $swcLat;

    #[Field('SwcLong', 28, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $swcLong;

    #[Field('Name', 29, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $name;

    #[Field('NormalizedPower', 30, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $normalizedPower;

    #[Field('LeftRightBalance', 31, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE100)]
    public ?int $leftRightBalance;

    #[Field('SubSport', 32, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
    public ?int $subSport;

    #[Field('TotalWork', 33, FitBaseType::UINT32, 1.0, 0.0, 'J', false, ProfileType::UINT32)]
    public ?int $totalWork;

    #[Field('AvgAltitude', 34, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
    public ?int $avgAltitude;

    #[Field('MaxAltitude', 35, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
    public ?int $maxAltitude;

    #[Field('GpsAccuracy', 36, FitBaseType::UINT8, 1.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $gpsAccuracy;

    #[Field('AvgGrade', 37, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $avgGrade;

    #[Field('AvgPosGrade', 38, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $avgPosGrade;

    #[Field('AvgNegGrade', 39, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $avgNegGrade;

    #[Field('MaxPosGrade', 40, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $maxPosGrade;

    #[Field('MaxNegGrade', 41, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $maxNegGrade;

    #[Field('AvgTemperature', 42, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
    public ?int $avgTemperature;

    #[Field('MaxTemperature', 43, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
    public ?int $maxTemperature;

    #[Field('TotalMovingTime', 44, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $totalMovingTime;

    #[Field('AvgPosVerticalSpeed', 45, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $avgPosVerticalSpeed;

    #[Field('AvgNegVerticalSpeed', 46, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $avgNegVerticalSpeed;

    #[Field('MaxPosVerticalSpeed', 47, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $maxPosVerticalSpeed;

    #[Field('MaxNegVerticalSpeed', 48, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $maxNegVerticalSpeed;

    #[Field('TimeInHrZone', 49, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInHrZone;

    #[Field('TimeInSpeedZone', 50, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInSpeedZone;

    #[Field('TimeInCadenceZone', 51, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInCadenceZone;

    #[Field('TimeInPowerZone', 52, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeInPowerZone;

    #[Field('RepetitionNum', 53, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $repetitionNum;

    #[Field('MinAltitude', 54, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
    public ?int $minAltitude;

    #[Field('MinHeartRate', 55, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $minHeartRate;

    #[Field('ActiveTime', 56, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $activeTime;

    #[Field('WktStepIndex', 57, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $wktStepIndex;

    #[Field('SportEvent', 58, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORTEVENT)]
    public ?int $sportEvent;

    #[Field('AvgLeftTorqueEffectiveness', 59, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgLeftTorqueEffectiveness;

    #[Field('AvgRightTorqueEffectiveness', 60, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgRightTorqueEffectiveness;

    #[Field('AvgLeftPedalSmoothness', 61, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgLeftPedalSmoothness;

    #[Field('AvgRightPedalSmoothness', 62, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgRightPedalSmoothness;

    #[Field('AvgCombinedPedalSmoothness', 63, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $avgCombinedPedalSmoothness;

    #[Field('Status', 64, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTLAPSTATUS)]
    public ?int $status;

    #[Field('Uuid', 65, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $uuid;

    #[Field('AvgFractionalCadence', 66, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $avgFractionalCadence;

    #[Field('MaxFractionalCadence', 67, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $maxFractionalCadence;

    #[Field('TotalFractionalCycles', 68, FitBaseType::UINT8, 128.0, 0.0, 'cycles', false, ProfileType::UINT8)]
    public ?int $totalFractionalCycles;

    #[Field('FrontGearShiftCount', 69, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $frontGearShiftCount;

    #[Field('RearGearShiftCount', 70, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $rearGearShiftCount;

    #[Field('TimeStanding', 71, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeStanding;

    #[Field('StandCount', 72, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $standCount;

    #[Field('AvgLeftPco', 73, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
    public ?int $avgLeftPco;

    #[Field('AvgRightPco', 74, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
    public ?int $avgRightPco;

    #[Field('AvgLeftPowerPhase', 75, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgLeftPowerPhase;

    #[Field('AvgLeftPowerPhasePeak', 76, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgLeftPowerPhasePeak;

    #[Field('AvgRightPowerPhase', 77, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgRightPowerPhase;

    #[Field('AvgRightPowerPhasePeak', 78, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $avgRightPowerPhasePeak;

    #[Field('AvgPowerPosition', 79, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $avgPowerPosition;

    #[Field('MaxPowerPosition', 80, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $maxPowerPosition;

    #[Field('AvgCadencePosition', 81, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $avgCadencePosition;

    #[Field('MaxCadencePosition', 82, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $maxCadencePosition;

    #[Field('Manufacturer', 83, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER)]
    public ?int $manufacturer;

    #[Field('TotalGrit', 84, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
    public ?float $totalGrit;

    #[Field('TotalFlow', 85, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
    public ?float $totalFlow;

    #[Field('AvgGrit', 86, FitBaseType::FLOAT32, 1.0, 0.0, 'kGrit', false, ProfileType::FLOAT32)]
    public ?float $avgGrit;

    #[Field('AvgFlow', 87, FitBaseType::FLOAT32, 1.0, 0.0, 'Flow', false, ProfileType::FLOAT32)]
    public ?float $avgFlow;

    #[Field('TotalFractionalAscent', 89, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $totalFractionalAscent;

    #[Field('TotalFractionalDescent', 90, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $totalFractionalDescent;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SegmentLap", MessageNumber::SegmentLap);
    }
}
