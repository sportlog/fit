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

enum WeatherSeverity: int
{
    case Unknown = 0;
    case Warning = 1;
    case Watch = 2;
    case Advisory = 3;
    case Statement = 4;
}
