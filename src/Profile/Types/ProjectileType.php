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

enum ProjectileType: int
{
    case Arrow = 0;
    case RifleCartridge = 1;
    case PistolCartridge = 2;
    case Shotshell = 3;
    case AirRiflePellet = 4;
    case Other = 5;
}
