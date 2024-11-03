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

enum GoalRecurrence: int
{
    case Off = 0;
    case Daily = 1;
    case Weekly = 2;
    case Monthly = 3;
    case Yearly = 4;
    case Custom = 5;
}
