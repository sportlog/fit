<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * SportMessage message
 */
#[Field('Sport', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Sport)]
#[Field('SubSport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SubSport)]
#[Field('Name', 3, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::String)]
final class SportMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Sport', MesgNum::Sport->value);
    }

    /**
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the name
     */
    public function getName(): string|null
    {
        return $this->getFieldValue(3);
    }
}
