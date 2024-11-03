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

enum SessionTrigger: int
{
    case ActivityEnd = 0;
    case Manual = 1;
    case AutoMultiSport = 2;
    case FitnessEquipment = 3;
}
