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

enum SessionTrigger: int
{
    case ActivityEnd = 0;
    case Manual = 1;
    case AutoMultiSport = 2;
    case FitnessEquipment = 3;
}
