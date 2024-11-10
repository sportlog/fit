<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.141 SDK
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\FitBaseType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * ActivityMessage message
 */
#[Field('Timestamp', 253, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('TotalTimerTime', 0, FitBaseType::Uint32->value, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('NumSessions', 1, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('Type', 2, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::ACTIVITY)]
#[Field('Event', 3, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::EVENT)]
#[Field('EventType', 4, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::EVENTTYPE)]
#[Field('LocalTimestamp', 5, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::LOCALDATETIME)]
#[Field('EventGroup', 6, FitBaseType::Uint8->value, 1.0, 0.0, '', false, ProfileType::UINT8)]
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
