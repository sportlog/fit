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
 * DiveSettingsMessage message
 */
final class DiveSettingsMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $name;

    #[Field('Model', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::TISSUEMODELTYPE)]
    public ?int $model;

    #[Field('GfLow', 2, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $gfLow;

    #[Field('GfHigh', 3, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $gfHigh;

    #[Field('WaterType', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WATERTYPE)]
    public ?int $waterType;

    #[Field('WaterDensity', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'kg/m^3', false, ProfileType::FLOAT32)]
    public ?float $waterDensity;

    #[Field('Po2Warn', 6, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $po2Warn;

    #[Field('Po2Critical', 7, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $po2Critical;

    #[Field('Po2Deco', 8, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $po2Deco;

    #[Field('SafetyStopEnabled', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $safetyStopEnabled;

    #[Field('BottomDepth', 10, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32)]
    public ?float $bottomDepth;

    #[Field('BottomTime', 11, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $bottomTime;

    #[Field('ApneaCountdownEnabled', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $apneaCountdownEnabled;

    #[Field('ApneaCountdownTime', 13, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $apneaCountdownTime;

    #[Field('BacklightMode', 14, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEBACKLIGHTMODE)]
    public ?int $backlightMode;

    #[Field('BacklightBrightness', 15, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $backlightBrightness;

    #[Field('BacklightTimeout', 16, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::BACKLIGHTTIMEOUT)]
    public ?int $backlightTimeout;

    #[Field('RepeatDiveInterval', 17, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
    public ?int $repeatDiveInterval;

    #[Field('SafetyStopTime', 18, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
    public ?int $safetyStopTime;

    #[Field('HeartRateSourceType', 19, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SOURCETYPE)]
    public ?int $heartRateSourceType;

    #[Field('HeartRateSource', 20, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $heartRateSource;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("DiveSettings", MessageNumber::DiveSettings);
    }
}
