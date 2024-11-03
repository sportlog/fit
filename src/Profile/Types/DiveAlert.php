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

enum DiveAlert: int
{
    case NdlReached = 0;
    case GasSwitchPrompted = 1;
    case NearSurface = 2;
    case ApproachingNdl = 3;
    case Po2Warn = 4;
    case Po2CritHigh = 5;
    case Po2CritLow = 6;
    case TimeAlert = 7;
    case DepthAlert = 8;
    case DecoCeilingBroken = 9;
    case DecoComplete = 10;
    case SafetyStopBroken = 11;
    case SafetyStopComplete = 12;
    case CnsWarning = 13;
    case CnsCritical = 14;
    case OtuWarning = 15;
    case OtuCritical = 16;
    case AscentCritical = 17;
    case AlertDismissedByKey = 18;
    case AlertDismissedByTimeout = 19;
    case BatteryLow = 20;
    case BatteryCritical = 21;
    case SafetyStopStarted = 22;
    case ApproachingFirstDecoStop = 23;
    case SetpointSwitchAutoLow = 24;
    case SetpointSwitchAutoHigh = 25;
    case SetpointSwitchManualLow = 26;
    case SetpointSwitchManualHigh = 27;
    case AutoSetpointSwitchIgnored = 28;
    case SwitchedToOpenCircuit = 29;
    case SwitchedToClosedCircuit = 30;
    case TankBatteryLow = 32;
    case Po2CcrDilLow = 33;
    case DecoStopCleared = 34;
    case ApneaNeutralBuoyancy = 35;
    case ApneaTargetDepth = 36;
    case ApneaSurface = 37;
    case ApneaHighSpeed = 38;
    case ApneaLowSpeed = 39;
}
