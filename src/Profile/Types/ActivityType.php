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

enum ActivityType: int
{
    case Generic = 0;
    case Running = 1;
    case Cycling = 2;
    case Transition = 3;
    case FitnessEquipment = 4;
    case Swimming = 5;
    case Walking = 6;
    case Sedentary = 8;
    case All = 254;
}
