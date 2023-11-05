<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
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
 * ActivityMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DateTime)]
#[Field('TotalTimerTime', 0, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::Uint32)]
#[Field('NumSessions', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::Uint16)]
#[Field('Type', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Activity)]
#[Field('Event', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Event)]
#[Field('EventType', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EventType)]
#[Field('LocalTimestamp', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LocalDateTime)]
#[Field('EventGroup', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
final class ActivityMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Activity', MesgNum::Activity->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the total timer time
     */
    public function getTotalTimerTime(): float|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the num sessions
     */
    public function getNumSessions(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the type
     */
    public function getType(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the event
     */
    public function getEvent(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the event type
     */
    public function getEventType(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the local timestamp
     */
    public function getLocalTimestamp(): DateTime|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the event group
     */
    public function getEventGroup(): int|array|null
    {
        return $this->getFieldValue(6);
    }
}
