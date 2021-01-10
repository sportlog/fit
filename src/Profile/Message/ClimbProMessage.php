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

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the position lat
     */
    public function getPositionLat(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the position long
     */
    public function getPositionLong(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the climb pro event
     */
    public function getClimbProEvent(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the climb number
     */
    public function getClimbNumber(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the climb category
     */
    public function getClimbCategory(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the current dist
     */
    public function getCurrentDist(): float|array|null
    {
        return $this->getFieldValue(5);
    }
}
