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
 * DiveSummaryMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('ReferenceMesg', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESGNUM)]
#[Field('ReferenceIndex', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('AvgDepth', 2, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('MaxDepth', 3, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('SurfaceInterval', 4, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('StartCns', 5, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('EndCns', 6, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('StartN2', 7, FitBaseType::UINT16, 1.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('EndN2', 8, FitBaseType::UINT16, 1.0, 0.0, 'percent', false, ProfileType::UINT16)]
#[Field('O2Toxicity', 9, FitBaseType::UINT16, 1.0, 0.0, 'OTUs', false, ProfileType::UINT16)]
#[Field('DiveNumber', 10, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('BottomTime', 11, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
final class DiveSummaryMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('DiveSummary', MessageNumber::DiveSummary);
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getReferenceMesg(): ?int
    {
        return $this->getValue(0);
    }

    public function getReferenceIndex(): ?int
    {
        return $this->getValue(1);
    }

    public function getAvgDepth(): ?int
    {
        return $this->getValue(2);
    }

    public function getMaxDepth(): ?int
    {
        return $this->getValue(3);
    }

    public function getSurfaceInterval(): ?int
    {
        return $this->getValue(4);
    }

    public function getStartCns(): ?int
    {
        return $this->getValue(5);
    }

    public function getEndCns(): ?int
    {
        return $this->getValue(6);
    }

    public function getStartN2(): ?int
    {
        return $this->getValue(7);
    }

    public function getEndN2(): ?int
    {
        return $this->getValue(8);
    }

    public function getO2Toxicity(): ?int
    {
        return $this->getValue(9);
    }

    public function getDiveNumber(): ?int
    {
        return $this->getValue(10);
    }

    public function getBottomTime(): ?int
    {
        return $this->getValue(11);
    }
}
