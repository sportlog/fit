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
        parent::__construct('WeatherConditions', MessageNumber::WeatherConditions);
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getWeatherReport(): ?int
    {
        return $this->getValue(0);
    }

    public function getTemperature(): ?int
    {
        return $this->getValue(1);
    }

    public function getCondition(): ?int
    {
        return $this->getValue(2);
    }

    public function getWindDirection(): ?int
    {
        return $this->getValue(3);
    }

    public function getWindSpeed(): ?int
    {
        return $this->getValue(4);
    }

    public function getPrecipitationProbability(): ?int
    {
        return $this->getValue(5);
    }

    public function getTemperatureFeelsLike(): ?int
    {
        return $this->getValue(6);
    }

    public function getRelativeHumidity(): ?int
    {
        return $this->getValue(7);
    }

    public function getLocation(): ?string
    {
        return $this->getValue(8);
    }

    public function getObservedAtTime(): ?DateTime
    {
        return $this->getValue(9);
    }

    public function getObservedLocationLat(): ?int
    {
        return $this->getValue(10);
    }

    public function getObservedLocationLong(): ?int
    {
        return $this->getValue(11);
    }

    public function getDayOfWeek(): ?int
    {
        return $this->getValue(12);
    }

    public function getHighTemperature(): ?int
    {
        return $this->getValue(13);
    }

    public function getLowTemperature(): ?int
    {
        return $this->getValue(14);
    }
}
