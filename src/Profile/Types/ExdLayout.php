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

class ExdLayout
{
    public const FullScreen = 0;
    public const HalfVertical = 1;
    public const HalfHorizontal = 2;
    public const HalfVerticalRightSplit = 3;
    public const HalfHorizontalBottomSplit = 4;
    public const FullQuarterSplit = 5;
    public const HalfVerticalLeftSplit = 6;
    public const HalfHorizontalTopSplit = 7;

    /**
     * The EXD may display the configured concepts in any layout it sees fit.
     */
    public const Dynamic = 8;
}
