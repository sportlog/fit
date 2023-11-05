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

enum CourseCapabilities: int
{
    case Processed = 1;
    case Valid = 2;
    case Time = 4;
    case Distance = 8;
    case Position = 16;
    case HeartRate = 32;
    case Power = 64;
    case Cadence = 128;
    case Training = 256;
    case Navigation = 512;
    case Bikeway = 1024;
    case Aviation = 4096;
}
