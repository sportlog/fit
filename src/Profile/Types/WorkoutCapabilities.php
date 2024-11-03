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

enum WorkoutCapabilities: int
{
    case Interval = 1;
    case Custom = 2;
    case FitnessEquipment = 4;
    case Firstbeat = 8;
    case NewLeaf = 16;
    case Tcx = 32;
    case Speed = 128;
    case HeartRate = 256;
    case Distance = 512;
    case Cadence = 1024;
    case Power = 2048;
    case Grade = 4096;
    case Resistance = 8192;
    case Protected = 16384;
}
