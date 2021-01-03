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
 * ActivityMessage message
 */
final class ActivityMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('TotalTimerTime', 0, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $totalTimerTime;

    #[Field('NumSessions', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $numSessions;

    #[Field('Type', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITY)]
    public ?int $type;

    #[Field('Event', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT)]
    public ?int $event;

    #[Field('EventType', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE)]
    public ?int $eventType;

    #[Field('LocalTimestamp', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALDATETIME)]
    public ?DateTime $localTimestamp;

    #[Field('EventGroup', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $eventGroup;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Activity", MessageNumber::Activity);
    }
}
