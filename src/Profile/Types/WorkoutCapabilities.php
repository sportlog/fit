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

class WorkoutCapabilities
{
    public const Interval = 1;
    public const Custom = 2;
    public const FitnessEquipment = 4;
    public const Firstbeat = 8;
    public const NewLeaf = 16;

    /**
     * For backwards compatibility. Watch should add missing id fields then clear flag.
     */
    public const Tcx = 32;

    /**
     * Speed source required for workout step.
     */
    public const Speed = 128;

    /**
     * Heart rate source required for workout step.
     */
    public const HeartRate = 256;

    /**
     * Distance source required for workout step.
     */
    public const Distance = 512;

    /**
     * Cadence source required for workout step.
     */
    public const Cadence = 1024;

    /**
     * Power source required for workout step.
     */
    public const Power = 2048;

    /**
     * Grade source required for workout step.
     */
    public const Grade = 4096;

    /**
     * Resistance source required for workout step.
     */
    public const Resistance = 8192;
    public const Protected = 16384;
}
