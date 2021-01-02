<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Message;

use DateTime;
use FIT\FitBaseType;

final class RecordMessage extends Message
{
    #[Field("Timestamp", 253, FitBaseType::UINT32, ProfileType::DATETIME, units: "s")]
    public DateTime $timestamp;
    #[Field("PositionLat", 0, FitBaseType::SINT32, ProfileType::SINT32, units: "semicircles")]
    public int $positionLat;
    #[Field("PositionLong", 1, FitBaseType::SINT32, ProfileType::SINT32, units: "semicircles")]
    public int $positionLong;
    #[Field("Altitude", 2, FitBaseType::UINT16, ProfileType::MANUFACTURER, 5.0, 500.0, "m")]
    public int $altitude;
    #[Field("HeartRate", 3, FitBaseType::UINT8, ProfileType::UINT8, units: "bpm")]
    public int $heartRate;
    #[Field("Cadence", 4, FitBaseType::UINT8, ProfileType::UINT8, units: "rpm")]
    public int $cadence;
    #[Field("Distance", 5, FitBaseType::UINT32, ProfileType::UINT32, 100.0, units: "m")]
    public int $distance;
    #[Field("Speed", 6, FitBaseType::UINT16, ProfileType::UINT16, 1000.0, 0.0, "m/s")]
    public int $speed;
    #[Field("Power", 7, FitBaseType::UINT16, ProfileType::UINT16, 1.0, 0.0, "watts")]
    public int $power;
    
    #[Field("EnhancedSpeed", 73, FitBaseType::UINT32, ProfileType::UINT32, 1000.0, units: "m/s")]
    public int $enhancedSpeed;
    #[Field("EnhancedAltitude", 74, FitBaseType::UINT32, ProfileType::UINT32, 5.0, 500.0, "m")]
    public int $enhancedAltitude;

    public function __construct()
    {
        parent::__construct("Record", MessageNumber::Record);
    }
}
