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
 * MonitoringInfoMessage message
 */
final class MonitoringInfoMessage extends Message
{
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getLocalTimestamp(): ?DateTime
    {
        return $this->getValue(0);
    }

    public function getActivityType(): ?int
    {
        return $this->getValue(1);
    }

    public function getCyclesToDistance(): ?int
    {
        return $this->getValue(3);
    }

    public function getCyclesToCalories(): ?int
    {
        return $this->getValue(4);
    }

    public function getRestingMetabolicRate(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("MonitoringInfo", MessageNumber::MonitoringInfo, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('LocalTimestamp', 0, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::LOCALDATETIME),
            new Field('ActivityType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYTYPE),
            new Field('CyclesToDistance', 3, FitBaseType::UINT16, 5000.0, 0.0, 'm/cycle', false, ProfileType::UINT16),
            new Field('CyclesToCalories', 4, FitBaseType::UINT16, 5000.0, 0.0, 'kcal/cycle', false, ProfileType::UINT16),
            new Field('RestingMetabolicRate', 5, FitBaseType::UINT16, 1.0, 0.0, 'kcal / day', false, ProfileType::UINT16)
        ]);
    }
}
