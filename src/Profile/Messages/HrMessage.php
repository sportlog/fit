<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.141 SDK
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
 * HrMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('FractionalTimestamp', 0, FitBaseType::UINT16, 32768.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('Time256', 1, FitBaseType::UINT8, 256.0, 0.0, 's', false, ProfileType::UINT8)]
#[Field('FilteredBpm', 6, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('EventTimestamp', 9, FitBaseType::UINT32, 1024.0, 0.0, 's', true, ProfileType::UINT32)]
#[Field('EventTimestamp12', 10, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
final class HrMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Hr', MesgNum::Hr->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the fractional timestamp
     */
    public function getFractionalTimestamp(): float|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the time256
     */
    public function getTime256(): float|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the filtered bpm
     */
    public function getFilteredBpm(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the event timestamp
     */
    public function getEventTimestamp(): float|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the event timestamp12
     */
    public function getEventTimestamp12(): mixed
    {
        return $this->getFieldValue(10);
    }
}
