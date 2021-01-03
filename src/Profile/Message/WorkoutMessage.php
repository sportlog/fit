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
 * WorkoutMessage message
 */
final class WorkoutMessage extends Message
{
    #[Field('Sport', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
    public ?int $sport;

    #[Field('Capabilities', 5, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::WORKOUTCAPABILITIES)]
    public ?int $capabilities;

    #[Field('NumValidSteps', 6, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $numValidSteps;

    #[Field('WktName', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $wktName;

    #[Field('SubSport', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
    public ?int $subSport;

    #[Field('PoolLength', 14, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $poolLength;

    #[Field('PoolLengthUnit', 15, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
    public ?int $poolLengthUnit;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Workout", MessageNumber::Workout);
    }
}
