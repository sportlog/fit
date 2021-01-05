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
final class WeightScaleMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('WeightScale', MessageNumber::WeightScale);
    }

    /**
     * Gets the Timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the Weight
     */
    public function getWeight(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the PercentFat
     */
    public function getPercentFat(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the PercentHydration
     */
    public function getPercentHydration(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the VisceralFatMass
     */
    public function getVisceralFatMass(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the BoneMass
     */
    public function getBoneMass(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the MuscleMass
     */
    public function getMuscleMass(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the BasalMet
     */
    public function getBasalMet(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the PhysiqueRating
     */
    public function getPhysiqueRating(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the ActiveMet
     */
    public function getActiveMet(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the MetabolicAge
     */
    public function getMetabolicAge(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Gets the VisceralFatRating
     */
    public function getVisceralFatRating(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Gets the UserProfileIndex
     */
    public function getUserProfileIndex(): ?int
    {
        return $this->getValue(12);
    }
}
