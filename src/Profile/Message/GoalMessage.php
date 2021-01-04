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
final class GoalMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getSport(): ?int
    {
        return $this->getValue(0);
    }

    public function getSubSport(): ?int
    {
        return $this->getValue(1);
    }

    public function getStartDate(): ?DateTime
    {
        return $this->getValue(2);
    }

    public function getEndDate(): ?DateTime
    {
        return $this->getValue(3);
    }

    public function getType(): ?int
    {
        return $this->getValue(4);
    }

    public function getValue(): ?int
    {
        return $this->getValue(5);
    }

    public function getRepeat(): ?bool
    {
        return $this->getValue(6);
    }

    public function getTargetValue(): ?int
    {
        return $this->getValue(7);
    }

    public function getRecurrence(): ?int
    {
        return $this->getValue(8);
    }

    public function getRecurrenceValue(): ?int
    {
        return $this->getValue(9);
    }

    public function getEnabled(): ?bool
    {
        return $this->getValue(10);
    }

    public function getSource(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Goal", MessageNumber::Goal, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Sport', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT),
            new Field('SubSport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT),
            new Field('StartDate', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('EndDate', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('Type', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GOAL),
            new Field('Value', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('Repeat', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('TargetValue', 7, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('Recurrence', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GOALRECURRENCE),
            new Field('RecurrenceValue', 9, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('Enabled', 10, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('Source', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GOALSOURCE)
        ]);
    }
}
