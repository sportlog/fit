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

class DiveAlarmType
{
    /**
     * Alarm when a certain depth is crossed
     */
    public const Depth = 0;

    /**
     * Alarm when a certain time has transpired
     */
    public const Time = 1;

    /**
     * Alarm when a certain ascent or descent rate is exceeded
     */
    public const Speed = 2;
}
