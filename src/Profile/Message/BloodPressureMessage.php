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
        parent::__construct('BloodPressure', MessageNumber::BloodPressure);
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getSystolicPressure(): ?int
    {
        return $this->getValue(0);
    }

    public function getDiastolicPressure(): ?int
    {
        return $this->getValue(1);
    }

    public function getMeanArterialPressure(): ?int
    {
        return $this->getValue(2);
    }

    public function getMap3SampleMean(): ?int
    {
        return $this->getValue(3);
    }

    public function getMapMorningValues(): ?int
    {
        return $this->getValue(4);
    }

    public function getMapEveningValues(): ?int
    {
        return $this->getValue(5);
    }

    public function getHeartRate(): ?int
    {
        return $this->getValue(6);
    }

    public function getHeartRateType(): ?int
    {
        return $this->getValue(7);
    }

    public function getStatus(): ?int
    {
        return $this->getValue(8);
    }

    public function getUserProfileIndex(): ?int
    {
        return $this->getValue(9);
    }
}
