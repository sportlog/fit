<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.60Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Types;

/**
 * AttitudeValidity constants
 */
final class AttitudeValidity
{
    const TRACK_ANGLE_HEADING_VALID = 1;
    const PITCH_VALID = 2;
    const ROLL_VALID = 4;
    const LATERAL_BODY_ACCEL_VALID = 8;
    const NORMAL_BODY_ACCEL_VALID = 16;
    const TURN_RATE_VALID = 32;
    const HW_FAIL = 64;
    const MAG_INVALID = 128;
    const NO_GPS = 256;
    const GPS_INVALID = 512;
    const SOLUTION_COASTING = 1024;
    const TRUE_TRACK_ANGLE = 2048;
    const MAGNETIC_HEADING = 4096;
}
