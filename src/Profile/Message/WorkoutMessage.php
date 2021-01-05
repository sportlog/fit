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
#[Field('Sport', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('Capabilities', 5, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::WORKOUTCAPABILITIES)]
#[Field('NumValidSteps', 6, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('WktName', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('SubSport', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('PoolLength', 14, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('PoolLengthUnit', 15, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
final class WorkoutMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Workout', MessageNumber::Workout);
    }

    /**
     * Gets the Sport
     */
    public function getSport(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the Capabilities
     */
    public function getCapabilities(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the NumValidSteps
     */
    public function getNumValidSteps(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the WktName
     */
    public function getWktName(): ?string
    {
        return $this->getValue(8);
    }

    /**
     * Gets the SubSport
     */
    public function getSubSport(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Gets the PoolLength
     */
    public function getPoolLength(): ?int
    {
        return $this->getValue(14);
    }

    /**
     * Gets the PoolLengthUnit
     */
    public function getPoolLengthUnit(): ?int
    {
        return $this->getValue(15);
    }
}
