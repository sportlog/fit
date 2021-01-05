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
 * SportMessage message
 */
#[Field('Sport', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('SubSport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('Name', 3, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
final class SportMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Sport', MessageNumber::Sport);
    }

    /**
     * Gets the Sport
     */
    public function getSport(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the SubSport
     */
    public function getSubSport(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the Name
     */
    public function getName(): ?string
    {
        return $this->getValue(3);
    }
}
