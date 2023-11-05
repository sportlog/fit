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
 * ScheduleMessage message
 */
#[Field('Manufacturer', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::Manufacturer)]
#[Field('Product', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::Uint16)]
#[Field('SerialNumber', 2, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::Uint32z)]
#[Field('TimeCreated', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DateTime)]
#[Field('Completed', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Bool)]
#[Field('Type', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Schedule)]
#[Field('ScheduledTime', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LocalDateTime)]
final class ScheduleMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Schedule', MesgNum::Schedule->value);
    }

    /**
     * Gets the manufacturer
     */
    public function getManufacturer(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the product
     */
    public function getProduct(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the serial number
     */
    public function getSerialNumber(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the time created
     */
    public function getTimeCreated(): DateTime|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the completed
     */
    public function getCompleted(): bool|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the type
     */
    public function getType(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the scheduled time
     */
    public function getScheduledTime(): DateTime|null
    {
        return $this->getFieldValue(6);
    }
}
