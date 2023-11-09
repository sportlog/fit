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

class CourseCapabilities
{
    public const Processed = 1;
    public const Valid = 2;
    public const Time = 4;
    public const Distance = 8;
    public const Position = 16;
    public const HeartRate = 32;
    public const Power = 64;
    public const Cadence = 128;
    public const Training = 256;
    public const Navigation = 512;
    public const Bikeway = 1024;

    /**
     * Denote course files to be used as flight plans
     */
    public const Aviation = 4096;
}
