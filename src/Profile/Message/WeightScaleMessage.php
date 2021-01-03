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
 * WeightScaleMessage message
 */
final class WeightScaleMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('Weight', 0, FitBaseType::UINT16, 100.0, 0.0, 'kg', false, ProfileType::WEIGHT)]
    public ?int $weight;

    #[Field('PercentFat', 1, FitBaseType::UINT16, 100.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $percentFat;

    #[Field('PercentHydration', 2, FitBaseType::UINT16, 100.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $percentHydration;

    #[Field('VisceralFatMass', 3, FitBaseType::UINT16, 100.0, 0.0, 'kg', false, ProfileType::UINT16)]
    public ?int $visceralFatMass;

    #[Field('BoneMass', 4, FitBaseType::UINT16, 100.0, 0.0, 'kg', false, ProfileType::UINT16)]
    public ?int $boneMass;

    #[Field('MuscleMass', 5, FitBaseType::UINT16, 100.0, 0.0, 'kg', false, ProfileType::UINT16)]
    public ?int $muscleMass;

    #[Field('BasalMet', 7, FitBaseType::UINT16, 4.0, 0.0, 'kcal/day', false, ProfileType::UINT16)]
    public ?int $basalMet;

    #[Field('PhysiqueRating', 8, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $physiqueRating;

    #[Field('ActiveMet', 9, FitBaseType::UINT16, 4.0, 0.0, 'kcal/day', false, ProfileType::UINT16)]
    public ?int $activeMet;

    #[Field('MetabolicAge', 10, FitBaseType::UINT8, 1.0, 0.0, 'years', false, ProfileType::UINT8)]
    public ?int $metabolicAge;

    #[Field('VisceralFatRating', 11, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $visceralFatRating;

    #[Field('UserProfileIndex', 12, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $userProfileIndex;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("WeightScale", MessageNumber::WeightScale);
    }
}
