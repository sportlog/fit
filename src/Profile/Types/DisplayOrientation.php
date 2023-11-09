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

class DisplayOrientation
{
    /**
     * automatic if the device supports it
     */
    public const Auto = 0;
    public const Portrait = 1;
    public const Landscape = 2;

    /**
     * portrait mode but rotated 180 degrees
     */
    public const PortraitFlipped = 3;

    /**
     * landscape mode but rotated 180 degrees
     */
    public const LandscapeFlipped = 4;
}
