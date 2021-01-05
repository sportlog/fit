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
 * ScheduleMessage message
 */
#[Field('Manufacturer', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER)]
#[Field('Product', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('SerialNumber', 2, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::UINT32Z)]
#[Field('TimeCreated', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('Completed', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('Type', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SCHEDULE)]
#[Field('ScheduledTime', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALDATETIME)]
final class ScheduleMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Schedule', MessageNumber::Schedule);
    }

    /**
     * Gets the Manufacturer
     */
    public function getManufacturer(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the Product
     */
    public function getProduct(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the SerialNumber
     */
    public function getSerialNumber(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the TimeCreated
     */
    public function getTimeCreated(): ?DateTime
    {
        return $this->getValue(3);
    }

    /**
     * Gets the Completed
     */
    public function getCompleted(): ?bool
    {
        return $this->getValue(4);
    }

    /**
     * Gets the Type
     */
    public function getType(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the ScheduledTime
     */
    public function getScheduledTime(): ?DateTime
    {
        return $this->getValue(6);
    }
}
