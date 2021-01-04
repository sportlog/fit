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
final class ScheduleMessage extends Message
{
    public function getManufacturer(): ?int
    {
        return $this->getValue(0);
    }

    public function getProduct(): ?int
    {
        return $this->getValue(1);
    }

    public function getSerialNumber(): ?int
    {
        return $this->getValue(2);
    }

    public function getTimeCreated(): ?DateTime
    {
        return $this->getValue(3);
    }

    public function getCompleted(): ?bool
    {
        return $this->getValue(4);
    }

    public function getType(): ?int
    {
        return $this->getValue(5);
    }

    public function getScheduledTime(): ?DateTime
    {
        return $this->getValue(6);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Schedule", MessageNumber::Schedule, [
        new Field('Manufacturer', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER),
            new Field('Product', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('SerialNumber', 2, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::UINT32Z),
            new Field('TimeCreated', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('Completed', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('Type', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SCHEDULE),
            new Field('ScheduledTime', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALDATETIME)
        ]);
    }
}
