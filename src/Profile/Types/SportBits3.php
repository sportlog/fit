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

enum SportBits3: int
{
    case Driving = 1;
    case Golf = 2;
    case HangGliding = 4;
    case HorsebackRiding = 8;
    case Hunting = 16;
    case Fishing = 32;
    case InlineSkating = 64;
    case RockClimbing = 128;
}
