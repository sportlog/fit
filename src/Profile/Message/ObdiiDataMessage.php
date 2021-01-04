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
final class ObdiiDataMessage extends Message
{
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

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("ObdiiData", MessageNumber::ObdiiData, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16),
            new Field('TimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16),
            new Field('Pid', 2, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE),
            new Field('RawData', 3, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE),
            new Field('PidDataSize', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('SystemTime', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('StartTimestamp', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('StartTimestampMs', 7, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)
        ]);
    }
}
