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

enum BpStatus: int
{
    case NoError = 0;
    case ErrorIncompleteData = 1;
    case ErrorNoMeasurement = 2;
    case ErrorDataOutOfRange = 3;
    case ErrorIrregularHeartRate = 4;
}
