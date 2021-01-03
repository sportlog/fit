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
 * ExerciseTitleMessage message
 */
final class ExerciseTitleMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('ExerciseCategory', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::EXERCISECATEGORY)]
    public ?int $exerciseCategory;

    #[Field('ExerciseName', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $exerciseName;

    #[Field('WktStepName', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $wktStepName;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("ExerciseTitle", MessageNumber::ExerciseTitle);
    }
}
