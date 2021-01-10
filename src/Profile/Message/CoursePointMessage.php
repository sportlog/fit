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
 * CoursePointMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Timestamp', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('PositionLat', 2, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('PositionLong', 3, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('Distance', 4, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('Type', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::COURSEPOINT)]
#[Field('Name', 6, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Favorite', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
final class CoursePointMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('CoursePoint', MessageNumber::CoursePoint);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the position lat
     */
    public function getPositionLat(): int|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the position long
     */
    public function getPositionLong(): int|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the distance
     */
    public function getDistance(): float|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the type
     */
    public function getType(): int|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the name
     */
    public function getName(): string|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the favorite
     */
    public function getFavorite(): bool|null
    {
        return $this->getFieldValue(8);
    }
}
