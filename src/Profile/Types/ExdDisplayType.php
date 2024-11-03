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

enum ExdDisplayType: int
{
    case Numerical = 0;
    case Simple = 1;
    case Graph = 2;
    case Bar = 3;
    case CircleGraph = 4;
    case VirtualPartner = 5;
    case Balance = 6;
    case StringList = 7;
    case String = 8;
    case SimpleDynamicIcon = 9;
    case Gauge = 10;
}
