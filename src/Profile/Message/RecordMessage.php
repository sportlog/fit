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
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('PositionLat', 0, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('PositionLong', 1, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('Altitude', 2, FitBaseType::UINT16, 5.0, 500.0, 'm', false, ProfileType::UINT16)]
#[Field('HeartRate', 3, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('Cadence', 4, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('Distance', 5, FitBaseType::UINT32, 100.0, 0.0, 'm', true, ProfileType::UINT32)]
#[Field('Speed', 6, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('Power', 7, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('CompressedSpeedDistance', 8, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('Grade', 9, FitBaseType::SINT16, 100.0, 0.0, '%', false, ProfileType::SINT16)]
#[Field('Resistance', 10, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('TimeFromCourse', 11, FitBaseType::SINT32, 1000.0, 0.0, 's', false, ProfileType::SINT32)]
#[Field('CycleLength', 12, FitBaseType::UINT8, 100.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('Temperature', 13, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('Speed1s', 17, FitBaseType::UINT8, 16.0, 0.0, 'm/s', false, ProfileType::UINT8)]
#[Field('Cycles', 18, FitBaseType::UINT8, 1.0, 0.0, 'cycles', false, ProfileType::UINT8)]
#[Field('TotalCycles', 19, FitBaseType::UINT32, 1.0, 0.0, 'cycles', true, ProfileType::UINT32)]
#[Field('CompressedAccumulatedPower', 28, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('AccumulatedPower', 29, FitBaseType::UINT32, 1.0, 0.0, 'watts', true, ProfileType::UINT32)]
#[Field('LeftRightBalance', 30, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::LEFTRIGHTBALANCE)]
#[Field('GpsAccuracy', 31, FitBaseType::UINT8, 1.0, 0.0, 'm', false, ProfileType::UINT8)]
#[Field('VerticalSpeed', 32, FitBaseType::SINT16, 1000.0, 0.0, 'm/s', false, ProfileType::SINT16)]
#[Field('Calories', 33, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('VerticalOscillation', 39, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
#[Field('StanceTimePercent', 40, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('StanceTime', 41, FitBaseType::UINT16, 10.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('ActivityType', 42, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYTYPE)]
#[Field('LeftTorqueEffectiveness', 43, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('RightTorqueEffectiveness', 44, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('LeftPedalSmoothness', 45, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('RightPedalSmoothness', 46, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('CombinedPedalSmoothness', 47, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('Time128', 48, FitBaseType::UINT8, 128.0, 0.0, 's', false, ProfileType::UINT8)]
#[Field('StrokeType', 49, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::STROKETYPE)]
#[Field('Zone', 50, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('BallSpeed', 51, FitBaseType::UINT16, 100.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('Cadence256', 52, FitBaseType::UINT16, 256.0, 0.0, 'rpm', false, ProfileType::UINT16)]
#[Field('FractionalCadence', 53, FitBaseType::UINT8, 128.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('TotalHemoglobinConc', 54, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
#[Field('TotalHemoglobinConcMin', 55, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
#[Field('TotalHemoglobinConcMax', 56, FitBaseType::UINT16, 100.0, 0.0, 'g/dL', false, ProfileType::UINT16)]
#[Field('SaturatedHemoglobinPercent', 57, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('SaturatedHemoglobinPercentMin', 58, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('SaturatedHemoglobinPercentMax', 59, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('DeviceIndex', 62, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)]
#[Field('LeftPco', 67, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('RightPco', 68, FitBaseType::SINT8, 1.0, 0.0, 'mm', false, ProfileType::SINT8)]
#[Field('LeftPowerPhase', 69, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('LeftPowerPhasePeak', 70, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('RightPowerPhase', 71, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('RightPowerPhasePeak', 72, FitBaseType::UINT8, 7111111.0, 0.0, 'degrees', false, ProfileType::UINT8)]
#[Field('EnhancedSpeed', 73, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('EnhancedAltitude', 78, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
#[Field('BatterySoc', 81, FitBaseType::UINT8, 2.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('MotorPower', 82, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('VerticalRatio', 83, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('StanceTimeBalance', 84, FitBaseType::UINT16, 100.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('StepLength', 85, FitBaseType::UINT16, 10.0, 0.0, 'mm', false, ProfileType::UINT16)]
#[Field('AbsolutePressure', 91, FitBaseType::UINT32, 1.0, 0.0, 'Pa', false, ProfileType::UINT32)]
#[Field('Depth', 92, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('NextStopDepth', 93, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('NextStopTime', 94, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeToSurface', 95, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('NdlTime', 96, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('CnsLoad', 97, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('N2Load', 98, FitBaseType::UINT16, 1.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('Grit', 114, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32)]
#[Field('Flow', 115, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32)]
#[Field('EbikeTravelRange', 117, FitBaseType::UINT16, 1.0, 0.0, 'km', false, ProfileType::UINT16)]
#[Field('EbikeBatteryLevel', 118, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('EbikeAssistMode', 119, FitBaseType::UINT8, 1.0, 0.0, 'depends on sensor', false, ProfileType::UINT8)]
#[Field('EbikeAssistLevelPercent', 120, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
final class RecordMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Record', MessageNumber::Record);
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getPositionLat(): ?int
    {
        return $this->getValue(0);
    }

    public function getPositionLong(): ?int
    {
        return $this->getValue(1);
    }

    public function getAltitude(): ?int
    {
        return $this->getValue(2);
    }

    public function getHeartRate(): ?int
    {
        return $this->getValue(3);
    }

    public function getCadence(): ?int
    {
        return $this->getValue(4);
    }

    public function getDistance(): ?int
    {
        return $this->getValue(5);
    }

    public function getSpeed(): ?int
    {
        return $this->getValue(6);
    }

    public function getPower(): ?int
    {
        return $this->getValue(7);
    }

    public function getCompressedSpeedDistance(): ?int
    {
        return $this->getValue(8);
    }

    public function getGrade(): ?int
    {
        return $this->getValue(9);
    }

    public function getResistance(): ?int
    {
        return $this->getValue(10);
    }

    public function getTimeFromCourse(): ?int
    {
        return $this->getValue(11);
    }

    public function getCycleLength(): ?int
    {
        return $this->getValue(12);
    }

    public function getTemperature(): ?int
    {
        return $this->getValue(13);
    }

    public function getSpeed1s(): ?int
    {
        return $this->getValue(17);
    }

    public function getCycles(): ?int
    {
        return $this->getValue(18);
    }

    public function getTotalCycles(): ?int
    {
        return $this->getValue(19);
    }

    public function getCompressedAccumulatedPower(): ?int
    {
        return $this->getValue(28);
    }

    public function getAccumulatedPower(): ?int
    {
        return $this->getValue(29);
    }

    public function getLeftRightBalance(): ?int
    {
        return $this->getValue(30);
    }

    public function getGpsAccuracy(): ?int
    {
        return $this->getValue(31);
    }

    public function getVerticalSpeed(): ?int
    {
        return $this->getValue(32);
    }

    public function getCalories(): ?int
    {
        return $this->getValue(33);
    }

    public function getVerticalOscillation(): ?int
    {
        return $this->getValue(39);
    }

    public function getStanceTimePercent(): ?int
    {
        return $this->getValue(40);
    }

    public function getStanceTime(): ?int
    {
        return $this->getValue(41);
    }

    public function getActivityType(): ?int
    {
        return $this->getValue(42);
    }

    public function getLeftTorqueEffectiveness(): ?int
    {
        return $this->getValue(43);
    }

    public function getRightTorqueEffectiveness(): ?int
    {
        return $this->getValue(44);
    }

    public function getLeftPedalSmoothness(): ?int
    {
        return $this->getValue(45);
    }

    public function getRightPedalSmoothness(): ?int
    {
        return $this->getValue(46);
    }

    public function getCombinedPedalSmoothness(): ?int
    {
        return $this->getValue(47);
    }

    public function getTime128(): ?int
    {
        return $this->getValue(48);
    }

    public function getStrokeType(): ?int
    {
        return $this->getValue(49);
    }

    public function getZone(): ?int
    {
        return $this->getValue(50);
    }

    public function getBallSpeed(): ?int
    {
        return $this->getValue(51);
    }

    public function getCadence256(): ?int
    {
        return $this->getValue(52);
    }

    public function getFractionalCadence(): ?int
    {
        return $this->getValue(53);
    }

    public function getTotalHemoglobinConc(): ?int
    {
        return $this->getValue(54);
    }

    public function getTotalHemoglobinConcMin(): ?int
    {
        return $this->getValue(55);
    }

    public function getTotalHemoglobinConcMax(): ?int
    {
        return $this->getValue(56);
    }

    public function getSaturatedHemoglobinPercent(): ?int
    {
        return $this->getValue(57);
    }

    public function getSaturatedHemoglobinPercentMin(): ?int
    {
        return $this->getValue(58);
    }

    public function getSaturatedHemoglobinPercentMax(): ?int
    {
        return $this->getValue(59);
    }

    public function getDeviceIndex(): ?int
    {
        return $this->getValue(62);
    }

    public function getLeftPco(): ?int
    {
        return $this->getValue(67);
    }

    public function getRightPco(): ?int
    {
        return $this->getValue(68);
    }

    public function getLeftPowerPhase(): ?int
    {
        return $this->getValue(69);
    }

    public function getLeftPowerPhasePeak(): ?int
    {
        return $this->getValue(70);
    }

    public function getRightPowerPhase(): ?int
    {
        return $this->getValue(71);
    }

    public function getRightPowerPhasePeak(): ?int
    {
        return $this->getValue(72);
    }

    public function getEnhancedSpeed(): ?int
    {
        return $this->getValue(73);
    }

    public function getEnhancedAltitude(): ?int
    {
        return $this->getValue(78);
    }

    public function getBatterySoc(): ?int
    {
        return $this->getValue(81);
    }

    public function getMotorPower(): ?int
    {
        return $this->getValue(82);
    }

    public function getVerticalRatio(): ?int
    {
        return $this->getValue(83);
    }

    public function getStanceTimeBalance(): ?int
    {
        return $this->getValue(84);
    }

    public function getStepLength(): ?int
    {
        return $this->getValue(85);
    }

    public function getAbsolutePressure(): ?int
    {
        return $this->getValue(91);
    }

    public function getDepth(): ?int
    {
        return $this->getValue(92);
    }

    public function getNextStopDepth(): ?int
    {
        return $this->getValue(93);
    }

    public function getNextStopTime(): ?int
    {
        return $this->getValue(94);
    }

    public function getTimeToSurface(): ?int
    {
        return $this->getValue(95);
    }

    public function getNdlTime(): ?int
    {
        return $this->getValue(96);
    }

    public function getCnsLoad(): ?int
    {
        return $this->getValue(97);
    }

    public function getN2Load(): ?int
    {
        return $this->getValue(98);
    }

    public function getGrit(): ?float
    {
        return $this->getValue(114);
    }

    public function getFlow(): ?float
    {
        return $this->getValue(115);
    }

    public function getEbikeTravelRange(): ?int
    {
        return $this->getValue(117);
    }

    public function getEbikeBatteryLevel(): ?int
    {
        return $this->getValue(118);
    }

    public function getEbikeAssistMode(): ?int
    {
        return $this->getValue(119);
    }

    public function getEbikeAssistLevelPercent(): ?int
    {
        return $this->getValue(120);
    }
}
