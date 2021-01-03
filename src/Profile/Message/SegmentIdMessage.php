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
 * SegmentIdMessage message
 */
final class SegmentIdMessage extends Message
{
    #[Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $name;

    #[Field('Uuid', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $uuid;

    #[Field('Sport', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
    public ?int $sport;

    #[Field('Enabled', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $enabled;

    #[Field('UserProfilePrimaryKey', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $userProfilePrimaryKey;

    #[Field('DeviceId', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $deviceId;

    #[Field('DefaultRaceLeader', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $defaultRaceLeader;

    #[Field('DeleteStatus', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTDELETESTATUS)]
    public ?int $deleteStatus;

    #[Field('SelectionType', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTSELECTIONTYPE)]
    public ?int $selectionType;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SegmentId", MessageNumber::SegmentId);
    }
}
