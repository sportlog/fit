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

enum SportBits5: int
{
    case WaterSkiing = 1;
    case Kayaking = 2;
    case Rafting = 4;
    case Windsurfing = 8;
    case Kitesurfing = 16;
    case Tactical = 32;
    case Jumpmaster = 64;
    case Boxing = 128;
}
