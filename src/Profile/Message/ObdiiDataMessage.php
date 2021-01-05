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
 * ObdiiDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('TimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('Pid', 2, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('RawData', 3, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('PidDataSize', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('SystemTime', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('StartTimestamp', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('StartTimestampMs', 7, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
final class ObdiiDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ObdiiData', MessageNumber::ObdiiData);
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getTimestampMs(): ?int
    {
        return $this->getValue(0);
    }

    public function getTimeOffset(): ?int
    {
        return $this->getValue(1);
    }

    public function getPid(): ?int
    {
        return $this->getValue(2);
    }

    public function getRawData(): ?int
    {
        return $this->getValue(3);
    }

    public function getPidDataSize(): ?int
    {
        return $this->getValue(4);
    }

    public function getSystemTime(): ?int
    {
        return $this->getValue(5);
    }

    public function getStartTimestamp(): ?DateTime
    {
        return $this->getValue(6);
    }

    public function getStartTimestampMs(): ?int
    {
        return $this->getValue(7);
    }
}
