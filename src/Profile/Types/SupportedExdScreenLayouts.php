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

enum SupportedExdScreenLayouts: int
{
    case FullScreen = 1;
    case HalfVertical = 2;
    case HalfHorizontal = 4;
    case HalfVerticalRightSplit = 8;
    case HalfHorizontalBottomSplit = 16;
    case FullQuarterSplit = 32;
    case HalfVerticalLeftSplit = 64;
    case HalfHorizontalTopSplit = 128;
}
