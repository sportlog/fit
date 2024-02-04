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
        parent::__construct('Connectivity', MesgNum::CONNECTIVITY);
    }

    /**
     * Gets the bluetooth enabled
     */
    public function getBluetoothEnabled(): bool|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the bluetooth le enabled
     */
    public function getBluetoothLeEnabled(): bool|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the ant enabled
     */
    public function getAntEnabled(): bool|array|null
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
    public function getLiveTrackingEnabled(): bool|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the weather conditions enabled
     */
    public function getWeatherConditionsEnabled(): bool|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the weather alerts enabled
     */
    public function getWeatherAlertsEnabled(): bool|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the auto activity upload enabled
     */
    public function getAutoActivityUploadEnabled(): bool|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the course download enabled
     */
    public function getCourseDownloadEnabled(): bool|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the workout download enabled
     */
    public function getWorkoutDownloadEnabled(): bool|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the gps ephemeris download enabled
     */
    public function getGpsEphemerisDownloadEnabled(): bool|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the incident detection enabled
     */
    public function getIncidentDetectionEnabled(): bool|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the grouptrack enabled
     */
    public function getGrouptrackEnabled(): bool|array|null
    {
        return $this->getFieldValue(12);
    }
}
