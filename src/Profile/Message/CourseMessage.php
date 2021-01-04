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
 * CourseMessage message
 */
final class CourseMessage extends Message
{
    public function getSport(): ?int
    {
        return $this->getValue(4);
    }

    public function getName(): ?string
    {
        return $this->getValue(5);
    }

    public function getCapabilities(): ?int
    {
        return $this->getValue(6);
    }

    public function getSubSport(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Course", MessageNumber::Course, [
        new Field('Sport', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT),
            new Field('Name', 5, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('Capabilities', 6, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::COURSECAPABILITIES),
            new Field('SubSport', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)
        ]);
    }
}
