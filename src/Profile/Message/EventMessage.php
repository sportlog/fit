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
 * EventMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT)]
#[Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE)]
#[Field('Data16', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('Data', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('EventGroup', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Score', 7, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('OpponentScore', 8, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('FrontGearNum', 9, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('FrontGear', 10, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('RearGearNum', 11, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('RearGear', 12, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('DeviceIndex', 13, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX)]
#[Field('RadarThreatLevelMax', 21, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::RADARTHREATLEVELTYPE)]
#[Field('RadarThreatCount', 22, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class EventMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Event', MessageNumber::Event);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the event
     */
    public function getEvent(): int|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the event type
     */
    public function getEventType(): int|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the data16
     */
    public function getData16(): int|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the data
     */
    public function getData(): int|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the event group
     */
    public function getEventGroup(): int|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the score
     */
    public function getScore(): int|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the opponent score
     */
    public function getOpponentScore(): int|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the front gear num
     */
    public function getFrontGearNum(): int|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the front gear
     */
    public function getFrontGear(): int|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the rear gear num
     */
    public function getRearGearNum(): int|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the rear gear
     */
    public function getRearGear(): int|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the device index
     */
    public function getDeviceIndex(): int|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the radar threat level max
     */
    public function getRadarThreatLevelMax(): int|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the radar threat count
     */
    public function getRadarThreatCount(): int|null
    {
        return $this->getFieldValue(22);
    }
}
