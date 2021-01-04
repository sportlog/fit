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
    public function getMaxHeartRate(): ?int
    {
        return $this->getValue(1);
    }

    public function getThresholdHeartRate(): ?int
    {
        return $this->getValue(2);
    }

    public function getFunctionalThresholdPower(): ?int
    {
        return $this->getValue(3);
    }

    public function getHrCalcType(): ?int
    {
        return $this->getValue(5);
    }

    public function getPwrCalcType(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("ZonesTarget", MessageNumber::ZonesTarget, [
        new Field('MaxHeartRate', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('ThresholdHeartRate', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('FunctionalThresholdPower', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('HrCalcType', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::HRZONECALC),
            new Field('PwrCalcType', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::PWRZONECALC)
        ]);
    }
}
