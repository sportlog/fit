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
#[Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Uuid', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Sport', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('Enabled', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('UserProfilePrimaryKey', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('DeviceId', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('DefaultRaceLeader', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('DeleteStatus', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTDELETESTATUS)]
#[Field('SelectionType', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTSELECTIONTYPE)]
final class SegmentIdMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SegmentId', MessageNumber::SegmentId);
    }

    /**
     * Gets the Name
     */
    public function getName(): ?string
    {
        return $this->getValue(0);
    }

    /**
     * Gets the Uuid
     */
    public function getUuid(): ?string
    {
        return $this->getValue(1);
    }

    /**
     * Gets the Sport
     */
    public function getSport(): ?int
    {
        return $this->getValue(2);
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
     * Gets the DeviceId
     */
    public function getDeviceId(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the DefaultRaceLeader
     */
    public function getDefaultRaceLeader(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the DeleteStatus
     */
    public function getDeleteStatus(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the SelectionType
     */
    public function getSelectionType(): ?int
    {
        return $this->getValue(8);
    }
}
