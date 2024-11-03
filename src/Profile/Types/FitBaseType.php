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

enum FitBaseType: int
{
    case Enum = 0;
    case Sint8 = 1;
    case Uint8 = 2;
    case Sint16 = 131;
    case Uint16 = 132;
    case Sint32 = 133;
    case Uint32 = 134;
    case String = 7;
    case Float32 = 136;
    case Float64 = 137;
    case Uint8z = 10;
    case Uint16z = 139;
    case Uint32z = 140;
    case Byte = 13;
    case Sint64 = 142;
    case Uint64 = 143;
    case Uint64z = 144;
}
