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

enum AttitudeValidity: int
{
    case TrackAngleHeadingValid = 1;
    case PitchValid = 2;
    case RollValid = 4;
    case LateralBodyAccelValid = 8;
    case NormalBodyAccelValid = 16;
    case TurnRateValid = 32;
    case HwFail = 64;
    case MagInvalid = 128;
    case NoGps = 256;
    case GpsInvalid = 512;
    case SolutionCoasting = 1024;
    case TrueTrackAngle = 2048;
    case MagneticHeading = 4096;
}
