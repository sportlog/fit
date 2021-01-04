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
final class SegmentFileMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getFileUuid(): ?string
    {
        return $this->getValue(1);
    }

    public function getEnabled(): ?bool
    {
        return $this->getValue(3);
    }

    public function getUserProfilePrimaryKey(): ?int
    {
        return $this->getValue(4);
    }

    public function getLeaderType(): ?int
    {
        return $this->getValue(7);
    }

    public function getLeaderGroupPrimaryKey(): ?int
    {
        return $this->getValue(8);
    }

    public function getLeaderActivityId(): ?int
    {
        return $this->getValue(9);
    }

    public function getLeaderActivityIdString(): ?string
    {
        return $this->getValue(10);
    }

    public function getDefaultRaceLeader(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SegmentFile", MessageNumber::SegmentFile, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('FileUuid', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('Enabled', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('UserProfilePrimaryKey', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('LeaderType', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTLEADERBOARDTYPE),
            new Field('LeaderGroupPrimaryKey', 8, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('LeaderActivityId', 9, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('LeaderActivityIdString', 10, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('DefaultRaceLeader', 11, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)
        ]);
    }
}
