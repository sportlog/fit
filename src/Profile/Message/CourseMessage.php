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
    #[Field('Sport', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
    public ?int $sport;

    #[Field('Name', 5, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $name;

    #[Field('Capabilities', 6, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::COURSECAPABILITIES)]
    public ?int $capabilities;

    #[Field('SubSport', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
    public ?int $subSport;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Course", MessageNumber::Course);
    }
}
