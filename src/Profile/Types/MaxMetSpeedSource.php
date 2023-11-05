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

enum MaxMetSpeedSource: int
{
    case OnboardGps = 0;
    case ConnectedGps = 1;
    case Cadence = 2;
}
