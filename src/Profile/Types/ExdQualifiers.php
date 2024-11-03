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

enum ExdQualifiers: int
{
    case NoQualifier = 0;
    case Instantaneous = 1;
    case Average = 2;
    case Lap = 3;
    case Maximum = 4;
    case MaximumAverage = 5;
    case MaximumLap = 6;
    case LastLap = 7;
    case AverageLap = 8;
    case ToDestination = 9;
    case ToGo = 10;
    case ToNext = 11;
    case NextCoursePoint = 12;
    case Total = 13;
    case ThreeSecondAverage = 14;
    case TenSecondAverage = 15;
    case ThirtySecondAverage = 16;
    case PercentMaximum = 17;
    case PercentMaximumAverage = 18;
    case LapPercentMaximum = 19;
    case Elapsed = 20;
    case Sunrise = 21;
    case Sunset = 22;
    case ComparedToVirtualPartner = 23;
    case Maximum24h = 24;
    case Minimum24h = 25;
    case Minimum = 26;
    case First = 27;
    case Second = 28;
    case Third = 29;
    case Shifter = 30;
    case LastSport = 31;
    case Moving = 32;
    case Stopped = 33;
    case EstimatedTotal = 34;
    case Zone9 = 242;
    case Zone8 = 243;
    case Zone7 = 244;
    case Zone6 = 245;
    case Zone5 = 246;
    case Zone4 = 247;
    case Zone3 = 248;
    case Zone2 = 249;
    case Zone1 = 250;
}
