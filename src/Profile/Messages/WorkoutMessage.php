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
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\FitBaseType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * WorkoutMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Sport', 4, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('Capabilities', 5, FitBaseType::Uint32z->value, 1.0, 0.0, '', false, ProfileType::WORKOUTCAPABILITIES)]
#[Field('NumValidSteps', 6, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('WktName', 8, FitBaseType::String->value, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('SubSport', 11, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('PoolLength', 14, FitBaseType::Uint16->value, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('PoolLengthUnit', 15, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
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
