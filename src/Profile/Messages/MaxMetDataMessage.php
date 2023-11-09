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
 * MaxMetDataMessage message
 */
#[Field('UpdateTime', 0, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DateTime)]
#[Field('Vo2Max', 2, FitBaseType::UINT16, 10.0, 0.0, 'mL/kg/min', false, ProfileType::Uint16)]
#[Field('Sport', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Sport)]
#[Field('SubSport', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SubSport)]
#[Field('MaxMetCategory', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::MaxMetCategory)]
#[Field('CalibratedData', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Bool)]
#[Field('HrSource', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::MaxMetHeartRateSource)]
#[Field('SpeedSource', 13, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::MaxMetSpeedSource)]
final class MaxMetDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('MaxMetData', MesgNum::MaxMetData);
    }

    /**
     * Gets the update time
     */
    public function getUpdateTime(): DateTime|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the vo2 max
     */
    public function getVo2Max(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the max met category
     */
    public function getMaxMetCategory(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the calibrated data
     */
    public function getCalibratedData(): bool|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the hr source
     */
    public function getHrSource(): int|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the speed source
     */
    public function getSpeedSource(): int|array|null
    {
        return $this->getFieldValue(13);
    }
}
