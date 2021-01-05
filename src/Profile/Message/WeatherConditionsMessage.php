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

    /**
     * Gets the Timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the WeatherReport
     */
    public function getWeatherReport(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the Temperature
     */
    public function getTemperature(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the Condition
     */
    public function getCondition(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the WindDirection
     */
    public function getWindDirection(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the WindSpeed
     */
    public function getWindSpeed(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the PrecipitationProbability
     */
    public function getPrecipitationProbability(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the TemperatureFeelsLike
     */
    public function getTemperatureFeelsLike(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the RelativeHumidity
     */
    public function getRelativeHumidity(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the Location
     */
    public function getLocation(): ?string
    {
        return $this->getValue(8);
    }

    /**
     * Gets the ObservedAtTime
     */
    public function getObservedAtTime(): ?DateTime
    {
        return $this->getValue(9);
    }

    /**
     * Gets the ObservedLocationLat
     */
    public function getObservedLocationLat(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Gets the ObservedLocationLong
     */
    public function getObservedLocationLong(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Gets the DayOfWeek
     */
    public function getDayOfWeek(): ?int
    {
        return $this->getValue(12);
    }

    /**
     * Gets the HighTemperature
     */
    public function getHighTemperature(): ?int
    {
        return $this->getValue(13);
    }

    /**
     * Gets the LowTemperature
     */
    public function getLowTemperature(): ?int
    {
        return $this->getValue(14);
    }
}
