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
final class SegmentLeaderboardEntryMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $name;

    #[Field('Type', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTLEADERBOARDTYPE)]
    public ?int $type;

    #[Field('GroupPrimaryKey', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $groupPrimaryKey;

    #[Field('ActivityId', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $activityId;

    #[Field('SegmentTime', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $segmentTime;

    #[Field('ActivityIdString', 5, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $activityIdString;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SegmentLeaderboardEntry", MessageNumber::SegmentLeaderboardEntry);
    }
}
