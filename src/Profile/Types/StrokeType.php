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

enum StrokeType: int
{
    case NoEvent = 0;
    case Other = 1;
    case Serve = 2;
    case Forehand = 3;
    case Backhand = 4;
    case Smash = 5;
}
