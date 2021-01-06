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
final class WorkoutStepMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('WorkoutStep', MessageNumber::WorkoutStep);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    /**
     * Gets the wkt step name
     */
    public function getWktStepName(): ?string
    {
        return $this->getValue(0);
    }

    /**
     * Gets the duration type
     */
    public function getDurationType(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the duration value
     */
    public function getDurationValue(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the target type
     */
    public function getTargetType(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the target value
     */
    public function getTargetValue(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the custom target value low
     */
    public function getCustomTargetValueLow(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the custom target value high
     */
    public function getCustomTargetValueHigh(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the intensity
     */
    public function getIntensity(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the notes
     */
    public function getNotes(): ?string
    {
        return $this->getValue(8);
    }

    /**
     * Gets the equipment
     */
    public function getEquipment(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the exercise category
     */
    public function getExerciseCategory(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Gets the exercise name
     */
    public function getExerciseName(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Gets the exercise weight
     */
    public function getExerciseWeight(): ?int
    {
        return $this->getValue(12);
    }

    /**
     * Gets the weight display unit
     */
    public function getWeightDisplayUnit(): ?int
    {
        return $this->getValue(13);
    }
}
