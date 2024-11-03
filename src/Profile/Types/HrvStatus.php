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

enum HrvStatus: int
{
    case None = 0;
    case Poor = 1;
    case Low = 2;
    case Unbalanced = 3;
    case Balanced = 4;
}
