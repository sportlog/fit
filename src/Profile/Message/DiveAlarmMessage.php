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
 * DiveAlarmMessage message
 */
final class DiveAlarmMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getDepth(): ?int
    {
        return $this->getValue(0);
    }

    public function getTime(): ?int
    {
        return $this->getValue(1);
    }

    public function getEnabled(): ?bool
    {
        return $this->getValue(2);
    }

    public function getAlarmType(): ?int
    {
        return $this->getValue(3);
    }

    public function getSound(): ?int
    {
        return $this->getValue(4);
    }

    public function getDiveTypes(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("DiveAlarm", MessageNumber::DiveAlarm, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Depth', 0, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32),
            new Field('Time', 1, FitBaseType::SINT32, 1.0, 0.0, 's', false, ProfileType::SINT32),
            new Field('Enabled', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('AlarmType', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEALARMTYPE),
            new Field('Sound', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::TONE),
            new Field('DiveTypes', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)
        ]);
    }
}
