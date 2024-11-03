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
 * WorkoutStepMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('WktStepName', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('DurationType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WKTSTEPDURATION)]
#[Field('DurationValue', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('TargetType', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WKTSTEPTARGET)]
#[Field('TargetValue', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('CustomTargetValueLow', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('CustomTargetValueHigh', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('Intensity', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::INTENSITY)]
#[Field('Notes', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Equipment', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WORKOUTEQUIPMENT)]
#[Field('ExerciseCategory', 10, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::EXERCISECATEGORY)]
#[Field('ExerciseName', 11, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('ExerciseWeight', 12, FitBaseType::UINT16, 100.0, 0.0, 'kg', false, ProfileType::UINT16)]
#[Field('WeightDisplayUnit', 13, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::FITBASEUNIT)]
#[Field('SecondaryTargetType', 19, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WKTSTEPTARGET)]
#[Field('SecondaryTargetValue', 20, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('SecondaryCustomTargetValueLow', 21, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('SecondaryCustomTargetValueHigh', 22, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
final class WorkoutStepMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('WorkoutStep', MesgNum::WorkoutStep->value);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the wkt step name
     */
    public function getWktStepName(): string|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the duration type
     */
    public function getDurationType(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the duration value
     */
    public function getDurationValue(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the target type
     */
    public function getTargetType(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the target value
     */
    public function getTargetValue(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the custom target value low
     */
    public function getCustomTargetValueLow(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the custom target value high
     */
    public function getCustomTargetValueHigh(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the intensity
     */
    public function getIntensity(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the notes
     */
    public function getNotes(): string|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the equipment
     */
    public function getEquipment(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the exercise category
     */
    public function getExerciseCategory(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the exercise name
     */
    public function getExerciseName(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the exercise weight
     */
    public function getExerciseWeight(): float|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the weight display unit
     */
    public function getWeightDisplayUnit(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the secondary target type
     */
    public function getSecondaryTargetType(): int|array|null
    {
        return $this->getFieldValue(19);
    }

    /**
     * Gets the secondary target value
     */
    public function getSecondaryTargetValue(): int|array|null
    {
        return $this->getFieldValue(20);
    }

    /**
     * Gets the secondary custom target value low
     */
    public function getSecondaryCustomTargetValueLow(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the secondary custom target value high
     */
    public function getSecondaryCustomTargetValueHigh(): int|array|null
    {
        return $this->getFieldValue(22);
    }
}
