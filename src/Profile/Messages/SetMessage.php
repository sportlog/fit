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
 * SetMessage message
 */
#[Field('Timestamp', 254, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DateTime)]
#[Field('Duration', 0, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::Uint32)]
#[Field('Repetitions', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::Uint16)]
#[Field('Weight', 4, FitBaseType::UINT16, 16.0, 0.0, 'kg', false, ProfileType::Uint16)]
#[Field('SetType', 5, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::SetType)]
#[Field('StartTime', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DateTime)]
#[Field('Category', 7, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::ExerciseCategory)]
#[Field('CategorySubtype', 8, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::Uint16)]
#[Field('WeightDisplayUnit', 9, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::FitBaseUnit)]
#[Field('MessageIndex', 10, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MessageIndex)]
#[Field('WktStepIndex', 11, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MessageIndex)]
final class SetMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Set', MesgNum::Set);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the duration
     */
    public function getDuration(): float|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the repetitions
     */
    public function getRepetitions(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the weight
     */
    public function getWeight(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the set type
     */
    public function getSetType(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the start time
     */
    public function getStartTime(): DateTime|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the category
     */
    public function getCategory(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the category subtype
     */
    public function getCategorySubtype(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the weight display unit
     */
    public function getWeightDisplayUnit(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the wkt step index
     */
    public function getWktStepIndex(): int|array|null
    {
        return $this->getFieldValue(11);
    }
}
