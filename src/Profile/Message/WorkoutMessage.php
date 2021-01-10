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
     * Gets the sport
     */
    public function getSport(): int|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the capabilities
     */
    public function getCapabilities(): int|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the num valid steps
     */
    public function getNumValidSteps(): int|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the wkt name
     */
    public function getWktName(): string|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the pool length
     */
    public function getPoolLength(): float|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the pool length unit
     */
    public function getPoolLengthUnit(): int|null
    {
        return $this->getFieldValue(15);
    }
}
