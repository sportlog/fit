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
 * HrvStatusSummaryMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('WeeklyAverage', 0, FitBaseType::UINT16, 128.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('LastNightAverage', 1, FitBaseType::UINT16, 128.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('LastNight5MinHigh', 2, FitBaseType::UINT16, 128.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('BaselineLowUpper', 3, FitBaseType::UINT16, 128.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('BaselineBalancedLower', 4, FitBaseType::UINT16, 128.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('BaselineBalancedUpper', 5, FitBaseType::UINT16, 128.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('Status', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::HRVSTATUS)]
final class HrvStatusSummaryMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('HrvStatusSummary', MesgNum::HRV_STATUS_SUMMARY);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the weekly average
     */
    public function getWeeklyAverage(): float|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the last night average
     */
    public function getLastNightAverage(): float|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the last night5 min high
     */
    public function getLastNight5MinHigh(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the baseline low upper
     */
    public function getBaselineLowUpper(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the baseline balanced lower
     */
    public function getBaselineBalancedLower(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the baseline balanced upper
     */
    public function getBaselineBalancedUpper(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the status
     */
    public function getStatus(): int|array|null
    {
        return $this->getFieldValue(6);
    }
}
