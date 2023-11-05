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

enum SportBits0: int
{
    case Generic = 1;
    case Running = 2;
    case Cycling = 4;
    case Transition = 8;
    case FitnessEquipment = 16;
    case Swimming = 32;
    case Basketball = 64;
    case Soccer = 128;
}
