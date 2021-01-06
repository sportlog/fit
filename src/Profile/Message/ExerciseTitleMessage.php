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

    /**
     * Gets the message index
     */
    public function getMessageIndex(): ?int
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the exercise category
     */
    public function getExerciseCategory(): ?int
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the exercise name
     */
    public function getExerciseName(): ?int
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the wkt step name
     */
    public function getWktStepName(): ?string
    {
        return $this->getFieldValue(2);
    }
}
