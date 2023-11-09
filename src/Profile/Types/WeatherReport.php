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

class WeatherReport
{
    public const Current = 0;

    /**
     * @deprecated Deprecated use hourly_forecast instead
     */
    public const Forecast = 1;
    public const HourlyForecast = 1;
    public const DailyForecast = 2;
}
