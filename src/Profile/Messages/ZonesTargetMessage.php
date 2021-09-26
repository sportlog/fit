<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.60Release
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
 * ZonesTargetMessage message
 */
#[Field('MaxHeartRate', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('ThresholdHeartRate', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('FunctionalThresholdPower', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('HrCalcType', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::HRZONECALC)]
#[Field('PwrCalcType', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::PWRZONECALC)]
final class ZonesTargetMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ZonesTarget', MesgNum::ZONES_TARGET);
    }

    /**
     * Gets the max heart rate
     */
    public function getMaxHeartRate(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the threshold heart rate
     */
    public function getThresholdHeartRate(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the functional threshold power
     */
    public function getFunctionalThresholdPower(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the hr calc type
     */
    public function getHrCalcType(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the pwr calc type
     */
    public function getPwrCalcType(): int|array|null
    {
        return $this->getFieldValue(7);
    }
}
