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
 * EventMessage message
 */
final class EventMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT)]
    public ?int $event;

    #[Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE)]
    public ?int $eventType;

    #[Field('Data16', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $data16;

    #[Field('Data', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $data;

    #[Field('EventGroup', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $eventGroup;

    #[Field('Score', 7, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $score;

    #[Field('OpponentScore', 8, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $opponentScore;

    #[Field('FrontGearNum', 9, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $frontGearNum;

    #[Field('FrontGear', 10, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $frontGear;

    #[Field('RearGearNum', 11, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $rearGearNum;

    #[Field('RearGear', 12, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $rearGear;

    #[Field('DeviceIndex', 13, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)]
    public ?int $deviceIndex;

    #[Field('RadarThreatLevelMax', 21, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::RADARTHREATLEVELTYPE)]
    public ?int $radarThreatLevelMax;

    #[Field('RadarThreatCount', 22, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $radarThreatCount;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Event", MessageNumber::Event);
    }
}
