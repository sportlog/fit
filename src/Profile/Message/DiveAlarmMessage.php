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
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Depth', 0, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('Time', 1, FitBaseType::SINT32, 1.0, 0.0, 's', false, ProfileType::SINT32)]
#[Field('Enabled', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('AlarmType', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEALARMTYPE)]
#[Field('Sound', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::TONE)]
#[Field('DiveTypes', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
final class DiveAlarmMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('DiveAlarm', MessageNumber::DiveAlarm);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    /**
     * Gets the depth
     */
    public function getDepth(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the time
     */
    public function getTime(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the enabled
     */
    public function getEnabled(): ?bool
    {
        return $this->getValue(2);
    }

    /**
     * Gets the alarm type
     */
    public function getAlarmType(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the sound
     */
    public function getSound(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the dive types
     */
    public function getDiveTypes(): ?int
    {
        return $this->getValue(5);
    }
}
