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

enum WeatherStatus: int
{
    case Clear = 0;
    case PartlyCloudy = 1;
    case MostlyCloudy = 2;
    case Rain = 3;
    case Snow = 4;
    case Windy = 5;
    case Thunderstorms = 6;
    case WintryMix = 7;
    case Fog = 8;
    case Hazy = 11;
    case Hail = 12;
    case ScatteredShowers = 13;
    case ScatteredThunderstorms = 14;
    case UnknownPrecipitation = 15;
    case LightRain = 16;
    case HeavyRain = 17;
    case LightSnow = 18;
    case HeavySnow = 19;
    case LightRainSnow = 20;
    case HeavyRainSnow = 21;
    case Cloudy = 22;
}
