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
 * ClimbProMessage message
 */
#[Field('Timestamp', 253, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('PositionLat', 0, FitBaseType::Sint32->value, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('PositionLong', 1, FitBaseType::Sint32->value, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('ClimbProEvent', 2, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::CLIMBPROEVENT)]
#[Field('ClimbNumber', 3, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('ClimbCategory', 4, FitBaseType::Uint8->value, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('CurrentDist', 5, FitBaseType::Float32->value, 1.0, 0.0, 'm', false, ProfileType::FLOAT32)]
final class ClimbProMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ClimbPro', MesgNum::ClimbPro->value);
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
