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

enum MesgCount: int
{
    case NumPerFile = 0;
    case MaxPerFile = 1;
    case MaxPerFileType = 2;
}
