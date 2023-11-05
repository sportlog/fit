<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Types;

enum SportBits4: int
{
    case Sailing = 1;
    case IceSkating = 2;
    case SkyDiving = 4;
    case Snowshoeing = 8;
    case Snowmobiling = 16;
    case StandUpPaddleboarding = 32;
    case Surfing = 64;
    case Wakeboarding = 128;
}
