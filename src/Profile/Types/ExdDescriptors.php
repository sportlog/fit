<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.141 SDK
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Types;

enum ExdDescriptors: int
{
    case BikeLightBatteryStatus = 0;
    case BeamAngleStatus = 1;
    case BateryLevel = 2;
    case LightNetworkMode = 3;
    case NumberLightsConnected = 4;
    case Cadence = 5;
    case Distance = 6;
    case EstimatedTimeOfArrival = 7;
    case Heading = 8;
    case Time = 9;
    case BatteryLevel = 10;
    case TrainerResistance = 11;
    case TrainerTargetPower = 12;
    case TimeSeated = 13;
    case TimeStanding = 14;
    case Elevation = 15;
    case Grade = 16;
    case Ascent = 17;
    case Descent = 18;
    case VerticalSpeed = 19;
    case Di2BatteryLevel = 20;
    case FrontGear = 21;
    case RearGear = 22;
    case GearRatio = 23;
    case HeartRate = 24;
    case HeartRateZone = 25;
    case TimeInHeartRateZone = 26;
    case HeartRateReserve = 27;
    case Calories = 28;
    case GpsAccuracy = 29;
    case GpsSignalStrength = 30;
    case Temperature = 31;
    case TimeOfDay = 32;
    case Balance = 33;
    case PedalSmoothness = 34;
    case Power = 35;
    case FunctionalThresholdPower = 36;
    case IntensityFactor = 37;
    case Work = 38;
    case PowerRatio = 39;
    case NormalizedPower = 40;
    case TrainingStressScore = 41;
    case TimeOnZone = 42;
    case Speed = 43;
    case Laps = 44;
    case Reps = 45;
    case WorkoutStep = 46;
    case CourseDistance = 47;
    case NavigationDistance = 48;
    case CourseEstimatedTimeOfArrival = 49;
    case NavigationEstimatedTimeOfArrival = 50;
    case CourseTime = 51;
    case NavigationTime = 52;
    case CourseHeading = 53;
    case NavigationHeading = 54;
    case PowerZone = 55;
    case TorqueEffectiveness = 56;
    case TimerTime = 57;
    case PowerWeightRatio = 58;
    case LeftPlatformCenterOffset = 59;
    case RightPlatformCenterOffset = 60;
    case LeftPowerPhaseStartAngle = 61;
    case RightPowerPhaseStartAngle = 62;
    case LeftPowerPhaseFinishAngle = 63;
    case RightPowerPhaseFinishAngle = 64;
    case Gears = 65;
    case Pace = 66;
    case TrainingEffect = 67;
    case VerticalOscillation = 68;
    case VerticalRatio = 69;
    case GroundContactTime = 70;
    case LeftGroundContactTimeBalance = 71;
    case RightGroundContactTimeBalance = 72;
    case StrideLength = 73;
    case RunningCadence = 74;
    case PerformanceCondition = 75;
    case CourseType = 76;
    case TimeInPowerZone = 77;
    case NavigationTurn = 78;
    case CourseLocation = 79;
    case NavigationLocation = 80;
    case Compass = 81;
    case GearCombo = 82;
    case MuscleOxygen = 83;
    case Icon = 84;
    case CompassHeading = 85;
    case GpsHeading = 86;
    case GpsElevation = 87;
    case AnaerobicTrainingEffect = 88;
    case Course = 89;
    case OffCourse = 90;
    case GlideRatio = 91;
    case VerticalDistance = 92;
    case Vmg = 93;
    case AmbientPressure = 94;
    case Pressure = 95;
    case Vam = 96;
}
