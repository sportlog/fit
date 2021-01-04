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
    public function getName(): ?string
    {
        return $this->getValue(0);
    }

    public function getUuid(): ?string
    {
        return $this->getValue(1);
    }

    public function getSport(): ?int
    {
        return $this->getValue(2);
    }

    public function getEnabled(): ?bool
    {
        return $this->getValue(3);
    }

    public function getUserProfilePrimaryKey(): ?int
    {
        return $this->getValue(4);
    }

    public function getDeviceId(): ?int
    {
        return $this->getValue(5);
    }

    public function getDefaultRaceLeader(): ?int
    {
        return $this->getValue(6);
    }

    public function getDeleteStatus(): ?int
    {
        return $this->getValue(7);
    }

    public function getSelectionType(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SegmentId", MessageNumber::SegmentId, [
        new Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('Uuid', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('Sport', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT),
            new Field('Enabled', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('UserProfilePrimaryKey', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('DeviceId', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('DefaultRaceLeader', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('DeleteStatus', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTDELETESTATUS),
            new Field('SelectionType', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SEGMENTSELECTIONTYPE)
        ]);
    }
}
