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

enum Intensity: int
{
    case Active = 0;
    case Rest = 1;
    case Warmup = 2;
    case Cooldown = 3;
    case Recovery = 4;
    case Interval = 5;
    case Other = 6;
}
