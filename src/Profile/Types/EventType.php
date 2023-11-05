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

enum EventType: int
{
    case Start = 0;
    case Stop = 1;
    case ConsecutiveDepreciated = 2;
    case Marker = 3;
    case StopAll = 4;
    case BeginDepreciated = 5;
    case EndDepreciated = 6;
    case EndAllDepreciated = 7;
    case StopDisable = 8;
    case StopDisableAll = 9;
}
