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

class AttitudeValidity
{
    public const TrackAngleHeadingValid = 1;
    public const PitchValid = 2;
    public const RollValid = 4;
    public const LateralBodyAccelValid = 8;
    public const NormalBodyAccelValid = 16;
    public const TurnRateValid = 32;
    public const HwFail = 64;
    public const MagInvalid = 128;
    public const NoGps = 256;
    public const GpsInvalid = 512;
    public const SolutionCoasting = 1024;
    public const TrueTrackAngle = 2048;
    public const MagneticHeading = 4096;
}
