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

class File
{
    /** "Read only */
    public const Device = 1;

    /** "Read/write */
    public const Settings = 2;

    /** "Read/write */
    public const Sport = 3;

    /** "Read/erase */
    public const Activity = 4;

    /** "Read/write/erase */
    public const Workout = 5;

    /** "Read/write/erase */
    public const Course = 6;

    /** "Read/write */
    public const Schedules = 7;

    /** "Read only */
    public const Weight = 9;

    /** "Read only */
    public const Totals = 10;

    /** "Read/write */
    public const Goals = 11;

    /**
     * Read only. Directory=Blood Pressure
     */
    public const BloodPressure = 14;

    /**
     * Read only. Directory=Monitoring. File number=sub type.
     */
    public const MonitoringA = 15;

    /** "Read/erase */
    public const ActivitySummary = 20;
    public const MonitoringDaily = 28;

    /**
     * Read only. Directory=Monitoring. File number=identifier
     */
    public const MonitoringB = 32;

    /**
     * Read/write/erase. Multiple Files. Directory=Segments
     */
    public const Segment = 34;

    /**
     * Read/write/erase. Single File. Directory=Segments
     */
    public const SegmentList = 35;

    /**
     * Read/write/erase. Single File. Directory=Settings
     */
    public const ExdConfiguration = 40;

    /**
     * 0xF7 - 0xFE reserved for manufacturer specific file types
     */
    public const MfgRangeMin = 247;

    /**
     * 0xF7 - 0xFE reserved for manufacturer specific file types
     */
    public const MfgRangeMax = 254;
}
