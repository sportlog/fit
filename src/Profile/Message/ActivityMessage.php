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
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('TotalTimerTime', 0, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('NumSessions', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('Type', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITY)]
#[Field('Event', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT)]
#[Field('EventType', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE)]
#[Field('LocalTimestamp', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALDATETIME)]
#[Field('EventGroup', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class ActivityMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Activity', MessageNumber::Activity);
    }

    /**
     * Gets the Timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the TotalTimerTime
     */
    public function getTotalTimerTime(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the NumSessions
     */
    public function getNumSessions(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the Type
     */
    public function getType(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the Event
     */
    public function getEvent(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the EventType
     */
    public function getEventType(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the LocalTimestamp
     */
    public function getLocalTimestamp(): ?DateTime
    {
        return $this->getValue(5);
    }

    /**
     * Gets the EventGroup
     */
    public function getEventGroup(): ?int
    {
        return $this->getValue(6);
    }
}
