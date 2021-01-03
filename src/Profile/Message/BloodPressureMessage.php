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
final class BloodPressureMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('SystolicPressure', 0, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
    public ?int $systolicPressure;

    #[Field('DiastolicPressure', 1, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
    public ?int $diastolicPressure;

    #[Field('MeanArterialPressure', 2, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
    public ?int $meanArterialPressure;

    #[Field('Map3SampleMean', 3, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
    public ?int $map3SampleMean;

    #[Field('MapMorningValues', 4, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
    public ?int $mapMorningValues;

    #[Field('MapEveningValues', 5, FitBaseType::UINT16, 1.0, 0.0, 'mmHg', false, ProfileType::UINT16)]
    public ?int $mapEveningValues;

    #[Field('HeartRate', 6, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $heartRate;

    #[Field('HeartRateType', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::HRTYPE)]
    public ?int $heartRateType;

    #[Field('Status', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BPSTATUS)]
    public ?int $status;

    #[Field('UserProfileIndex', 9, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $userProfileIndex;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("BloodPressure", MessageNumber::BloodPressure);
    }
}
