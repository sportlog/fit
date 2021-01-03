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
    #[Field('BluetoothEnabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $bluetoothEnabled;

    #[Field('BluetoothLeEnabled', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $bluetoothLeEnabled;

    #[Field('AntEnabled', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $antEnabled;

    #[Field('Name', 3, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $name;

    #[Field('LiveTrackingEnabled', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $liveTrackingEnabled;

    #[Field('WeatherConditionsEnabled', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $weatherConditionsEnabled;

    #[Field('WeatherAlertsEnabled', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $weatherAlertsEnabled;

    #[Field('AutoActivityUploadEnabled', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $autoActivityUploadEnabled;

    #[Field('CourseDownloadEnabled', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $courseDownloadEnabled;

    #[Field('WorkoutDownloadEnabled', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $workoutDownloadEnabled;

    #[Field('GpsEphemerisDownloadEnabled', 10, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $gpsEphemerisDownloadEnabled;

    #[Field('IncidentDetectionEnabled', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $incidentDetectionEnabled;

    #[Field('GrouptrackEnabled', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $grouptrackEnabled;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Connectivity", MessageNumber::Connectivity);
    }
}
