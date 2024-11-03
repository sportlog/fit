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

enum FitnessEquipmentState: int
{
    case Ready = 0;
    case InUse = 1;
    case Paused = 2;
    case Unknown = 3;
}
