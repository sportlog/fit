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

enum SportEvent: int
{
    case Uncategorized = 0;
    case Geocaching = 1;
    case Fitness = 2;
    case Recreation = 3;
    case Race = 4;
    case SpecialEvent = 5;
    case Training = 6;
    case Transportation = 7;
    case Touring = 8;
}
