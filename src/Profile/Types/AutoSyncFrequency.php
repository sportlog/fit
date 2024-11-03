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

enum AutoSyncFrequency: int
{
    case Never = 0;
    case Occasionally = 1;
    case Frequent = 2;
    case OnceADay = 3;
    case Remote = 4;
}
