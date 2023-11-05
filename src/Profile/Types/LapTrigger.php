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

enum LapTrigger: int
{
    case Manual = 0;
    case Time = 1;
    case Distance = 2;
    case PositionStart = 3;
    case PositionLap = 4;
    case PositionWaypoint = 5;
    case PositionMarked = 6;
    case SessionEnd = 7;
    case FitnessEquipment = 8;
}
