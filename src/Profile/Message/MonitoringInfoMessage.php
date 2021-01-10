<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Message;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\MessageNumber;
use Sportlog\FIT\Profile\ProfileType;

/**
 * MonitoringInfoMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('LocalTimestamp', 0, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::LOCALDATETIME)]
#[Field('ActivityType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYTYPE)]
#[Field('CyclesToDistance', 3, FitBaseType::UINT16, 5000.0, 0.0, 'm/cycle', false, ProfileType::UINT16)]
#[Field('CyclesToCalories', 4, FitBaseType::UINT16, 5000.0, 0.0, 'kcal/cycle', false, ProfileType::UINT16)]
#[Field('RestingMetabolicRate', 5, FitBaseType::UINT16, 1.0, 0.0, 'kcal / day', false, ProfileType::UINT16)]
final class MonitoringInfoMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('MonitoringInfo', MessageNumber::MonitoringInfo);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the local timestamp
     */
    public function getLocalTimestamp(): DateTime|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the activity type
     */
    public function getActivityType(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the cycles to distance
     */
    public function getCyclesToDistance(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the cycles to calories
     */
    public function getCyclesToCalories(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the resting metabolic rate
     */
    public function getRestingMetabolicRate(): int|array|null
    {
        return $this->getFieldValue(5);
    }
}
