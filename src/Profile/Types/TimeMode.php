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

enum TimeMode: int
{
    case Hour12 = 0;
    case Hour24 = 1;
    case Military = 2;
    case Hour12WithSeconds = 3;
    case Hour24WithSeconds = 4;
    case Utc = 5;
}
