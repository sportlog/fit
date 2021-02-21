<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Types;

/**
 * AttitudeValidity constants
 */
final class AttitudeValidity
{
    const TRACK_ANGLE_HEADING_VALID = '0x0001';
    const PITCH_VALID = '0x0002';
    const ROLL_VALID = '0x0004';
    const LATERAL_BODY_ACCEL_VALID = '0x0008';
    const NORMAL_BODY_ACCEL_VALID = '0x0010';
    const TURN_RATE_VALID = '0x0020';
    const HW_FAIL = '0x0040';
    const MAG_INVALID = '0x0080';
    const NO_GPS = '0x0100';
    const GPS_INVALID = '0x0200';
    const SOLUTION_COASTING = '0x0400';
    const TRUE_TRACK_ANGLE = '0x0800';
    const MAGNETIC_HEADING = '0x1000';
}
