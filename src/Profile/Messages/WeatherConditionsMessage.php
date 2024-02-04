<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.126Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * WeatherConditionsMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('WeatherReport', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WEATHERREPORT)]
#[Field('Temperature', 1, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('Condition', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WEATHERSTATUS)]
#[Field('WindDirection', 3, FitBaseType::UINT16, 1.0, 0.0, 'degrees', false, ProfileType::UINT16)]
#[Field('WindSpeed', 4, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('PrecipitationProbability', 5, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('TemperatureFeelsLike', 6, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('RelativeHumidity', 7, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Location', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('ObservedAtTime', 9, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('ObservedLocationLat', 10, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('ObservedLocationLong', 11, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('DayOfWeek', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DAYOFWEEK)]
#[Field('HighTemperature', 13, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
#[Field('LowTemperature', 14, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
final class WeatherConditionsMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('WeatherConditions', MesgNum::WEATHER_CONDITIONS);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the weather report
     */
    public function getWeatherReport(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the temperature
     */
    public function getTemperature(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the condition
     */
    public function getCondition(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the wind direction
     */
    public function getWindDirection(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the wind speed
     */
    public function getWindSpeed(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the precipitation probability
     */
    public function getPrecipitationProbability(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the temperature feels like
     */
    public function getTemperatureFeelsLike(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the relative humidity
     */
    public function getRelativeHumidity(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the location
     */
    public function getLocation(): string|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the observed at time
     */
    public function getObservedAtTime(): DateTime|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the observed location lat
     */
    public function getObservedLocationLat(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the observed location long
     */
    public function getObservedLocationLong(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the day of week
     */
    public function getDayOfWeek(): int|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the high temperature
     */
    public function getHighTemperature(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the low temperature
     */
    public function getLowTemperature(): int|array|null
    {
        return $this->getFieldValue(14);
    }
}
