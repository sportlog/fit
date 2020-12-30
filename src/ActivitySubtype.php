<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT;

interface ActivitySubtype
{
    const Generic = 0;
    const Treadmill = 1;
    const Street = 2;
    const Trail = 3;
    const Track = 4;
    const Spin = 5;
    const IndoorCycling = 6;
    const Road = 7;
    const Mountain = 8;
    const Downhill = 9;
    const Recumbent = 10; // 0x0A
    const Cyclocross = 11; // 0x0B
    const HandCycling = 12; // 0x0C
    const TrackCycling = 13; // 0x0D
    const IndoorRowing = 14; // 0x0E
    const Elliptical = 15; // 0x0F
    const StairClimbing = 16; // 0x10
    const LapSwimming = 17; // 0x11
    const OpenWater = 18; // 0x12
    const All = 254; // 0xFE
    const Invalid = 255; // 0xFF
}
