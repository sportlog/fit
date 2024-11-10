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
 * SegmentLeaderboardEntryMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Name', 0, FitBaseType::String->value, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Type', 1, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SEGMENTLEADERBOARDTYPE)]
#[Field('GroupPrimaryKey', 2, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('ActivityId', 3, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('SegmentTime', 4, FitBaseType::Uint32->value, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('ActivityIdString', 5, FitBaseType::String->value, 1.0, 0.0, '', false, ProfileType::STRING)]
final class SegmentLeaderboardEntryMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SegmentLeaderboardEntry', MesgNum::SegmentLeaderboardEntry->value);
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
    public function getName(): string|null
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
    public function getActivityIdString(): string|null
    {
        return $this->getFieldValue(5);
    }
}
