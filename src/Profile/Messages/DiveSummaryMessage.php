<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.54Release
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
        parent::__construct('DiveSummary', MesgNum::DIVE_SUMMARY);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the reference mesg
     */
    public function getReferenceMesg(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the reference index
     */
    public function getReferenceIndex(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the avg depth
     */
    public function getAvgDepth(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the max depth
     */
    public function getMaxDepth(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the surface interval
     */
    public function getSurfaceInterval(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the start cns
     */
    public function getStartCns(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the end cns
     */
    public function getEndCns(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the start n2
     */
    public function getStartN2(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the end n2
     */
    public function getEndN2(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the o2 toxicity
     */
    public function getO2Toxicity(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the dive number
     */
    public function getDiveNumber(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the bottom time
     */
    public function getBottomTime(): float|array|null
    {
        return $this->getFieldValue(11);
    }
}
