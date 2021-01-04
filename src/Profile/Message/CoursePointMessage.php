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
final class CoursePointMessage extends Message
{
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

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("CoursePoint", MessageNumber::CoursePoint, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Timestamp', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('PositionLat', 2, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('PositionLong', 3, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32),
            new Field('Distance', 4, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32),
            new Field('Type', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::COURSEPOINT),
            new Field('Name', 6, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('Favorite', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)
        ]);
    }
}
