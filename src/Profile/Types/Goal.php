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

enum Goal: int
{
    case Time = 0;
    case Distance = 1;
    case Calories = 2;
    case Frequency = 3;
    case Steps = 4;
    case Ascent = 5;
    case ActiveMinutes = 6;
}
