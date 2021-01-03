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
 * RecordMessage message
 */
final class RecordMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('PositionLat', 0, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $positionLat;

    #[Field('PositionLong', 1, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $positionLong;

    #[Field('Altitude', 2, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
    public ?int $altitude;

    #[Field('HeartRate', 3, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $heartRate;

    #[Field('Cadence', 4, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $cadence;

    #[Field('Distance', 5, FitBaseType::UINT32, 100.0, 0.0, 'm', true, ProfileType::UINT32)]
    public ?int $distance;

    #[Field('Speed', 6, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $speed;

    #[Field('Power', 7, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $power;

    #[Field('CompressedSpeedDistance', 8, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $compressedSpeedDistance;

    #[Field('Grade', 9, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
    public ?int $grade;

    #[Field('Resistance', 10, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $resistance;

    #[Field('TimeFromCourse', 11, FitBaseType::SINT32, 1000.0, 0.0, 's', false, ProfileType::SINT32)]
    public ?int $timeFromCourse;

    #[Field('CycleLength', 12, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $cycleLength;

    #[Field('Temperature', 13, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
    public ?int $temperature;

    #[Field('Speed1s', 17, FitBaseType::UINT8, 16.0, 0.0, 'm/s', false, ProfileType::UINT8)]
    public ?int $speed1s;

    #[Field('Cycles', 18, FitBaseType::UINT8, 1.0, 0.0, 'cycles', false, ProfileType::UINT8)]
    public ?int $cycles;

    #[Field('TotalCycles', 19, FitBaseType::UINT32, 1.0, 0.0, 'cycles', true, ProfileType::UINT32)]
    public ?int $totalCycles;

    #[Field('CompressedAccumulatedPower', 28, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $compressedAccumulatedPower;

    #[Field('AccumulatedPower', 29, FitBaseType::UINT32, 1.0, 0.0, 'watts', true, ProfileType::UINT32)]
    public ?int $accumulatedPower;

    #[Field('LeftRightBalance', 30, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE)]
    public ?int $leftRightBalance;

    #[Field('GpsAccuracy', 31, FitBaseType::UINT8, 1.0, 0.0, 'm', false, ProfileType::UINT8)]
    public ?int $gpsAccuracy;

    #[Field('VerticalSpeed', 32, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $verticalSpeed;

    #[Field('Calories', 33, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
    public ?int $calories;

    #[Field('VerticalOscillation', 39, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
    public ?int $verticalOscillation;

    #[Field('StanceTimePercent', 40, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $stanceTimePercent;

    #[Field('StanceTime', 41, FitBaseType::UINT16, 10.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $stanceTime;

    #[Field('ActivityType', 42, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYTYPE)]
    public ?int $activityType;

    #[Field('LeftTorqueEffectiveness', 43, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $leftTorqueEffectiveness;

    #[Field('RightTorqueEffectiveness', 44, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $rightTorqueEffectiveness;

    #[Field('LeftPedalSmoothness', 45, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $leftPedalSmoothness;

    #[Field('RightPedalSmoothness', 46, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $rightPedalSmoothness;

    #[Field('CombinedPedalSmoothness', 47, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $combinedPedalSmoothness;

    #[Field('Time128', 48, FitBaseType::UINT8, 128.0, 0.0, 's', false, ProfileType::UINT8)]
    public ?int $time128;

    #[Field('StrokeType', 49, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::STROKETYPE)]
    public ?int $strokeType;

    #[Field('Zone', 50, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $zone;

    #[Field('BallSpeed', 51, FitBaseType::UINT16, 100.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $ballSpeed;

    #[Field('Cadence256', 52, FitBaseType::UINT16, 256.0, 0.0, 'rpm', false, ProfileType::UINT16)]
    public ?int $cadence256;

    #[Field('FractionalCadence', 53, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $fractionalCadence;

    #[Field('TotalHemoglobinConc', 54, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
    public ?int $totalHemoglobinConc;

    #[Field('TotalHemoglobinConcMin', 55, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
    public ?int $totalHemoglobinConcMin;

    #[Field('TotalHemoglobinConcMax', 56, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
    public ?int $totalHemoglobinConcMax;

    #[Field('SaturatedHemoglobinPercent', 57, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $saturatedHemoglobinPercent;

    #[Field('SaturatedHemoglobinPercentMin', 58, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $saturatedHemoglobinPercentMin;

    #[Field('SaturatedHemoglobinPercentMax', 59, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $saturatedHemoglobinPercentMax;

    #[Field('DeviceIndex', 62, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)]
    public ?int $deviceIndex;

    #[Field('LeftPco', 67, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
    public ?int $leftPco;

    #[Field('RightPco', 68, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
    public ?int $rightPco;

    #[Field('LeftPowerPhase', 69, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $leftPowerPhase;

    #[Field('LeftPowerPhasePeak', 70, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $leftPowerPhasePeak;

    #[Field('RightPowerPhase', 71, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $rightPowerPhase;

    #[Field('RightPowerPhasePeak', 72, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
    public ?int $rightPowerPhasePeak;

    #[Field('EnhancedSpeed', 73, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
    public ?int $enhancedSpeed;

    #[Field('EnhancedAltitude', 78, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
    public ?int $enhancedAltitude;

    #[Field('BatterySoc', 81, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $batterySoc;

    #[Field('MotorPower', 82, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
    public ?int $motorPower;

    #[Field('VerticalRatio', 83, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $verticalRatio;

    #[Field('StanceTimeBalance', 84, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $stanceTimeBalance;

    #[Field('StepLength', 85, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
    public ?int $stepLength;

    #[Field('AbsolutePressure', 91, FitBaseType::UINT32, 1.0, 0.0, 'Pa', false, ProfileType::UINT32)]
    public ?int $absolutePressure;

    #[Field('Depth', 92, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $depth;

    #[Field('NextStopDepth', 93, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $nextStopDepth;

    #[Field('NextStopTime', 94, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $nextStopTime;

    #[Field('TimeToSurface', 95, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timeToSurface;

    #[Field('NdlTime', 96, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $ndlTime;

    #[Field('CnsLoad', 97, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $cnsLoad;

    #[Field('N2Load', 98, FitBaseType::UINT16, 1.0, 0.0, 'percent', false, ProfileType::UINT16)]
    public ?int $n2Load;

    #[Field('Grit', 114, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32)]
    public ?float $grit;

    #[Field('Flow', 115, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32)]
    public ?float $flow;

    #[Field('EbikeTravelRange', 117, FitBaseType::UINT16, 1.0, 0.0, 'km', false, ProfileType::UINT16)]
    public ?int $ebikeTravelRange;

    #[Field('EbikeBatteryLevel', 118, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $ebikeBatteryLevel;

    #[Field('EbikeAssistMode', 119, FitBaseType::UINT8, 1.0, 0.0, 'depends on sensor', false, ProfileType::UINT8)]
    public ?int $ebikeAssistMode;

    #[Field('EbikeAssistLevelPercent', 120, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $ebikeAssistLevelPercent;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Record", MessageNumber::Record);
    }
}
