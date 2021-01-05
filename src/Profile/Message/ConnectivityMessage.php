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
     * Gets the BluetoothEnabled
     */
    public function getBluetoothEnabled(): ?bool
    {
        return $this->getValue(0);
    }

    /**
     * Gets the BluetoothLeEnabled
     */
    public function getBluetoothLeEnabled(): ?bool
    {
        return $this->getValue(1);
    }

    /**
     * Gets the AntEnabled
     */
    public function getAntEnabled(): ?bool
    {
        return $this->getValue(2);
    }

    /**
     * Gets the Name
     */
    public function getName(): ?string
    {
        return $this->getValue(3);
    }

    /**
     * Gets the LiveTrackingEnabled
     */
    public function getLiveTrackingEnabled(): ?bool
    {
        return $this->getValue(4);
    }

    /**
     * Gets the WeatherConditionsEnabled
     */
    public function getWeatherConditionsEnabled(): ?bool
    {
        return $this->getValue(5);
    }

    /**
     * Gets the WeatherAlertsEnabled
     */
    public function getWeatherAlertsEnabled(): ?bool
    {
        return $this->getValue(6);
    }

    /**
     * Gets the AutoActivityUploadEnabled
     */
    public function getAutoActivityUploadEnabled(): ?bool
    {
        return $this->getValue(7);
    }

    /**
     * Gets the CourseDownloadEnabled
     */
    public function getCourseDownloadEnabled(): ?bool
    {
        return $this->getValue(8);
    }

    /**
     * Gets the WorkoutDownloadEnabled
     */
    public function getWorkoutDownloadEnabled(): ?bool
    {
        return $this->getValue(9);
    }

    /**
     * Gets the GpsEphemerisDownloadEnabled
     */
    public function getGpsEphemerisDownloadEnabled(): ?bool
    {
        return $this->getValue(10);
    }

    /**
     * Gets the IncidentDetectionEnabled
     */
    public function getIncidentDetectionEnabled(): ?bool
    {
        return $this->getValue(11);
    }

    /**
     * Gets the GrouptrackEnabled
     */
    public function getGrouptrackEnabled(): ?bool
    {
        return $this->getValue(12);
    }
}
