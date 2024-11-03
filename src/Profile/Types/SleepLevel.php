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

enum SleepLevel: int
{
    case Unmeasurable = 0;
    case Awake = 1;
    case Light = 2;
    case Deep = 3;
    case Rem = 4;
}
