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
 * ConnectivityMessage message
 */
#[Field('BluetoothEnabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('BluetoothLeEnabled', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('AntEnabled', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('Name', 3, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('LiveTrackingEnabled', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('WeatherConditionsEnabled', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('WeatherAlertsEnabled', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('AutoActivityUploadEnabled', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('CourseDownloadEnabled', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('WorkoutDownloadEnabled', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('GpsEphemerisDownloadEnabled', 10, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('IncidentDetectionEnabled', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('GrouptrackEnabled', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
final class ConnectivityMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Connectivity', MessageNumber::Connectivity);
    }

    /**
     * Gets the bluetooth enabled
     */
    public function getBluetoothEnabled(): bool|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the bluetooth le enabled
     */
    public function getBluetoothLeEnabled(): bool|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the ant enabled
     */
    public function getAntEnabled(): bool|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the name
     */
    public function getName(): string|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the live tracking enabled
     */
    public function getLiveTrackingEnabled(): bool|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the weather conditions enabled
     */
    public function getWeatherConditionsEnabled(): bool|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the weather alerts enabled
     */
    public function getWeatherAlertsEnabled(): bool|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the auto activity upload enabled
     */
    public function getAutoActivityUploadEnabled(): bool|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the course download enabled
     */
    public function getCourseDownloadEnabled(): bool|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the workout download enabled
     */
    public function getWorkoutDownloadEnabled(): bool|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the gps ephemeris download enabled
     */
    public function getGpsEphemerisDownloadEnabled(): bool|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the incident detection enabled
     */
    public function getIncidentDetectionEnabled(): bool|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the grouptrack enabled
     */
    public function getGrouptrackEnabled(): bool|null
    {
        return $this->getFieldValue(12);
    }
}
