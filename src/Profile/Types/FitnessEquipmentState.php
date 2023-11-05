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

enum FitnessEquipmentState: int
{
    case Ready = 0;
    case InUse = 1;
    case Paused = 2;
    case Unknown = 3;
}
