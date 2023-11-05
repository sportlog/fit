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

enum Spo2MeasurementType: int
{
    case OffWrist = 0;
    case SpotCheck = 1;
    case ContinuousCheck = 2;
    case Periodic = 3;
}
