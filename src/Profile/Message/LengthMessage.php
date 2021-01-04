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
 * LengthMessage message
 */
final class LengthMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getEvent(): ?int
    {
        return $this->getValue(0);
    }

    public function getEventType(): ?int
    {
        return $this->getValue(1);
    }

    public function getStartTime(): ?DateTime
    {
        return $this->getValue(2);
    }

    public function getTotalElapsedTime(): ?int
    {
        return $this->getValue(3);
    }

    public function getTotalTimerTime(): ?int
    {
        return $this->getValue(4);
    }

    public function getTotalStrokes(): ?int
    {
        return $this->getValue(5);
    }

    public function getAvgSpeed(): ?int
    {
        return $this->getValue(6);
    }

    public function getSwimStroke(): ?int
    {
        return $this->getValue(7);
    }

    public function getAvgSwimmingCadence(): ?int
    {
        return $this->getValue(9);
    }

    public function getEventGroup(): ?int
    {
        return $this->getValue(10);
    }

    public function getTotalCalories(): ?int
    {
        return $this->getValue(11);
    }

    public function getLengthType(): ?int
    {
        return $this->getValue(12);
    }

    public function getPlayerScore(): ?int
    {
        return $this->getValue(18);
    }

    public function getOpponentScore(): ?int
    {
        return $this->getValue(19);
    }

    public function getStrokeCount(): ?int
    {
        return $this->getValue(20);
    }

    public function getZoneCount(): ?int
    {
        return $this->getValue(21);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Length", MessageNumber::Length, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT),
            new Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE),
            new Field('StartTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('TotalElapsedTime', 3, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TotalTimerTime', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32),
            new Field('TotalStrokes', 5, FitBaseType::UINT16, 1.0, 0.0, 'strokes', false, ProfileType::UINT16),
            new Field('AvgSpeed', 6, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16),
            new Field('SwimStroke', 7, FitBaseType::ENUM, 1.0, 0.0, 'swim_stroke', false, ProfileType::SWIMSTROKE),
            new Field('AvgSwimmingCadence', 9, FitBaseType::UINT8, 1.0, 0.0, 'strokes/min', false, ProfileType::UINT8),
            new Field('EventGroup', 10, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('TotalCalories', 11, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16),
            new Field('LengthType', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::LENGTHTYPE),
            new Field('PlayerScore', 18, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('OpponentScore', 19, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('StrokeCount', 20, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16),
            new Field('ZoneCount', 21, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)
        ]);
    }
}
