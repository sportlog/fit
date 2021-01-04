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
final class HrMessage extends Message
{
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getFractionalTimestamp(): ?int
    {
        return $this->getValue(0);
    }

    public function getTime256(): ?int
    {
        return $this->getValue(1);
    }

    public function getFilteredBpm(): ?int
    {
        return $this->getValue(6);
    }

    public function getEventTimestamp(): ?int
    {
        return $this->getValue(9);
    }

    public function getEventTimestamp12(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Hr", MessageNumber::Hr, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('FractionalTimestamp', 0, FitBaseType::UINT16, 32768.0, 0.0, 's', false, ProfileType::UINT16),
            new Field('Time256', 1, FitBaseType::UINT8, 256.0, 0.0, 's', false, ProfileType::UINT8),
            new Field('FilteredBpm', 6, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8),
            new Field('EventTimestamp', 9, FitBaseType::UINT32, 1024.0, 0.0, 's', true, ProfileType::UINT32),
            new Field('EventTimestamp12', 10, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)
        ]);
    }
}
