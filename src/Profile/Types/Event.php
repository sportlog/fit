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

enum Event: int
{
    case Timer = 0;
    case Workout = 3;
    case WorkoutStep = 4;
    case PowerDown = 5;
    case PowerUp = 6;
    case OffCourse = 7;
    case Session = 8;
    case Lap = 9;
    case CoursePoint = 10;
    case Battery = 11;
    case VirtualPartnerPace = 12;
    case HrHighAlert = 13;
    case HrLowAlert = 14;
    case SpeedHighAlert = 15;
    case SpeedLowAlert = 16;
    case CadHighAlert = 17;
    case CadLowAlert = 18;
    case PowerHighAlert = 19;
    case PowerLowAlert = 20;
    case RecoveryHr = 21;
    case BatteryLow = 22;
    case TimeDurationAlert = 23;
    case DistanceDurationAlert = 24;
    case CalorieDurationAlert = 25;
    case Activity = 26;
    case FitnessEquipment = 27;
    case Length = 28;
    case UserMarker = 32;
    case SportPoint = 33;
    case Calibration = 36;
    case FrontGearChange = 42;
    case RearGearChange = 43;
    case RiderPositionChange = 44;
    case ElevHighAlert = 45;
    case ElevLowAlert = 46;
    case CommTimeout = 47;
    case AutoActivityDetect = 54;
    case DiveAlert = 56;
    case DiveGasSwitched = 57;
    case TankPressureReserve = 71;
    case TankPressureCritical = 72;
    case TankLost = 73;
    case RadarThreatAlert = 75;
    case TankBatteryLow = 76;
    case TankPodConnected = 81;
    case TankPodDisconnected = 82;
}
