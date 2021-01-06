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
        parent::__construct('Goal', MessageNumber::Goal);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    /**
     * Gets the sport
     */
    public function getSport(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the start date
     */
    public function getStartDate(): ?DateTime
    {
        return $this->getValue(2);
    }

    /**
     * Gets the end date
     */
    public function getEndDate(): ?DateTime
    {
        return $this->getValue(3);
    }

    /**
     * Gets the type
     */
    public function getType(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the value
     */
    public function getValue(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the repeat
     */
    public function getRepeat(): ?bool
    {
        return $this->getValue(6);
    }

    /**
     * Gets the target value
     */
    public function getTargetValue(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the recurrence
     */
    public function getRecurrence(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the recurrence value
     */
    public function getRecurrenceValue(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the enabled
     */
    public function getEnabled(): ?bool
    {
        return $this->getValue(10);
    }

    /**
     * Gets the source
     */
    public function getSource(): ?int
    {
        return $this->getValue(11);
    }
}
