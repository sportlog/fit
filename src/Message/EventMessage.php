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

final class EventMessage extends Message
{
    #[Field("Timestamp", 253, FitBaseType::UINT32, ProfileType::DATETIME, units: "s")]
    public DateTime $timestamp;
    #[Field("Event", 0, FitBaseType::ENUM, ProfileType::EVENT)]
    public int $event;
    #[Field("EventType", 1, FitBaseType::ENUM, ProfileType::EVENTTYPE)]
    public int $eventType;
    #[Field("Data16", 2, FitBaseType::UINT16, ProfileType::UINT16)]
    public int $data16;
    #[Field("Data", 3, FitBaseType::UINT32, ProfileType::UINT32)]
    public int $data;
    #[Field("EventGroup", 4, FitBaseType::UINT8, ProfileType::UINT8)]
    public int $eventGroup;
    #[Field("Score", 7, FitBaseType::UINT16, ProfileType::UINT16)]
    public int $score;
    #[Field("OpponentScore", 8, FitBaseType::UINT16, ProfileType::UINT16)]
    public int $opponentScore;
    #[Field("FrontGearNum", 9, FitBaseType::UINT8Z, ProfileType::UINT8Z)]
    public int $frontGearNum;
    #[Field("FrontGear", 10, FitBaseType::UINT8Z, ProfileType::UINT8Z)]
    public int $frontGear;
    #[Field("RearGearNum", 11, FitBaseType::UINT8Z, ProfileType::UINT8Z)]
    public int $rearGearNum;
    #[Field("RearGear", 12, FitBaseType::UINT8Z, ProfileType::UINT8Z)]
    public int $rearGear;
    #[Field("DeviceIndex", 13, FitBaseType::UINT8, ProfileType::DEVICEINDEX)]
    public int $deviceIndex;
    #[Field("RadarThreatLevelMax", 21, FitBaseType::ENUM, ProfileType::RADARTHREATLEVELTYPE)]
    public int $radarThreatLevelMax;
    #[Field("RadarThreatCount", 22, FitBaseType::UINT8, ProfileType::UINT8)]
    public int $radarThreatCount;

    public function __construct()
    {
        parent::__construct("Event", MessageNumber::Event);
    }
}
