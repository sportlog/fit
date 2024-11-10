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

enum WeatherReport: int
{
    case Current = 0;
    case HourlyForecast = 1;
    case DailyForecast = 2;
}
