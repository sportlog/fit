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

enum RadarThreatLevelType: int
{
    case ThreatUnknown = 0;
    case ThreatNone = 1;
    case ThreatApproaching = 2;
    case ThreatApproachingFast = 3;
}
