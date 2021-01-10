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

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the position lat
     */
    public function getPositionLat(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the position long
     */
    public function getPositionLong(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the altitude
     */
    public function getAltitude(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the heart rate
     */
    public function getHeartRate(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the cadence
     */
    public function getCadence(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the distance
     */
    public function getDistance(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the speed
     */
    public function getSpeed(): float|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the power
     */
    public function getPower(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the compressed speed distance
     */
    public function getCompressedSpeedDistance(): mixed
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the grade
     */
    public function getGrade(): float|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the resistance
     */
    public function getResistance(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the time from course
     */
    public function getTimeFromCourse(): float|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the cycle length
     */
    public function getCycleLength(): float|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the temperature
     */
    public function getTemperature(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the speed1s
     */
    public function getSpeed1s(): float|array|null
    {
        return $this->getFieldValue(17);
    }

    /**
     * Gets the cycles
     */
    public function getCycles(): int|array|null
    {
        return $this->getFieldValue(18);
    }

    /**
     * Gets the total cycles
     */
    public function getTotalCycles(): int|array|null
    {
        return $this->getFieldValue(19);
    }

    /**
     * Gets the compressed accumulated power
     */
    public function getCompressedAccumulatedPower(): int|array|null
    {
        return $this->getFieldValue(28);
    }

    /**
     * Gets the accumulated power
     */
    public function getAccumulatedPower(): int|array|null
    {
        return $this->getFieldValue(29);
    }

    /**
     * Gets the left right balance
     */
    public function getLeftRightBalance(): int|array|null
    {
        return $this->getFieldValue(30);
    }

    /**
     * Gets the gps accuracy
     */
    public function getGpsAccuracy(): int|array|null
    {
        return $this->getFieldValue(31);
    }

    /**
     * Gets the vertical speed
     */
    public function getVerticalSpeed(): float|array|null
    {
        return $this->getFieldValue(32);
    }

    /**
     * Gets the calories
     */
    public function getCalories(): int|array|null
    {
        return $this->getFieldValue(33);
    }

    /**
     * Gets the vertical oscillation
     */
    public function getVerticalOscillation(): float|array|null
    {
        return $this->getFieldValue(39);
    }

    /**
     * Gets the stance time percent
     */
    public function getStanceTimePercent(): float|array|null
    {
        return $this->getFieldValue(40);
    }

    /**
     * Gets the stance time
     */
    public function getStanceTime(): float|array|null
    {
        return $this->getFieldValue(41);
    }

    /**
     * Gets the activity type
     */
    public function getActivityType(): int|array|null
    {
        return $this->getFieldValue(42);
    }

    /**
     * Gets the left torque effectiveness
     */
    public function getLeftTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(43);
    }

    /**
     * Gets the right torque effectiveness
     */
    public function getRightTorqueEffectiveness(): float|array|null
    {
        return $this->getFieldValue(44);
    }

    /**
     * Gets the left pedal smoothness
     */
    public function getLeftPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(45);
    }

    /**
     * Gets the right pedal smoothness
     */
    public function getRightPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(46);
    }

    /**
     * Gets the combined pedal smoothness
     */
    public function getCombinedPedalSmoothness(): float|array|null
    {
        return $this->getFieldValue(47);
    }

    /**
     * Gets the time128
     */
    public function getTime128(): float|array|null
    {
        return $this->getFieldValue(48);
    }

    /**
     * Gets the stroke type
     */
    public function getStrokeType(): int|array|null
    {
        return $this->getFieldValue(49);
    }

    /**
     * Gets the zone
     */
    public function getZone(): int|array|null
    {
        return $this->getFieldValue(50);
    }

    /**
     * Gets the ball speed
     */
    public function getBallSpeed(): float|array|null
    {
        return $this->getFieldValue(51);
    }

    /**
     * Gets the cadence256
     */
    public function getCadence256(): float|array|null
    {
        return $this->getFieldValue(52);
    }

    /**
     * Gets the fractional cadence
     */
    public function getFractionalCadence(): float|array|null
    {
        return $this->getFieldValue(53);
    }

    /**
     * Gets the total hemoglobin conc
     */
    public function getTotalHemoglobinConc(): float|array|null
    {
        return $this->getFieldValue(54);
    }

    /**
     * Gets the total hemoglobin conc min
     */
    public function getTotalHemoglobinConcMin(): float|array|null
    {
        return $this->getFieldValue(55);
    }

    /**
     * Gets the total hemoglobin conc max
     */
    public function getTotalHemoglobinConcMax(): float|array|null
    {
        return $this->getFieldValue(56);
    }

    /**
     * Gets the saturated hemoglobin percent
     */
    public function getSaturatedHemoglobinPercent(): float|array|null
    {
        return $this->getFieldValue(57);
    }

    /**
     * Gets the saturated hemoglobin percent min
     */
    public function getSaturatedHemoglobinPercentMin(): float|array|null
    {
        return $this->getFieldValue(58);
    }

    /**
     * Gets the saturated hemoglobin percent max
     */
    public function getSaturatedHemoglobinPercentMax(): float|array|null
    {
        return $this->getFieldValue(59);
    }

    /**
     * Gets the device index
     */
    public function getDeviceIndex(): int|array|null
    {
        return $this->getFieldValue(62);
    }

    /**
     * Gets the left pco
     */
    public function getLeftPco(): int|array|null
    {
        return $this->getFieldValue(67);
    }

    /**
     * Gets the right pco
     */
    public function getRightPco(): int|array|null
    {
        return $this->getFieldValue(68);
    }

    /**
     * Gets the left power phase
     */
    public function getLeftPowerPhase(): float|array|null
    {
        return $this->getFieldValue(69);
    }

    /**
     * Gets the left power phase peak
     */
    public function getLeftPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(70);
    }

    /**
     * Gets the right power phase
     */
    public function getRightPowerPhase(): float|array|null
    {
        return $this->getFieldValue(71);
    }

    /**
     * Gets the right power phase peak
     */
    public function getRightPowerPhasePeak(): float|array|null
    {
        return $this->getFieldValue(72);
    }

    /**
     * Gets the enhanced speed
     */
    public function getEnhancedSpeed(): float|array|null
    {
        return $this->getFieldValue(73);
    }

    /**
     * Gets the enhanced altitude
     */
    public function getEnhancedAltitude(): float|array|null
    {
        return $this->getFieldValue(78);
    }

    /**
     * Gets the battery soc
     */
    public function getBatterySoc(): float|array|null
    {
        return $this->getFieldValue(81);
    }

    /**
     * Gets the motor power
     */
    public function getMotorPower(): int|array|null
    {
        return $this->getFieldValue(82);
    }

    /**
     * Gets the vertical ratio
     */
    public function getVerticalRatio(): float|array|null
    {
        return $this->getFieldValue(83);
    }

    /**
     * Gets the stance time balance
     */
    public function getStanceTimeBalance(): float|array|null
    {
        return $this->getFieldValue(84);
    }

    /**
     * Gets the step length
     */
    public function getStepLength(): float|array|null
    {
        return $this->getFieldValue(85);
    }

    /**
     * Gets the absolute pressure
     */
    public function getAbsolutePressure(): int|array|null
    {
        return $this->getFieldValue(91);
    }

    /**
     * Gets the depth
     */
    public function getDepth(): float|array|null
    {
        return $this->getFieldValue(92);
    }

    /**
     * Gets the next stop depth
     */
    public function getNextStopDepth(): float|array|null
    {
        return $this->getFieldValue(93);
    }

    /**
     * Gets the next stop time
     */
    public function getNextStopTime(): int|array|null
    {
        return $this->getFieldValue(94);
    }

    /**
     * Gets the time to surface
     */
    public function getTimeToSurface(): int|array|null
    {
        return $this->getFieldValue(95);
    }

    /**
     * Gets the ndl time
     */
    public function getNdlTime(): int|array|null
    {
        return $this->getFieldValue(96);
    }

    /**
     * Gets the cns load
     */
    public function getCnsLoad(): int|array|null
    {
        return $this->getFieldValue(97);
    }

    /**
     * Gets the n2 load
     */
    public function getN2Load(): int|array|null
    {
        return $this->getFieldValue(98);
    }

    /**
     * Gets the grit
     */
    public function getGrit(): float|array|null
    {
        return $this->getFieldValue(114);
    }

    /**
     * Gets the flow
     */
    public function getFlow(): float|array|null
    {
        return $this->getFieldValue(115);
    }

    /**
     * Gets the ebike travel range
     */
    public function getEbikeTravelRange(): int|array|null
    {
        return $this->getFieldValue(117);
    }

    /**
     * Gets the ebike battery level
     */
    public function getEbikeBatteryLevel(): int|array|null
    {
        return $this->getFieldValue(118);
    }

    /**
     * Gets the ebike assist mode
     */
    public function getEbikeAssistMode(): int|array|null
    {
        return $this->getFieldValue(119);
    }

    /**
     * Gets the ebike assist level percent
     */
    public function getEbikeAssistLevelPercent(): int|array|null
    {
        return $this->getFieldValue(120);
    }
}
