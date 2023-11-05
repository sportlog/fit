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

enum SportBits2: int
{
    case Mountaineering = 1;
    case Hiking = 2;
    case Multisport = 4;
    case Paddling = 8;
    case Flying = 16;
    case EBiking = 32;
    case Motorcycling = 64;
    case Boating = 128;
}
