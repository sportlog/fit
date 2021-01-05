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

    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(1);
    }

    public function getPositionLat(): ?int
    {
        return $this->getValue(2);
    }

    public function getPositionLong(): ?int
    {
        return $this->getValue(3);
    }

    public function getDistance(): ?int
    {
        return $this->getValue(4);
    }

    public function getType(): ?int
    {
        return $this->getValue(5);
    }

    public function getName(): ?string
    {
        return $this->getValue(6);
    }

    public function getFavorite(): ?bool
    {
        return $this->getValue(8);
    }
}
