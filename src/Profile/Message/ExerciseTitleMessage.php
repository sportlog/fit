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
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('ExerciseCategory', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::EXERCISECATEGORY)]
#[Field('ExerciseName', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('WktStepName', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
final class ExerciseTitleMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ExerciseTitle', MessageNumber::ExerciseTitle);
    }

    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getExerciseCategory(): ?int
    {
        return $this->getValue(0);
    }

    public function getExerciseName(): ?int
    {
        return $this->getValue(1);
    }

    public function getWktStepName(): ?string
    {
        return $this->getValue(2);
    }
}
