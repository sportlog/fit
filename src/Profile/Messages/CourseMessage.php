<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.60Release
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
 * CourseMessage message
 */
#[Field('Sport', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('Name', 5, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Capabilities', 6, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::COURSECAPABILITIES)]
#[Field('SubSport', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
final class CourseMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Course', MesgNum::COURSE);
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
    public function getName(): string|array|null
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
