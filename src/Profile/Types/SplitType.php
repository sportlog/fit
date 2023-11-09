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

class SplitType
{
    public const AscentSplit = 1;
    public const DescentSplit = 2;
    public const IntervalActive = 3;
    public const IntervalRest = 4;
    public const IntervalWarmup = 5;
    public const IntervalCooldown = 6;
    public const IntervalRecovery = 7;
    public const IntervalOther = 8;
    public const ClimbActive = 9;
    public const ClimbRest = 10;
    public const SurfActive = 11;
    public const RunActive = 12;
    public const RunRest = 13;
    public const WorkoutRound = 14;

    /**
     * run/walk detection running
     */
    public const RwdRun = 17;

    /**
     * run/walk detection walking
     */
    public const RwdWalk = 18;
    public const WindsurfActive = 21;

    /**
     * run/walk detection standing
     */
    public const RwdStand = 22;

    /**
     * Marks the time going from ascent_split to descent_split/used in backcountry ski
     */
    public const Transition = 23;
    public const SkiLiftSplit = 28;
    public const SkiRunSplit = 29;
}
