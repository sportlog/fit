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

class Event
{
    /**
     * Group 0. Start / stop_all
     */
    public const Timer = 0;

    /**
     * start / stop
     */
    public const Workout = 3;

    /**
     * Start at beginning of workout. Stop at end of each step.
     */
    public const WorkoutStep = 4;

    /**
     * stop_all group 0
     */
    public const PowerDown = 5;

    /**
     * stop_all group 0
     */
    public const PowerUp = 6;

    /**
     * start / stop group 0
     */
    public const OffCourse = 7;

    /**
     * Stop at end of each session.
     */
    public const Session = 8;

    /**
     * Stop at end of each lap.
     */
    public const Lap = 9;

    /**
     * marker
     */
    public const CoursePoint = 10;

    /**
     * marker
     */
    public const Battery = 11;

    /** "Group 1. Start at beginning of activity if VP enabled */
    public const VirtualPartnerPace = 12;

    /**
     * Group 0. Start / stop when in alert condition.
     */
    public const HrHighAlert = 13;

    /**
     * Group 0. Start / stop when in alert condition.
     */
    public const HrLowAlert = 14;

    /**
     * Group 0. Start / stop when in alert condition.
     */
    public const SpeedHighAlert = 15;

    /**
     * Group 0. Start / stop when in alert condition.
     */
    public const SpeedLowAlert = 16;

    /**
     * Group 0. Start / stop when in alert condition.
     */
    public const CadHighAlert = 17;

    /**
     * Group 0. Start / stop when in alert condition.
     */
    public const CadLowAlert = 18;

    /**
     * Group 0. Start / stop when in alert condition.
     */
    public const PowerHighAlert = 19;

    /**
     * Group 0. Start / stop when in alert condition.
     */
    public const PowerLowAlert = 20;

    /**
     * marker
     */
    public const RecoveryHr = 21;

    /**
     * marker
     */
    public const BatteryLow = 22;

    /**
     * Group 1. Start if enabled mid activity (not required at start of activity). Stop when duration is reached. stop_disable if disabled.
     */
    public const TimeDurationAlert = 23;

    /**
     * Group 1. Start if enabled mid activity (not required at start of activity). Stop when duration is reached. stop_disable if disabled.
     */
    public const DistanceDurationAlert = 24;

    /**
     * Group 1. Start if enabled mid activity (not required at start of activity). Stop when duration is reached. stop_disable if disabled.
     */
    public const CalorieDurationAlert = 25;

    /**
     * Group 1.. Stop at end of activity.
     */
    public const Activity = 26;

    /**
     * marker
     */
    public const FitnessEquipment = 27;

    /**
     * Stop at end of each length.
     */
    public const Length = 28;

    /**
     * marker
     */
    public const UserMarker = 32;

    /**
     * marker
     */
    public const SportPoint = 33;

    /**
     * start/stop/marker
     */
    public const Calibration = 36;

    /**
     * marker
     */
    public const FrontGearChange = 42;

    /**
     * marker
     */
    public const RearGearChange = 43;

    /**
     * marker
     */
    public const RiderPositionChange = 44;

    /**
     * Group 0. Start / stop when in alert condition.
     */
    public const ElevHighAlert = 45;

    /**
     * Group 0. Start / stop when in alert condition.
     */
    public const ElevLowAlert = 46;

    /**
     * marker
     */
    public const CommTimeout = 47;

    /**
     * marker
     */
    public const AutoActivityDetect = 54;

    /**
     * marker
     */
    public const DiveAlert = 56;

    /**
     * marker
     */
    public const DiveGasSwitched = 57;

    /**
     * marker
     */
    public const TankPressureReserve = 71;

    /**
     * marker
     */
    public const TankPressureCritical = 72;

    /**
     * marker
     */
    public const TankLost = 73;

    /**
     * start/stop/marker
     */
    public const RadarThreatAlert = 75;

    /**
     * marker
     */
    public const TankBatteryLow = 76;

    /**
     * marker - tank pod has connected
     */
    public const TankPodConnected = 81;

    /**
     * marker - tank pod has lost connection
     */
    public const TankPodDisconnected = 82;
}
