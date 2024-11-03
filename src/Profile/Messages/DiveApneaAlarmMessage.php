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
 * DiveApneaAlarmMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Depth', 0, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('Time', 1, FitBaseType::SINT32, 1.0, 0.0, 's', false, ProfileType::SINT32)]
#[Field('Enabled', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('AlarmType', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEALARMTYPE)]
#[Field('Sound', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::TONE)]
#[Field('DiveTypes', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('Id', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('PopupEnabled', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('TriggerOnDescent', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('TriggerOnAscent', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('Repeating', 10, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('Speed', 11, FitBaseType::SINT32, 1000.0, 0.0, 'mps', false, ProfileType::SINT32)]
final class DiveApneaAlarmMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('DiveApneaAlarm', MesgNum::DiveApneaAlarm->value);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the depth
     */
    public function getDepth(): float|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the time
     */
    public function getTime(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the enabled
     */
    public function getEnabled(): bool|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the alarm type
     */
    public function getAlarmType(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the sound
     */
    public function getSound(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the dive types
     */
    public function getDiveTypes(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the id
     */
    public function getId(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the popup enabled
     */
    public function getPopupEnabled(): bool|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the trigger on descent
     */
    public function getTriggerOnDescent(): bool|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the trigger on ascent
     */
    public function getTriggerOnAscent(): bool|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the repeating
     */
    public function getRepeating(): bool|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the speed
     */
    public function getSpeed(): float|array|null
    {
        return $this->getFieldValue(11);
    }
}
