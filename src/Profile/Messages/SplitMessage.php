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
 * SplitMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('SplitType', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPLITTYPE)]
#[Field('TotalElapsedTime', 1, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalTimerTime', 2, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalDistance', 3, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('AvgSpeed', 4, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('StartTime', 9, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('TotalAscent', 13, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('TotalDescent', 14, FitBaseType::UINT16, 1.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('StartPositionLat', 21, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('StartPositionLong', 22, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('EndPositionLat', 23, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('EndPositionLong', 24, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('MaxSpeed', 25, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('AvgVertSpeed', 26, FitBaseType::SINT32, 1000.0, 0.0, 'm/s', false, ProfileType::SINT32)]
#[Field('EndTime', 27, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('TotalCalories', 28, FitBaseType::UINT32, 1.0, 0.0, 'kcal', false, ProfileType::UINT32)]
#[Field('StartElevation', 74, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
#[Field('TotalMovingTime', 110, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
final class SplitMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Split', MesgNum::SPLIT);
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
     * Gets the avg speed
     */
    public function getAvgSpeed(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the start time
     */
    public function getStartTime(): DateTime|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the total ascent
     */
    public function getTotalAscent(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the total descent
     */
    public function getTotalDescent(): int|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the start position lat
     */
    public function getStartPositionLat(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the start position long
     */
    public function getStartPositionLong(): int|array|null
    {
        return $this->getFieldValue(22);
    }

    /**
     * Gets the end position lat
     */
    public function getEndPositionLat(): int|array|null
    {
        return $this->getFieldValue(23);
    }

    /**
     * Gets the end position long
     */
    public function getEndPositionLong(): int|array|null
    {
        return $this->getFieldValue(24);
    }

    /**
     * Gets the max speed
     */
    public function getMaxSpeed(): float|array|null
    {
        return $this->getFieldValue(25);
    }

    /**
     * Gets the avg vert speed
     */
    public function getAvgVertSpeed(): float|array|null
    {
        return $this->getFieldValue(26);
    }

    /**
     * Gets the end time
     */
    public function getEndTime(): DateTime|null
    {
        return $this->getFieldValue(27);
    }

    /**
     * Gets the total calories
     */
    public function getTotalCalories(): int|array|null
    {
        return $this->getFieldValue(28);
    }

    /**
     * Gets the start elevation
     */
    public function getStartElevation(): float|array|null
    {
        return $this->getFieldValue(74);
    }

    /**
     * Gets the total moving time
     */
    public function getTotalMovingTime(): float|array|null
    {
        return $this->getFieldValue(110);
    }
}
