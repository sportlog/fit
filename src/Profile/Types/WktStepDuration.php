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

enum WktStepDuration: int
{
    case Time = 0;
    case Distance = 1;
    case HrLessThan = 2;
    case HrGreaterThan = 3;
    case Calories = 4;
    case Open = 5;
    case RepeatUntilStepsCmplt = 6;
    case RepeatUntilTime = 7;
    case RepeatUntilDistance = 8;
    case RepeatUntilCalories = 9;
    case RepeatUntilHrLessThan = 10;
    case RepeatUntilHrGreaterThan = 11;
    case RepeatUntilPowerLessThan = 12;
    case RepeatUntilPowerGreaterThan = 13;
    case PowerLessThan = 14;
    case PowerGreaterThan = 15;
    case TrainingPeaksTss = 16;
    case RepeatUntilPowerLastLapLessThan = 17;
    case RepeatUntilMaxPowerLastLapLessThan = 18;
    case Power3sLessThan = 19;
    case Power10sLessThan = 20;
    case Power30sLessThan = 21;
    case Power3sGreaterThan = 22;
    case Power10sGreaterThan = 23;
    case Power30sGreaterThan = 24;
    case PowerLapLessThan = 25;
    case PowerLapGreaterThan = 26;
    case RepeatUntilTrainingPeaksTss = 27;
    case RepetitionTime = 28;
    case Reps = 29;
    case TimeOnly = 31;
}
