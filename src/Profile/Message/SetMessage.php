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
final class SetMessage extends Message
{
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(254);
    }

    public function getDuration(): ?int
    {
        return $this->getValue(0);
    }

    public function getRepetitions(): ?int
    {
        return $this->getValue(3);
    }

    public function getWeight(): ?int
    {
        return $this->getValue(4);
    }

    public function getSetType(): ?int
    {
        return $this->getValue(5);
    }

    public function getStartTime(): ?DateTime
    {
        return $this->getValue(6);
    }

    public function getCategory(): ?int
    {
        return $this->getValue(7);
    }

    public function getCategorySubtype(): ?int
    {
        return $this->getValue(8);
    }

    public function getWeightDisplayUnit(): ?int
    {
        return $this->getValue(9);
    }

    public function getMessageIndex(): ?int
    {
        return $this->getValue(10);
    }

    public function getWktStepIndex(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Set", MessageNumber::Set, [
        new Field('Timestamp', 254, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('Duration', 0, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('Repetitions', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('Weight', 4, FitBaseType::UINT16, 16.0, 0.0, 'kg', false, ProfileType::UINT16),
            new Field('SetType', 5, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::SETTYPE),
            new Field('StartTime', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('Category', 7, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::EXERCISECATEGORY),
            new Field('CategorySubtype', 8, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('WeightDisplayUnit', 9, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::FITBASEUNIT),
            new Field('MessageIndex', 10, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('WktStepIndex', 11, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)
        ]);
    }
}
