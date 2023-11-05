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

enum AttitudeStage: int
{
    case Failed = 0;
    case Aligning = 1;
    case Degraded = 2;
    case Valid = 3;
}
