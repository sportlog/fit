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
        parent::__construct('Hr', MessageNumber::Hr);
    }

    /**
     * Gets the Timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the FractionalTimestamp
     */
    public function getFractionalTimestamp(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the Time256
     */
    public function getTime256(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the FilteredBpm
     */
    public function getFilteredBpm(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the EventTimestamp
     */
    public function getEventTimestamp(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the EventTimestamp12
     */
    public function getEventTimestamp12(): ?int
    {
        return $this->getValue(10);
    }
}
