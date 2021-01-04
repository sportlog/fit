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
final class EventMessage extends Message
{
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getEvent(): ?int
    {
        return $this->getValue(0);
    }

    public function getEventType(): ?int
    {
        return $this->getValue(1);
    }

    public function getData16(): ?int
    {
        return $this->getValue(2);
    }

    public function getData(): ?int
    {
        return $this->getValue(3);
    }

    public function getEventGroup(): ?int
    {
        return $this->getValue(4);
    }

    public function getScore(): ?int
    {
        return $this->getValue(7);
    }

    public function getOpponentScore(): ?int
    {
        return $this->getValue(8);
    }

    public function getFrontGearNum(): ?int
    {
        return $this->getValue(9);
    }

    public function getFrontGear(): ?int
    {
        return $this->getValue(10);
    }

    public function getRearGearNum(): ?int
    {
        return $this->getValue(11);
    }

    public function getRearGear(): ?int
    {
        return $this->getValue(12);
    }

    public function getDeviceIndex(): ?int
    {
        return $this->getValue(13);
    }

    public function getRadarThreatLevelMax(): ?int
    {
        return $this->getValue(21);
    }

    public function getRadarThreatCount(): ?int
    {
        return $this->getValue(22);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Event", MessageNumber::Event, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT),
            new Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE),
            new Field('Data16', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('Data', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('EventGroup', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('Score', 7, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('OpponentScore', 8, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('FrontGearNum', 9, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('FrontGear', 10, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('RearGearNum', 11, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('RearGear', 12, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('DeviceIndex', 13, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::DEVICEINDEX),
            new Field('RadarThreatLevelMax', 21, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::RADARTHREATLEVELTYPE),
            new Field('RadarThreatCount', 22, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)
        ]);
    }
}
