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

enum HrZoneCalc: int
{
    case Custom = 0;
    case PercentMaxHr = 1;
    case PercentHrr = 2;
    case PercentLthr = 3;
}
