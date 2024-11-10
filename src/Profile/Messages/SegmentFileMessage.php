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
 * SegmentFileMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('FileUuid', 1, FitBaseType::String->value, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Enabled', 3, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('UserProfilePrimaryKey', 4, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('LeaderType', 7, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SEGMENTLEADERBOARDTYPE)]
#[Field('LeaderGroupPrimaryKey', 8, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('LeaderActivityId', 9, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('LeaderActivityIdString', 10, FitBaseType::String->value, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('DefaultRaceLeader', 11, FitBaseType::Uint8->value, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class SegmentFileMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SegmentFile', MesgNum::SegmentFile->value);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the file uuid
     */
    public function getFileUuid(): string|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the enabled
     */
    public function getEnabled(): bool|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the user profile primary key
     */
    public function getUserProfilePrimaryKey(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the leader type
     */
    public function getLeaderType(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the leader group primary key
     */
    public function getLeaderGroupPrimaryKey(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the leader activity id
     */
    public function getLeaderActivityId(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the leader activity id string
     */
    public function getLeaderActivityIdString(): string|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the default race leader
     */
    public function getDefaultRaceLeader(): int|array|null
    {
        return $this->getFieldValue(11);
    }
}
