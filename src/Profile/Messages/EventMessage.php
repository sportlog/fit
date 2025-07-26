<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.171 SDK
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
#[Field('ActivityType', 14, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ACTIVITYTYPE)]
#[Field('StartTimestamp', 15, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('RadarThreatLevelMax', 21, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::RADARTHREATLEVELTYPE)]
#[Field('RadarThreatCount', 22, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('RadarThreatAvgApproachSpeed', 23, FitBaseType::UINT8, 10.0, 0.0, 'm/s', false, ProfileType::UINT8)]
#[Field('RadarThreatMaxApproachSpeed', 24, FitBaseType::UINT8, 10.0, 0.0, 'm/s', false, ProfileType::UINT8)]
final class EventMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Event', MesgNum::EVENT);
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
    public function getEvent(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the event type
     */
    public function getEventType(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the data16
     */
    public function getData16(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the data
     */
    public function getData(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the event group
     */
    public function getEventGroup(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the score
     */
    public function getScore(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the opponent score
     */
    public function getOpponentScore(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the front gear num
     */
    public function getFrontGearNum(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the front gear
     */
    public function getFrontGear(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the rear gear num
     */
    public function getRearGearNum(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the rear gear
     */
    public function getRearGear(): int|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the device index
     */
    public function getDeviceIndex(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the activity type
     */
    public function getActivityType(): int|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the start timestamp
     */
    public function getStartTimestamp(): DateTime|null
    {
        return $this->getFieldValue(15);
    }

    /**
     * Gets the radar threat level max
     */
    public function getRadarThreatLevelMax(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the radar threat count
     */
    public function getRadarThreatCount(): int|array|null
    {
        return $this->getFieldValue(22);
    }

    /**
     * Gets the radar threat avg approach speed
     */
    public function getRadarThreatAvgApproachSpeed(): float|array|null
    {
        return $this->getFieldValue(23);
    }

    /**
     * Gets the radar threat max approach speed
     */
    public function getRadarThreatMaxApproachSpeed(): float|array|null
    {
        return $this->getFieldValue(24);
    }
}
