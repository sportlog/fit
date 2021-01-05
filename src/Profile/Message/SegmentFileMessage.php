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
        parent::__construct('SegmentFile', MessageNumber::SegmentFile);
    }

    /**
     * Gets the MessageIndex
     */
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    /**
     * Gets the FileUuid
     */
    public function getFileUuid(): ?string
    {
        return $this->getValue(1);
    }

    /**
     * Gets the Enabled
     */
    public function getEnabled(): ?bool
    {
        return $this->getValue(3);
    }

    /**
     * Gets the UserProfilePrimaryKey
     */
    public function getUserProfilePrimaryKey(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the LeaderType
     */
    public function getLeaderType(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the LeaderGroupPrimaryKey
     */
    public function getLeaderGroupPrimaryKey(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the LeaderActivityId
     */
    public function getLeaderActivityId(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the LeaderActivityIdString
     */
    public function getLeaderActivityIdString(): ?string
    {
        return $this->getValue(10);
    }

    /**
     * Gets the DefaultRaceLeader
     */
    public function getDefaultRaceLeader(): ?int
    {
        return $this->getValue(11);
    }
}
