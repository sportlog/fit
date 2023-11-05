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

enum HrvStatus: int
{
    case None = 0;
    case Poor = 1;
    case Low = 2;
    case Unbalanced = 3;
    case Balanced = 4;
}
