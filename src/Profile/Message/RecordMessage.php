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
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the position lat
     */
    public function getPositionLat(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the position long
     */
    public function getPositionLong(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the altitude
     */
    public function getAltitude(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the heart rate
     */
    public function getHeartRate(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the cadence
     */
    public function getCadence(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the distance
     */
    public function getDistance(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the speed
     */
    public function getSpeed(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the power
     */
    public function getPower(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the compressed speed distance
     */
    public function getCompressedSpeedDistance(): mixed
    {
        return $this->getValue(8);
    }

    /**
     * Gets the grade
     */
    public function getGrade(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the resistance
     */
    public function getResistance(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Gets the time from course
     */
    public function getTimeFromCourse(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Gets the cycle length
     */
    public function getCycleLength(): ?int
    {
        return $this->getValue(12);
    }

    /**
     * Gets the temperature
     */
    public function getTemperature(): ?int
    {
        return $this->getValue(13);
    }

    /**
     * Gets the speed1s
     */
    public function getSpeed1s(): ?int
    {
        return $this->getValue(17);
    }

    /**
     * Gets the cycles
     */
    public function getCycles(): ?int
    {
        return $this->getValue(18);
    }

    /**
     * Gets the total cycles
     */
    public function getTotalCycles(): ?int
    {
        return $this->getValue(19);
    }

    /**
     * Gets the compressed accumulated power
     */
    public function getCompressedAccumulatedPower(): ?int
    {
        return $this->getValue(28);
    }

    /**
     * Gets the accumulated power
     */
    public function getAccumulatedPower(): ?int
    {
        return $this->getValue(29);
    }

    /**
     * Gets the left right balance
     */
    public function getLeftRightBalance(): ?int
    {
        return $this->getValue(30);
    }

    /**
     * Gets the gps accuracy
     */
    public function getGpsAccuracy(): ?int
    {
        return $this->getValue(31);
    }

    /**
     * Gets the vertical speed
     */
    public function getVerticalSpeed(): ?int
    {
        return $this->getValue(32);
    }

    /**
     * Gets the calories
     */
    public function getCalories(): ?int
    {
        return $this->getValue(33);
    }

    /**
     * Gets the vertical oscillation
     */
    public function getVerticalOscillation(): ?int
    {
        return $this->getValue(39);
    }

    /**
     * Gets the stance time percent
     */
    public function getStanceTimePercent(): ?int
    {
        return $this->getValue(40);
    }

    /**
     * Gets the stance time
     */
    public function getStanceTime(): ?int
    {
        return $this->getValue(41);
    }

    /**
     * Gets the activity type
     */
    public function getActivityType(): ?int
    {
        return $this->getValue(42);
    }

    /**
     * Gets the left torque effectiveness
     */
    public function getLeftTorqueEffectiveness(): ?int
    {
        return $this->getValue(43);
    }

    /**
     * Gets the right torque effectiveness
     */
    public function getRightTorqueEffectiveness(): ?int
    {
        return $this->getValue(44);
    }

    /**
     * Gets the left pedal smoothness
     */
    public function getLeftPedalSmoothness(): ?int
    {
        return $this->getValue(45);
    }

    /**
     * Gets the right pedal smoothness
     */
    public function getRightPedalSmoothness(): ?int
    {
        return $this->getValue(46);
    }

    /**
     * Gets the combined pedal smoothness
     */
    public function getCombinedPedalSmoothness(): ?int
    {
        return $this->getValue(47);
    }

    /**
     * Gets the time128
     */
    public function getTime128(): ?int
    {
        return $this->getValue(48);
    }

    /**
     * Gets the stroke type
     */
    public function getStrokeType(): ?int
    {
        return $this->getValue(49);
    }

    /**
     * Gets the zone
     */
    public function getZone(): ?int
    {
        return $this->getValue(50);
    }

    /**
     * Gets the ball speed
     */
    public function getBallSpeed(): ?int
    {
        return $this->getValue(51);
    }

    /**
     * Gets the cadence256
     */
    public function getCadence256(): ?int
    {
        return $this->getValue(52);
    }

    /**
     * Gets the fractional cadence
     */
    public function getFractionalCadence(): ?int
    {
        return $this->getValue(53);
    }

    /**
     * Gets the total hemoglobin conc
     */
    public function getTotalHemoglobinConc(): ?int
    {
        return $this->getValue(54);
    }

    /**
     * Gets the total hemoglobin conc min
     */
    public function getTotalHemoglobinConcMin(): ?int
    {
        return $this->getValue(55);
    }

    /**
     * Gets the total hemoglobin conc max
     */
    public function getTotalHemoglobinConcMax(): ?int
    {
        return $this->getValue(56);
    }

    /**
     * Gets the saturated hemoglobin percent
     */
    public function getSaturatedHemoglobinPercent(): ?int
    {
        return $this->getValue(57);
    }

    /**
     * Gets the saturated hemoglobin percent min
     */
    public function getSaturatedHemoglobinPercentMin(): ?int
    {
        return $this->getValue(58);
    }

    /**
     * Gets the saturated hemoglobin percent max
     */
    public function getSaturatedHemoglobinPercentMax(): ?int
    {
        return $this->getValue(59);
    }

    /**
     * Gets the device index
     */
    public function getDeviceIndex(): ?int
    {
        return $this->getValue(62);
    }

    /**
     * Gets the left pco
     */
    public function getLeftPco(): ?int
    {
        return $this->getValue(67);
    }

    /**
     * Gets the right pco
     */
    public function getRightPco(): ?int
    {
        return $this->getValue(68);
    }

    /**
     * Gets the left power phase
     */
    public function getLeftPowerPhase(): ?int
    {
        return $this->getValue(69);
    }

    /**
     * Gets the left power phase peak
     */
    public function getLeftPowerPhasePeak(): ?int
    {
        return $this->getValue(70);
    }

    /**
     * Gets the right power phase
     */
    public function getRightPowerPhase(): ?int
    {
        return $this->getValue(71);
    }

    /**
     * Gets the right power phase peak
     */
    public function getRightPowerPhasePeak(): ?int
    {
        return $this->getValue(72);
    }

    /**
     * Gets the enhanced speed
     */
    public function getEnhancedSpeed(): ?int
    {
        return $this->getValue(73);
    }

    /**
     * Gets the enhanced altitude
     */
    public function getEnhancedAltitude(): ?int
    {
        return $this->getValue(78);
    }

    /**
     * Gets the battery soc
     */
    public function getBatterySoc(): ?int
    {
        return $this->getValue(81);
    }

    /**
     * Gets the motor power
     */
    public function getMotorPower(): ?int
    {
        return $this->getValue(82);
    }

    /**
     * Gets the vertical ratio
     */
    public function getVerticalRatio(): ?int
    {
        return $this->getValue(83);
    }

    /**
     * Gets the stance time balance
     */
    public function getStanceTimeBalance(): ?int
    {
        return $this->getValue(84);
    }

    /**
     * Gets the step length
     */
    public function getStepLength(): ?int
    {
        return $this->getValue(85);
    }

    /**
     * Gets the absolute pressure
     */
    public function getAbsolutePressure(): ?int
    {
        return $this->getValue(91);
    }

    /**
     * Gets the depth
     */
    public function getDepth(): ?int
    {
        return $this->getValue(92);
    }

    /**
     * Gets the next stop depth
     */
    public function getNextStopDepth(): ?int
    {
        return $this->getValue(93);
    }

    /**
     * Gets the next stop time
     */
    public function getNextStopTime(): ?int
    {
        return $this->getValue(94);
    }

    /**
     * Gets the time to surface
     */
    public function getTimeToSurface(): ?int
    {
        return $this->getValue(95);
    }

    /**
     * Gets the ndl time
     */
    public function getNdlTime(): ?int
    {
        return $this->getValue(96);
    }

    /**
     * Gets the cns load
     */
    public function getCnsLoad(): ?int
    {
        return $this->getValue(97);
    }

    /**
     * Gets the n2 load
     */
    public function getN2Load(): ?int
    {
        return $this->getValue(98);
    }

    /**
     * Gets the grit
     */
    public function getGrit(): ?float
    {
        return $this->getValue(114);
    }

    /**
     * Gets the flow
     */
    public function getFlow(): ?float
    {
        return $this->getValue(115);
    }

    /**
     * Gets the ebike travel range
     */
    public function getEbikeTravelRange(): ?int
    {
        return $this->getValue(117);
    }

    /**
     * Gets the ebike battery level
     */
    public function getEbikeBatteryLevel(): ?int
    {
        return $this->getValue(118);
    }

    /**
     * Gets the ebike assist mode
     */
    public function getEbikeAssistMode(): ?int
    {
        return $this->getValue(119);
    }

    /**
     * Gets the ebike assist level percent
     */
    public function getEbikeAssistLevelPercent(): ?int
    {
        return $this->getValue(120);
    }
}
