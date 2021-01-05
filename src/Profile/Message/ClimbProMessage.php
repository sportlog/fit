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
 * ClimbProMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('PositionLat', 0, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('PositionLong', 1, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('ClimbProEvent', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CLIMBPROEVENT)]
#[Field('ClimbNumber', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('ClimbCategory', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('CurrentDist', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'm', false, ProfileType::FLOAT32)]
final class ClimbProMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ClimbPro', MessageNumber::ClimbPro);
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getPositionLat(): ?int
    {
        return $this->getValue(0);
    }

    public function getPositionLong(): ?int
    {
        return $this->getValue(1);
    }

    public function getClimbProEvent(): ?int
    {
        return $this->getValue(2);
    }

    public function getClimbNumber(): ?int
    {
        return $this->getValue(3);
    }

    public function getClimbCategory(): ?int
    {
        return $this->getValue(4);
    }

    public function getCurrentDist(): ?float
    {
        return $this->getValue(5);
    }
}
