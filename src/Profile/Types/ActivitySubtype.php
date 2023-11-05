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

enum ActivitySubtype: int
{
    case Generic = 0;
    case Treadmill = 1;
    case Street = 2;
    case Trail = 3;
    case Track = 4;
    case Spin = 5;
    case IndoorCycling = 6;
    case Road = 7;
    case Mountain = 8;
    case Downhill = 9;
    case Recumbent = 10;
    case Cyclocross = 11;
    case HandCycling = 12;
    case TrackCycling = 13;
    case IndoorRowing = 14;
    case Elliptical = 15;
    case StairClimbing = 16;
    case LapSwimming = 17;
    case OpenWater = 18;
    case All = 254;
}
