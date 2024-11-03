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
 * TimeInZoneMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('ReferenceMesg', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESGNUM)]
#[Field('ReferenceIndex', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('TimeInHrZone', 2, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInSpeedZone', 3, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInCadenceZone', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('TimeInPowerZone', 5, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('HrZoneHighBoundary', 6, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('SpeedZoneHighBoundary', 7, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('CadenceZoneHighBondary', 8, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
#[Field('PowerZoneHighBoundary', 9, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('HrCalcType', 10, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::HRZONECALC)]
#[Field('MaxHeartRate', 11, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('RestingHeartRate', 12, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('ThresholdHeartRate', 13, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('PwrCalcType', 14, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::PWRZONECALC)]
#[Field('FunctionalThresholdPower', 15, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
final class TimeInZoneMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('TimeInZone', MesgNum::TimeInZone->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the reference mesg
     */
    public function getReferenceMesg(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the reference index
     */
    public function getReferenceIndex(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the time in hr zone
     */
    public function getTimeInHrZone(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the time in speed zone
     */
    public function getTimeInSpeedZone(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the time in cadence zone
     */
    public function getTimeInCadenceZone(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the time in power zone
     */
    public function getTimeInPowerZone(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the hr zone high boundary
     */
    public function getHrZoneHighBoundary(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the speed zone high boundary
     */
    public function getSpeedZoneHighBoundary(): float|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the cadence zone high bondary
     */
    public function getCadenceZoneHighBondary(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the power zone high boundary
     */
    public function getPowerZoneHighBoundary(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the hr calc type
     */
    public function getHrCalcType(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the max heart rate
     */
    public function getMaxHeartRate(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the resting heart rate
     */
    public function getRestingHeartRate(): int|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the threshold heart rate
     */
    public function getThresholdHeartRate(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the pwr calc type
     */
    public function getPwrCalcType(): int|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the functional threshold power
     */
    public function getFunctionalThresholdPower(): int|array|null
    {
        return $this->getFieldValue(15);
    }
}
