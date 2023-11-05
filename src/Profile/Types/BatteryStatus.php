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
