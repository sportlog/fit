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
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getTotalTimerTime(): ?int
    {
        return $this->getValue(0);
    }

    public function getNumSessions(): ?int
    {
        return $this->getValue(1);
    }

    public function getType(): ?int
    {
        return $this->getValue(2);
    }

    public function getEvent(): ?int
    {
        return $this->getValue(3);
    }

    public function getEventType(): ?int
    {
        return $this->getValue(4);
    }

    public function getLocalTimestamp(): ?DateTime
    {
        return $this->getValue(5);
    }

    public function getEventGroup(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Activity", MessageNumber::Activity, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('TotalTimerTime', 0, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('NumSessions', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('Type', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITY),
            new Field('Event', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT),
            new Field('EventType', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE),
            new Field('LocalTimestamp', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALDATETIME),
            new Field('EventGroup', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)
        ]);
    }
}
