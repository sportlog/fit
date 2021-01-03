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
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('LocalTimestamp', 0, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::LOCALDATETIME)]
    public ?DateTime $localTimestamp;

    #[Field('ActivityType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYTYPE)]
    public ?int $activityType;

    #[Field('CyclesToDistance', 3, FitBaseType::UINT16, 5000.0, 0.0, 'm/cycle', false, ProfileType::UINT16)]
    public ?int $cyclesToDistance;

    #[Field('CyclesToCalories', 4, FitBaseType::UINT16, 5000.0, 0.0, 'kcal/cycle', false, ProfileType::UINT16)]
    public ?int $cyclesToCalories;

    #[Field('RestingMetabolicRate', 5, FitBaseType::UINT16, 1.0, 0.0, 'kcal / day', false, ProfileType::UINT16)]
    public ?int $restingMetabolicRate;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("MonitoringInfo", MessageNumber::MonitoringInfo);
    }
}
