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

enum LocalDeviceType: int
{
    case Gps = 0;
    case Glonass = 1;
    case GpsGlonass = 2;
    case Accelerometer = 3;
    case Barometer = 4;
    case Temperature = 5;
    case Whr = 10;
    case SensorHub = 12;
}
