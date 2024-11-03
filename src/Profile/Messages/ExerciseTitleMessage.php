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
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

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
        parent::__construct('ExerciseTitle', MesgNum::ExerciseTitle->value);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the exercise category
     */
    public function getExerciseCategory(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the exercise name
     */
    public function getExerciseName(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the wkt step name
     */
    public function getWktStepName(): string|null
    {
        return $this->getFieldValue(2);
    }
}
