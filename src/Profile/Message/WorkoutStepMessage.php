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
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('WktStepName', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $wktStepName;

    #[Field('DurationType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WKTSTEPDURATION)]
    public ?int $durationType;

    #[Field('DurationValue', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $durationValue;

    #[Field('TargetType', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WKTSTEPTARGET)]
    public ?int $targetType;

    #[Field('TargetValue', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $targetValue;

    #[Field('CustomTargetValueLow', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $customTargetValueLow;

    #[Field('CustomTargetValueHigh', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $customTargetValueHigh;

    #[Field('Intensity', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::INTENSITY)]
    public ?int $intensity;

    #[Field('Notes', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $notes;

    #[Field('Equipment', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WORKOUTEQUIPMENT)]
    public ?int $equipment;

    #[Field('ExerciseCategory', 10, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::EXERCISECATEGORY)]
    public ?int $exerciseCategory;

    #[Field('ExerciseName', 11, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $exerciseName;

    #[Field('ExerciseWeight', 12, FitBaseType::UINT16, 100.0, 0.0, 'kg', false, ProfileType::UINT16)]
    public ?int $exerciseWeight;

    #[Field('WeightDisplayUnit', 13, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::FITBASEUNIT)]
    public ?int $weightDisplayUnit;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("WorkoutStep", MessageNumber::WorkoutStep);
    }
}
