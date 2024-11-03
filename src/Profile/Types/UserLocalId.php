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

enum UserLocalId: int
{
    case LocalMin = 0;
    case LocalMax = 15;
    case StationaryMin = 16;
    case StationaryMax = 255;
    case PortableMin = 256;
    case PortableMax = 65534;
}
