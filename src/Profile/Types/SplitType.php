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

enum SplitType: int
{
    case AscentSplit = 1;
    case DescentSplit = 2;
    case IntervalActive = 3;
    case IntervalRest = 4;
    case IntervalWarmup = 5;
    case IntervalCooldown = 6;
    case IntervalRecovery = 7;
    case IntervalOther = 8;
    case ClimbActive = 9;
    case ClimbRest = 10;
    case SurfActive = 11;
    case RunActive = 12;
    case RunRest = 13;
    case WorkoutRound = 14;
    case RwdRun = 17;
    case RwdWalk = 18;
    case WindsurfActive = 21;
    case RwdStand = 22;
    case Transition = 23;
    case SkiLiftSplit = 28;
    case SkiRunSplit = 29;
}
