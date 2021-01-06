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
 * TotalsMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimerTime', 0, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('Distance', 1, FitBaseType::UINT32, 1.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('Calories', 2, FitBaseType::UINT32, 1.0, 0.0, 'kcal', false, ProfileType::UINT32)]
#[Field('Sport', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('ElapsedTime', 4, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('Sessions', 5, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('ActiveTime', 6, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('SportIndex', 9, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class TotalsMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Totals', MessageNumber::Totals);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): ?int
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the timer time
     */
    public function getTimerTime(): ?int
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the distance
     */
    public function getDistance(): ?int
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the calories
     */
    public function getCalories(): ?int
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the sport
     */
    public function getSport(): ?int
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the elapsed time
     */
    public function getElapsedTime(): ?int
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the sessions
     */
    public function getSessions(): ?int
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the active time
     */
    public function getActiveTime(): ?int
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the sport index
     */
    public function getSportIndex(): ?int
    {
        return $this->getFieldValue(9);
    }
}
