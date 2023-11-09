<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
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
 * SegmentIdMessage message
 */
#[Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::String)]
#[Field('Uuid', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::String)]
#[Field('Sport', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Sport)]
#[Field('Enabled', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Bool)]
#[Field('UserProfilePrimaryKey', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::Uint32)]
#[Field('DeviceId', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::Uint32)]
#[Field('DefaultRaceLeader', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('DeleteStatus', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SegmentDeleteStatus)]
#[Field('SelectionType', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SegmentSelectionType)]
final class SegmentIdMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SegmentId', MesgNum::SegmentId);
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
