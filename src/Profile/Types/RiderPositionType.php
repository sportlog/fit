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

enum RiderPositionType: int
{
    case Seated = 0;
    case Standing = 1;
    case TransitionToSeated = 2;
    case TransitionToStanding = 3;
}
