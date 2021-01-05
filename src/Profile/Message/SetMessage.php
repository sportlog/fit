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
 * SetMessage message
 */
#[Field('Timestamp', 254, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('Duration', 0, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('Repetitions', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('Weight', 4, FitBaseType::UINT16, 16.0, 0.0, 'kg', false, ProfileType::UINT16)]
#[Field('SetType', 5, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::SETTYPE)]
#[Field('StartTime', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('Category', 7, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::EXERCISECATEGORY)]
#[Field('CategorySubtype', 8, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('WeightDisplayUnit', 9, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::FITBASEUNIT)]
#[Field('MessageIndex', 10, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('WktStepIndex', 11, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
final class SetMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Set', MessageNumber::Set);
    }

    /**
     * Gets the Timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(254);
    }

    /**
     * Gets the Duration
     */
    public function getDuration(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the Repetitions
     */
    public function getRepetitions(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the Weight
     */
    public function getWeight(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the SetType
     */
    public function getSetType(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the StartTime
     */
    public function getStartTime(): ?DateTime
    {
        return $this->getValue(6);
    }

    /**
     * Gets the Category
     */
    public function getCategory(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the CategorySubtype
     */
    public function getCategorySubtype(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the WeightDisplayUnit
     */
    public function getWeightDisplayUnit(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the MessageIndex
     */
    public function getMessageIndex(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Gets the WktStepIndex
     */
    public function getWktStepIndex(): ?int
    {
        return $this->getValue(11);
    }
}
