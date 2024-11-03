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

enum SensorType: int
{
    case Accelerometer = 0;
    case Gyroscope = 1;
    case Compass = 2;
    case Barometer = 3;
}
