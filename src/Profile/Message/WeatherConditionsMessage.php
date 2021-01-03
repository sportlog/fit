<?php

/**
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace FIT\Profile\Message;

use DateTime;
use FIT\FitBaseType;
use FIT\Profile\Field;
use FIT\Profile\Message;
use FIT\Profile\MessageNumber;
use FIT\Profile\ProfileType;

/**
 * WeatherConditionsMessage message
 */
final class WeatherConditionsMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('WeatherReport', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WEATHERREPORT)]
    public ?int $weatherReport;

    #[Field('Temperature', 1, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
    public ?int $temperature;

    #[Field('Condition', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WEATHERSTATUS)]
    public ?int $condition;

    #[Field('WindDirection', 3, FitBaseType::UINT16, 1.0, 0.0, 'degrees', false, ProfileType::UINT16)]
    public ?int $windDirection;

    #[Field('WindSpeed', 4, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $windSpeed;

    #[Field('PrecipitationProbability', 5, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $precipitationProbability;

    #[Field('TemperatureFeelsLike', 6, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
    public ?int $temperatureFeelsLike;

    #[Field('RelativeHumidity', 7, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $relativeHumidity;

    #[Field('Location', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $location;

    #[Field('ObservedAtTime', 9, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $observedAtTime;

    #[Field('ObservedLocationLat', 10, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $observedLocationLat;

    #[Field('ObservedLocationLong', 11, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $observedLocationLong;

    #[Field('DayOfWeek', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DAYOFWEEK)]
    public ?int $dayOfWeek;

    #[Field('HighTemperature', 13, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
    public ?int $highTemperature;

    #[Field('LowTemperature', 14, FitBaseType::SINT8, 1.0, 0.0, 'C', false, ProfileType::SINT8)]
    public ?int $lowTemperature;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("WeatherConditions", MessageNumber::WeatherConditions);
    }
}
