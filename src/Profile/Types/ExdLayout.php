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

enum ExdLayout: int
{
    case FullScreen = 0;
    case HalfVertical = 1;
    case HalfHorizontal = 2;
    case HalfVerticalRightSplit = 3;
    case HalfHorizontalBottomSplit = 4;
    case FullQuarterSplit = 5;
    case HalfVerticalLeftSplit = 6;
    case HalfHorizontalTopSplit = 7;
    case Dynamic = 8;
}
