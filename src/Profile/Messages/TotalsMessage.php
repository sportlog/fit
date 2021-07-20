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
        parent::__construct('Totals', MesgNum::TOTALS);
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
     * Gets the timer time
     */
    public function getTimerTime(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the distance
     */
    public function getDistance(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the calories
     */
    public function getCalories(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the elapsed time
     */
    public function getElapsedTime(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the sessions
     */
    public function getSessions(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the active time
     */
    public function getActiveTime(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the sport index
     */
    public function getSportIndex(): int|array|null
    {
        return $this->getFieldValue(9);
    }
}
