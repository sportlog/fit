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
 * GoalMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MessageIndex)]
#[Field('Sport', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Sport)]
#[Field('SubSport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SubSport)]
#[Field('StartDate', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DateTime)]
#[Field('EndDate', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DateTime)]
#[Field('Type', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Goal)]
#[Field('Value', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::Uint32)]
#[Field('Repeat', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Bool)]
#[Field('TargetValue', 7, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::Uint32)]
#[Field('Recurrence', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GoalRecurrence)]
#[Field('RecurrenceValue', 9, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::Uint16)]
#[Field('Enabled', 10, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Bool)]
#[Field('Source', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GoalSource)]
final class GoalMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Goal', MesgNum::Goal->value);
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
