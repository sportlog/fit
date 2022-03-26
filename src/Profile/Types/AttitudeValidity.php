<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.78Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Types;

/**
 * AttitudeValidity constants
 */
final class AttitudeValidity
{
    public const TRACK_ANGLE_HEADING_VALID = 1;
    public const PITCH_VALID = 2;
    public const ROLL_VALID = 4;
    public const LATERAL_BODY_ACCEL_VALID = 8;
    public const NORMAL_BODY_ACCEL_VALID = 16;
    public const TURN_RATE_VALID = 32;
    public const HW_FAIL = 64;
    public const MAG_INVALID = 128;
    public const NO_GPS = 256;
    public const GPS_INVALID = 512;
    public const SOLUTION_COASTING = 1024;
    public const TRUE_TRACK_ANGLE = 2048;
    public const MAGNETIC_HEADING = 4096;
}
