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

enum SportBits1: int
{
    case Tennis = 1;
    case AmericanFootball = 2;
    case Training = 4;
    case Walking = 8;
    case CrossCountrySkiing = 16;
    case AlpineSkiing = 32;
    case Snowboarding = 64;
    case Rowing = 128;
}
