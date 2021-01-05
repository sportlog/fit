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
     * Gets the Timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the Event
     */
    public function getEvent(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the EventType
     */
    public function getEventType(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the Data16
     */
    public function getData16(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the Data
     */
    public function getData(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the EventGroup
     */
    public function getEventGroup(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the Score
     */
    public function getScore(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the OpponentScore
     */
    public function getOpponentScore(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the FrontGearNum
     */
    public function getFrontGearNum(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the FrontGear
     */
    public function getFrontGear(): ?int
    {
        return $this->getValue(10);
    }

    /**
     * Gets the RearGearNum
     */
    public function getRearGearNum(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Gets the RearGear
     */
    public function getRearGear(): ?int
    {
        return $this->getValue(12);
    }

    /**
     * Gets the DeviceIndex
     */
    public function getDeviceIndex(): ?int
    {
        return $this->getValue(13);
    }

    /**
     * Gets the RadarThreatLevelMax
     */
    public function getRadarThreatLevelMax(): ?int
    {
        return $this->getValue(21);
    }

    /**
     * Gets the RadarThreatCount
     */
    public function getRadarThreatCount(): ?int
    {
        return $this->getValue(22);
    }
}
