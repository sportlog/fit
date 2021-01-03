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
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('FileUuid', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $fileUuid;

    #[Field('Enabled', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $enabled;

    #[Field('UserProfilePrimaryKey', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $userProfilePrimaryKey;

    #[Field('LeaderType', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTLEADERBOARDTYPE)]
    public ?int $leaderType;

    #[Field('LeaderGroupPrimaryKey', 8, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $leaderGroupPrimaryKey;

    #[Field('LeaderActivityId', 9, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $leaderActivityId;

    #[Field('LeaderActivityIdString', 10, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $leaderActivityIdString;

    #[Field('DefaultRaceLeader', 11, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $defaultRaceLeader;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SegmentFile", MessageNumber::SegmentFile);
    }
}
