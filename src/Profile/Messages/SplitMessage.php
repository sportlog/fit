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
 * SplitMessage message
 */
#[Field('SplitType', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SplitType)]
#[Field('TotalElapsedTime', 1, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::Uint32)]
#[Field('TotalTimerTime', 2, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::Uint32)]
#[Field('TotalDistance', 3, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::Uint32)]
#[Field('StartTime', 9, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DateTime)]
final class SplitMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Split', MesgNum::Split->value);
    }

    /**
     * Gets the split type
     */
    public function getSplitType(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the total elapsed time
     */
    public function getTotalElapsedTime(): float|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the total timer time
     */
    public function getTotalTimerTime(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the total distance
     */
    public function getTotalDistance(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the start time
     */
    public function getStartTime(): DateTime|null
    {
        return $this->getFieldValue(9);
    }
}
