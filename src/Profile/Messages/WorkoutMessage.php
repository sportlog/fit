<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
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
 * WorkoutMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MessageIndex)]
#[Field('Sport', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Sport)]
#[Field('Capabilities', 5, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::WorkoutCapabilities)]
#[Field('NumValidSteps', 6, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::Uint16)]
#[Field('WktName', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::String)]
#[Field('SubSport', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SubSport)]
#[Field('PoolLength', 14, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::Uint16)]
#[Field('PoolLengthUnit', 15, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DisplayMeasure)]
final class WorkoutMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Workout', MesgNum::Workout->value);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the capabilities
     */
    public function getCapabilities(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the num valid steps
     */
    public function getNumValidSteps(): int|array|null
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
    public function getSubSport(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the pool length
     */
    public function getPoolLength(): float|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the pool length unit
     */
    public function getPoolLengthUnit(): int|array|null
    {
        return $this->getFieldValue(15);
    }
}
