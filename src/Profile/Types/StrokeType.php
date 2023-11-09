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

class StrokeType
{
    public const NoEvent = 0;

    /**
     * stroke was detected but cannot be identified
     */
    public const Other = 1;
    public const Serve = 2;
    public const Forehand = 3;
    public const Backhand = 4;
    public const Smash = 5;
}
