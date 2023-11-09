<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Types;

class DiveAlert
{
    public const NdlReached = 0;
    public const GasSwitchPrompted = 1;
    public const NearSurface = 2;
    public const ApproachingNdl = 3;
    public const Po2Warn = 4;
    public const Po2CritHigh = 5;
    public const Po2CritLow = 6;
    public const TimeAlert = 7;
    public const DepthAlert = 8;
    public const DecoCeilingBroken = 9;
    public const DecoComplete = 10;
    public const SafetyStopBroken = 11;
    public const SafetyStopComplete = 12;
    public const CnsWarning = 13;
    public const CnsCritical = 14;
    public const OtuWarning = 15;
    public const OtuCritical = 16;
    public const AscentCritical = 17;
    public const AlertDismissedByKey = 18;
    public const AlertDismissedByTimeout = 19;
    public const BatteryLow = 20;
    public const BatteryCritical = 21;
    public const SafetyStopStarted = 22;
    public const ApproachingFirstDecoStop = 23;
    public const SetpointSwitchAutoLow = 24;
    public const SetpointSwitchAutoHigh = 25;
    public const SetpointSwitchManualLow = 26;
    public const SetpointSwitchManualHigh = 27;
    public const AutoSetpointSwitchIgnored = 28;
    public const SwitchedToOpenCircuit = 29;
    public const SwitchedToClosedCircuit = 30;
    public const TankBatteryLow = 32;

    /**
     * ccr diluent has low po2
     */
    public const Po2CcrDilLow = 33;

    /**
     * a deco stop has been cleared
     */
    public const DecoStopCleared = 34;

    /**
     * Target Depth Apnea Alarm triggered
     */
    public const ApneaNeutralBuoyancy = 35;

    /**
     * Neutral Buoyance Apnea Alarm triggered
     */
    public const ApneaTargetDepth = 36;

    /**
     * Surface Apnea Alarm triggered
     */
    public const ApneaSurface = 37;

    /**
     * High Speed Apnea Alarm triggered
     */
    public const ApneaHighSpeed = 38;

    /**
     * Low Speed Apnea Alarm triggered
     */
    public const ApneaLowSpeed = 39;
}
