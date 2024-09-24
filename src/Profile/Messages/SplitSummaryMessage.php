<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.141 SDK
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
 * SplitSummaryMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('SplitType', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPLITTYPE)]
#[Field('NumSplits', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('TotalTimerTime', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalDistance', 5, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('AvgSpeed', 6, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('MaxSpeed', 7, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('TotalAscent', 8, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('TotalDescent', 9, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('AvgHeartRate', 10, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('MaxHeartRate', 11, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('AvgVertSpeed', 12, FitBaseType::SINT32, 1000.0, 0.0, 'm/s', false, ProfileType::SINT32)]
#[Field('TotalCalories', 13, FitBaseType::UINT32, 1.0, 0.0, 'kcal', false, ProfileType::UINT32)]
#[Field('TotalMovingTime', 77, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
final class SplitSummaryMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SplitSummary', MesgNum::SPLIT_SUMMARY);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the split type
     */
    public function getSplitType(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the num splits
     */
    public function getNumSplits(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the total timer time
     */
    public function getTotalTimerTime(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the total distance
     */
    public function getTotalDistance(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the avg speed
     */
    public function getAvgSpeed(): float|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the max speed
     */
    public function getMaxSpeed(): float|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the total ascent
     */
    public function getTotalAscent(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the total descent
     */
    public function getTotalDescent(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the avg heart rate
     */
    public function getAvgHeartRate(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the max heart rate
     */
    public function getMaxHeartRate(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the avg vert speed
     */
    public function getAvgVertSpeed(): float|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the total calories
     */
    public function getTotalCalories(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the total moving time
     */
    public function getTotalMovingTime(): float|array|null
    {
        return $this->getFieldValue(77);
    }
}
