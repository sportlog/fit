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

enum MaxMetSpeedSource: int
{
    case OnboardGps = 0;
    case ConnectedGps = 1;
    case Cadence = 2;
}
