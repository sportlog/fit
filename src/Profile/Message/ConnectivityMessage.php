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
final class ConnectivityMessage extends Message
{
    public function getBluetoothEnabled(): ?bool
    {
        return $this->getValue(0);
    }

    public function getBluetoothLeEnabled(): ?bool
    {
        return $this->getValue(1);
    }

    public function getAntEnabled(): ?bool
    {
        return $this->getValue(2);
    }

    public function getName(): ?string
    {
        return $this->getValue(3);
    }

    public function getLiveTrackingEnabled(): ?bool
    {
        return $this->getValue(4);
    }

    public function getWeatherConditionsEnabled(): ?bool
    {
        return $this->getValue(5);
    }

    public function getWeatherAlertsEnabled(): ?bool
    {
        return $this->getValue(6);
    }

    public function getAutoActivityUploadEnabled(): ?bool
    {
        return $this->getValue(7);
    }

    public function getCourseDownloadEnabled(): ?bool
    {
        return $this->getValue(8);
    }

    public function getWorkoutDownloadEnabled(): ?bool
    {
        return $this->getValue(9);
    }

    public function getGpsEphemerisDownloadEnabled(): ?bool
    {
        return $this->getValue(10);
    }

    public function getIncidentDetectionEnabled(): ?bool
    {
        return $this->getValue(11);
    }

    public function getGrouptrackEnabled(): ?bool
    {
        return $this->getValue(12);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Connectivity", MessageNumber::Connectivity, [
        new Field('BluetoothEnabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('BluetoothLeEnabled', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('AntEnabled', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('Name', 3, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('LiveTrackingEnabled', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('WeatherConditionsEnabled', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('WeatherAlertsEnabled', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('AutoActivityUploadEnabled', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('CourseDownloadEnabled', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('WorkoutDownloadEnabled', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('GpsEphemerisDownloadEnabled', 10, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('IncidentDetectionEnabled', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('GrouptrackEnabled', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)
        ]);
    }
}
