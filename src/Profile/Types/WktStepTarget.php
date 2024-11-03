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

enum WktStepTarget: int
{
    case Speed = 0;
    case HeartRate = 1;
    case Open = 2;
    case Cadence = 3;
    case Power = 4;
    case Grade = 5;
    case Resistance = 6;
    case Power3s = 7;
    case Power10s = 8;
    case Power30s = 9;
    case PowerLap = 10;
    case SwimStroke = 11;
    case SpeedLap = 12;
    case HeartRateLap = 13;
}
