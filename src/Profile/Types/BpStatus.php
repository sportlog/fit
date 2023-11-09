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

class BpStatus
{
    public const NoError = 0;
    public const ErrorIncompleteData = 1;
    public const ErrorNoMeasurement = 2;
    public const ErrorDataOutOfRange = 3;
    public const ErrorIrregularHeartRate = 4;
}
