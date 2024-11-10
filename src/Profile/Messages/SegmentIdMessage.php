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
 * SegmentIdMessage message
 */
#[Field('Name', 0, FitBaseType::String->value, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Uuid', 1, FitBaseType::String->value, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Sport', 2, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('Enabled', 3, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('UserProfilePrimaryKey', 4, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('DeviceId', 5, FitBaseType::Uint32->value, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('DefaultRaceLeader', 6, FitBaseType::Uint8->value, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('DeleteStatus', 7, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SEGMENTDELETESTATUS)]
#[Field('SelectionType', 8, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SEGMENTSELECTIONTYPE)]
final class SegmentIdMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SegmentId', MesgNum::SegmentId->value);
    }

    /**
     * Gets the name
     */
    public function getName(): string|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the uuid
     */
    public function getUuid(): string|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(2);
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
     * Gets the device id
     */
    public function getDeviceId(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the default race leader
     */
    public function getDefaultRaceLeader(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the delete status
     */
    public function getDeleteStatus(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the selection type
     */
    public function getSelectionType(): int|array|null
    {
        return $this->getFieldValue(8);
    }
}
