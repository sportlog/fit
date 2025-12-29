<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.188 SDK
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
 * WeightScaleMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('Weight', 0, FitBaseType::UINT16, 100.0, 0.0, 'kg', false, ProfileType::WEIGHT)]
#[Field('PercentFat', 1, FitBaseType::UINT16, 100.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('PercentHydration', 2, FitBaseType::UINT16, 100.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('VisceralFatMass', 3, FitBaseType::UINT16, 100.0, 0.0, 'kg', false, ProfileType::UINT16)]
#[Field('BoneMass', 4, FitBaseType::UINT16, 100.0, 0.0, 'kg', false, ProfileType::UINT16)]
#[Field('MuscleMass', 5, FitBaseType::UINT16, 100.0, 0.0, 'kg', false, ProfileType::UINT16)]
#[Field('BasalMet', 7, FitBaseType::UINT16, 4.0, 0.0, 'kcal/day', false, ProfileType::UINT16)]
#[Field('PhysiqueRating', 8, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('ActiveMet', 9, FitBaseType::UINT16, 4.0, 0.0, 'kcal/day', false, ProfileType::UINT16)]
#[Field('MetabolicAge', 10, FitBaseType::UINT8, 1.0, 0.0, 'years', false, ProfileType::UINT8)]
#[Field('VisceralFatRating', 11, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('UserProfileIndex', 12, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Bmi', 13, FitBaseType::UINT16, 10.0, 0.0, 'kg/m^2', false, ProfileType::UINT16)]
final class WeightScaleMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('WeightScale', MesgNum::WEIGHT_SCALE);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the weight
     */
    public function getWeight(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the percent fat
     */
    public function getPercentFat(): float|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the percent hydration
     */
    public function getPercentHydration(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the visceral fat mass
     */
    public function getVisceralFatMass(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the bone mass
     */
    public function getBoneMass(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the muscle mass
     */
    public function getMuscleMass(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the basal met
     */
    public function getBasalMet(): float|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the physique rating
     */
    public function getPhysiqueRating(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the active met
     */
    public function getActiveMet(): float|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the metabolic age
     */
    public function getMetabolicAge(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the visceral fat rating
     */
    public function getVisceralFatRating(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the user profile index
     */
    public function getUserProfileIndex(): int|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the bmi
     */
    public function getBmi(): float|array|null
    {
        return $this->getFieldValue(13);
    }
}
