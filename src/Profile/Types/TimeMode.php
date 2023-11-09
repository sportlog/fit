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

class TimeMode
{
    public const Hour12 = 0;

    /**
     * Does not use a leading zero and has a colon
     */
    public const Hour24 = 1;

    /**
     * Uses a leading zero and does not have a colon
     */
    public const Military = 2;
    public const Hour12WithSeconds = 3;
    public const Hour24WithSeconds = 4;
    public const Utc = 5;
}
