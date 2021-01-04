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
final class WorkoutStepMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getWktStepName(): ?string
    {
        return $this->getValue(0);
    }

    public function getDurationType(): ?int
    {
        return $this->getValue(1);
    }

    public function getDurationValue(): ?int
    {
        return $this->getValue(2);
    }

    public function getTargetType(): ?int
    {
        return $this->getValue(3);
    }

    public function getTargetValue(): ?int
    {
        return $this->getValue(4);
    }

    public function getCustomTargetValueLow(): ?int
    {
        return $this->getValue(5);
    }

    public function getCustomTargetValueHigh(): ?int
    {
        return $this->getValue(6);
    }

    public function getIntensity(): ?int
    {
        return $this->getValue(7);
    }

    public function getNotes(): ?string
    {
        return $this->getValue(8);
    }

    public function getEquipment(): ?int
    {
        return $this->getValue(9);
    }

    public function getExerciseCategory(): ?int
    {
        return $this->getValue(10);
    }

    public function getExerciseName(): ?int
    {
        return $this->getValue(11);
    }

    public function getExerciseWeight(): ?int
    {
        return $this->getValue(12);
    }

    public function getWeightDisplayUnit(): ?int
    {
        return $this->getValue(13);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("WorkoutStep", MessageNumber::WorkoutStep, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('WktStepName', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('DurationType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WKTSTEPDURATION),
            new Field('DurationValue', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('TargetType', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WKTSTEPTARGET),
            new Field('TargetValue', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('CustomTargetValueLow', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('CustomTargetValueHigh', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('Intensity', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::INTENSITY),
            new Field('Notes', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('Equipment', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WORKOUTEQUIPMENT),
            new Field('ExerciseCategory', 10, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::EXERCISECATEGORY),
            new Field('ExerciseName', 11, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('ExerciseWeight', 12, FitBaseType::UINT16, 100.0, 0.0, 'kg', false, ProfileType::UINT16),
            new Field('WeightDisplayUnit', 13, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::FITBASEUNIT)
        ]);
    }
}
