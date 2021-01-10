<?php
declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT;

/**
 * FIT file type.
 */
class FileType {
    const Device = 1;
    const Settings = 2;
    const Sport = 3;
    const Activity = 4;
    const Workout = 5;
    const Course = 6;
    const Schedules = 7;
    const Weight = 9;
    const Totals = 10; // 0x0A
    const Goals = 11; // 0x0B
    const BloodPressure = 14; // 0x0E
    const MonitoringA = 15; // 0x0F
    const ActivitySummary = 20; // 0x14
    const MonitoringDaily = 28; // 0x1C
    const MonitoringB = 32; // 0x20
    const Segment = 34; // 0x22
    const SegmentList = 35; // 0x23
    const ExdConfiguration = 40; // 0x28
    const MfgRangeMin = 247; // 0xF7
    const MfgRangeMax = 254; // 0xFE
    const Invalid = 255; // 0xFF
}