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
 * ZonesTargetMessage message
 */
final class ZonesTargetMessage extends Message
{
    #[Field('MaxHeartRate', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $maxHeartRate;

    #[Field('ThresholdHeartRate', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $thresholdHeartRate;

    #[Field('FunctionalThresholdPower', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $functionalThresholdPower;

    #[Field('HrCalcType', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::HRZONECALC)]
    public ?int $hrCalcType;

    #[Field('PwrCalcType', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::PWRZONECALC)]
    public ?int $pwrCalcType;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("ZonesTarget", MessageNumber::ZonesTarget);
    }
}
