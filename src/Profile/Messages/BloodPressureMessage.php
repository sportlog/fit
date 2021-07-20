<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.54Release
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
 * BloodPressureMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('SystolicPressure', 0, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
#[Field('DiastolicPressure', 1, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
#[Field('MeanArterialPressure', 2, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
#[Field('Map3SampleMean', 3, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
#[Field('MapMorningValues', 4, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
#[Field('MapEveningValues', 5, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
#[Field('HeartRate', 6, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('HeartRateType', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::HRTYPE)]
#[Field('Status', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BPSTATUS)]
#[Field('UserProfileIndex', 9, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
final class BloodPressureMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('BloodPressure', MesgNum::BLOOD_PRESSURE);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the systolic pressure
     */
    public function getSystolicPressure(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the diastolic pressure
     */
    public function getDiastolicPressure(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the mean arterial pressure
     */
    public function getMeanArterialPressure(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the map3 sample mean
     */
    public function getMap3SampleMean(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the map morning values
     */
    public function getMapMorningValues(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the map evening values
     */
    public function getMapEveningValues(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the heart rate
     */
    public function getHeartRate(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the heart rate type
     */
    public function getHeartRateType(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the status
     */
    public function getStatus(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the user profile index
     */
    public function getUserProfileIndex(): int|array|null
    {
        return $this->getFieldValue(9);
    }
}
