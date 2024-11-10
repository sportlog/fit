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
 * WorkoutSessionMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Sport', 0, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('SubSport', 1, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('NumValidSteps', 2, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('FirstStepIndex', 3, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('PoolLength', 4, FitBaseType::Uint16->value, 100.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('PoolLengthUnit', 5, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)]
final class WorkoutSessionMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('WorkoutSession', MesgNum::WorkoutSession->value);
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
        return $this->getFieldValue(0);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the num valid steps
     */
    public function getNumValidSteps(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the first step index
     */
    public function getFirstStepIndex(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the pool length
     */
    public function getPoolLength(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the pool length unit
     */
    public function getPoolLengthUnit(): int|array|null
    {
        return $this->getFieldValue(5);
    }
}
