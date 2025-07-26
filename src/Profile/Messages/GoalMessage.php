<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.171 SDK
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
 * GoalMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Sport', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('SubSport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('StartDate', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('EndDate', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('Type', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GOAL)]
#[Field('Value', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('Repeat', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('TargetValue', 7, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('Recurrence', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GOALRECURRENCE)]
#[Field('RecurrenceValue', 9, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('Enabled', 10, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('Source', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GOALSOURCE)]
final class GoalMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Goal', MesgNum::GOAL);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the start date
     */
    public function getStartDate(): DateTime|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the end date
     */
    public function getEndDate(): DateTime|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the type
     */
    public function getType(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the value
     */
    public function getValue(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the repeat
     */
    public function getRepeat(): bool|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the target value
     */
    public function getTargetValue(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the recurrence
     */
    public function getRecurrence(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the recurrence value
     */
    public function getRecurrenceValue(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the enabled
     */
    public function getEnabled(): bool|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the source
     */
    public function getSource(): int|array|null
    {
        return $this->getFieldValue(11);
    }
}
