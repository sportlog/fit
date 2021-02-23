<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
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
 * SegmentFileMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('FileUuid', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Enabled', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('UserProfilePrimaryKey', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('LeaderType', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTLEADERBOARDTYPE)]
#[Field('LeaderGroupPrimaryKey', 8, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('LeaderActivityId', 9, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('LeaderActivityIdString', 10, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('DefaultRaceLeader', 11, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class SegmentFileMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SegmentFile', MesgNum::SEGMENT_FILE);
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
    public function getFileUuid(): string|array|null
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
    public function getLeaderActivityIdString(): string|array|null
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
