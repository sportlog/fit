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
 * SportMessage message
 */
#[Field('Sport', 0, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('SubSport', 1, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('Name', 3, FitBaseType::String->value, 1.0, 0.0, '', false, ProfileType::STRING)]
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
