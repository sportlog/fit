<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.126Release
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
 * LengthMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT)]
#[Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE)]
#[Field('StartTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('TotalElapsedTime', 3, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalTimerTime', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TotalStrokes', 5, FitBaseType::UINT16, 1.0, 0.0, 'strokes', false, ProfileType::UINT16)]
#[Field('AvgSpeed', 6, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('SwimStroke', 7, FitBaseType::ENUM, 1.0, 0.0, 'swim_stroke', false, ProfileType::SWIMSTROKE)]
#[Field('AvgSwimmingCadence', 9, FitBaseType::UINT8, 1.0, 0.0, 'strokes/min', false, ProfileType::UINT8)]
#[Field('EventGroup', 10, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('TotalCalories', 11, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
#[Field('LengthType', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::LENGTHTYPE)]
#[Field('PlayerScore', 18, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('OpponentScore', 19, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('StrokeCount', 20, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('ZoneCount', 21, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
#[Field('EnhancedAvgRespirationRate', 22, FitBaseType::UINT16, 100.0, 0.0, 'Breaths/min', false, ProfileType::UINT16)]
#[Field('EnhancedMaxRespirationRate', 23, FitBaseType::UINT16, 100.0, 0.0, 'Breaths/min', false, ProfileType::UINT16)]
#[Field('AvgRespirationRate', 24, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('MaxRespirationRate', 25, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class LengthMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Length', MesgNum::LENGTH);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the event
     */
    public function getEvent(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the event type
     */
    public function getEventType(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the start time
     */
    public function getStartTime(): DateTime|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the total elapsed time
     */
    public function getTotalElapsedTime(): float|array|null
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
     * Gets the total strokes
     */
    public function getTotalStrokes(): int|array|null
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
     * Gets the swim stroke
     */
    public function getSwimStroke(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the avg swimming cadence
     */
    public function getAvgSwimmingCadence(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the event group
     */
    public function getEventGroup(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the total calories
     */
    public function getTotalCalories(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the length type
     */
    public function getLengthType(): int|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the player score
     */
    public function getPlayerScore(): int|array|null
    {
        return $this->getFieldValue(18);
    }

    /**
     * Gets the opponent score
     */
    public function getOpponentScore(): int|array|null
    {
        return $this->getFieldValue(19);
    }

    /**
     * Gets the stroke count
     */
    public function getStrokeCount(): int|array|null
    {
        return $this->getFieldValue(20);
    }

    /**
     * Gets the zone count
     */
    public function getZoneCount(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the enhanced avg respiration rate
     */
    public function getEnhancedAvgRespirationRate(): float|array|null
    {
        return $this->getFieldValue(22);
    }

    /**
     * Gets the enhanced max respiration rate
     */
    public function getEnhancedMaxRespirationRate(): float|array|null
    {
        return $this->getFieldValue(23);
    }

    /**
     * Gets the avg respiration rate
     */
    public function getAvgRespirationRate(): int|array|null
    {
        return $this->getFieldValue(24);
    }

    /**
     * Gets the max respiration rate
     */
    public function getMaxRespirationRate(): int|array|null
    {
        return $this->getFieldValue(25);
    }
}
