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

enum BatteryStatus: int
{
    case New = 1;
    case Good = 2;
    case Ok = 3;
    case Low = 4;
    case Critical = 5;
    case Charging = 6;
    case Unknown = 7;
}
