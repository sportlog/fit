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

enum AutolapTrigger: int
{
    case Time = 0;
    case Distance = 1;
    case PositionStart = 2;
    case PositionLap = 3;
    case PositionWaypoint = 4;
    case PositionMarked = 5;
    case Off = 6;
}
