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

enum WeatherReport: int
{
    case Current = 0;
    case Forecast = 1;
    case HourlyForecast = 1;
    case DailyForecast = 2;
}
