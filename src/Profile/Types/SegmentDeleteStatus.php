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

enum SegmentDeleteStatus: int
{
    case DoNotDelete = 0;
    case DeleteOne = 1;
    case DeleteAll = 2;
}
