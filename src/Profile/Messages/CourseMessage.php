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
 * CourseMessage message
 */
#[Field('Sport', 4, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('Name', 5, FitBaseType::String->value, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Capabilities', 6, FitBaseType::Uint32z->value, 1.0, 0.0, '', false, ProfileType::COURSECAPABILITIES)]
#[Field('SubSport', 7, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
final class CourseMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Course', MesgNum::Course->value);
    }

    /**
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the name
     */
    public function getName(): string|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the capabilities
     */
    public function getCapabilities(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|array|null
    {
        return $this->getFieldValue(7);
    }
}
