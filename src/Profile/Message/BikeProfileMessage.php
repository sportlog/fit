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
 * BikeProfileMessage message
 */
final class BikeProfileMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $name;

    #[Field('Sport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
    public ?int $sport;

    #[Field('SubSport', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
    public ?int $subSport;

    #[Field('Odometer', 3, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $odometer;

    #[Field('BikeSpdAntId', 4, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
    public ?int $bikeSpdAntId;

    #[Field('BikeCadAntId', 5, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
    public ?int $bikeCadAntId;

    #[Field('BikeSpdcadAntId', 6, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
    public ?int $bikeSpdcadAntId;

    #[Field('BikePowerAntId', 7, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
    public ?int $bikePowerAntId;

    #[Field('CustomWheelsize', 8, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $customWheelsize;

    #[Field('AutoWheelsize', 9, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16)]
    public ?int $autoWheelsize;

    #[Field('BikeWeight', 10, FitBaseType::UINT16, 10.0, 0.0, 'kg', false, ProfileType::UINT16)]
    public ?int $bikeWeight;

    #[Field('PowerCalFactor', 11, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
    public ?int $powerCalFactor;

    #[Field('AutoWheelCal', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $autoWheelCal;

    #[Field('AutoPowerZero', 13, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $autoPowerZero;

    #[Field('Id', 14, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $id;

    #[Field('SpdEnabled', 15, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $spdEnabled;

    #[Field('CadEnabled', 16, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $cadEnabled;

    #[Field('SpdcadEnabled', 17, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $spdcadEnabled;

    #[Field('PowerEnabled', 18, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $powerEnabled;

    #[Field('CrankLength', 19, FitBaseType::UINT8, 2.0, -110.0, 'mm', false, ProfileType::UINT8)]
    public ?int $crankLength;

    #[Field('Enabled', 20, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $enabled;

    #[Field('BikeSpdAntIdTransType', 21, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $bikeSpdAntIdTransType;

    #[Field('BikeCadAntIdTransType', 22, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $bikeCadAntIdTransType;

    #[Field('BikeSpdcadAntIdTransType', 23, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $bikeSpdcadAntIdTransType;

    #[Field('BikePowerAntIdTransType', 24, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $bikePowerAntIdTransType;

    #[Field('OdometerRollover', 37, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $odometerRollover;

    #[Field('FrontGearNum', 38, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $frontGearNum;

    #[Field('FrontGear', 39, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $frontGear;

    #[Field('RearGearNum', 40, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $rearGearNum;

    #[Field('RearGear', 41, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $rearGear;

    #[Field('ShimanoDi2Enabled', 44, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $shimanoDi2Enabled;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("BikeProfile", MessageNumber::BikeProfile);
    }
}
