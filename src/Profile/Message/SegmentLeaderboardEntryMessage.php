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

    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getName(): ?string
    {
        return $this->getValue(0);
    }

    public function getType(): ?int
    {
        return $this->getValue(1);
    }

    public function getGroupPrimaryKey(): ?int
    {
        return $this->getValue(2);
    }

    public function getActivityId(): ?int
    {
        return $this->getValue(3);
    }

    public function getSegmentTime(): ?int
    {
        return $this->getValue(4);
    }

    public function getActivityIdString(): ?string
    {
        return $this->getValue(5);
    }
}
