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
 * SegmentLeaderboardEntryMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Type', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTLEADERBOARDTYPE)]
#[Field('GroupPrimaryKey', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('ActivityId', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('SegmentTime', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('ActivityIdString', 5, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
final class SegmentLeaderboardEntryMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SegmentLeaderboardEntry', MessageNumber::SegmentLeaderboardEntry);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the name
     */
    public function getName(): string|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the type
     */
    public function getType(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the group primary key
     */
    public function getGroupPrimaryKey(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the activity id
     */
    public function getActivityId(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the segment time
     */
    public function getSegmentTime(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the activity id string
     */
    public function getActivityIdString(): string|array|null
    {
        return $this->getFieldValue(5);
    }
}
