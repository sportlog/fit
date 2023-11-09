<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
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
 * DiveSettingsMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DateTime)]
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MessageIndex)]
#[Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::String)]
#[Field('Model', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::TissueModelType)]
#[Field('GfLow', 2, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::Uint8)]
#[Field('GfHigh', 3, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::Uint8)]
#[Field('WaterType', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WaterType)]
#[Field('WaterDensity', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'kg/m^3', false, ProfileType::Float32)]
#[Field('Po2Warn', 6, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::Uint8)]
#[Field('Po2Critical', 7, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::Uint8)]
#[Field('Po2Deco', 8, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::Uint8)]
#[Field('SafetyStopEnabled', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Bool)]
#[Field('BottomDepth', 10, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::Float32)]
#[Field('BottomTime', 11, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::Uint32)]
#[Field('ApneaCountdownEnabled', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Bool)]
#[Field('ApneaCountdownTime', 13, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::Uint32)]
#[Field('BacklightMode', 14, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DiveBacklightMode)]
#[Field('BacklightBrightness', 15, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('BacklightTimeout', 16, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::BacklightTimeout)]
#[Field('RepeatDiveInterval', 17, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::Uint16)]
#[Field('SafetyStopTime', 18, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::Uint16)]
#[Field('HeartRateSourceType', 19, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SourceType)]
#[Field('HeartRateSource', 20, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('TravelGas', 21, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MessageIndex)]
#[Field('CcrLowSetpointSwitchMode', 22, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CcrSetpointSwitchMode)]
#[Field('CcrLowSetpoint', 23, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::Uint8)]
#[Field('CcrLowSetpointDepth', 24, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::Uint32)]
#[Field('CcrHighSetpointSwitchMode', 25, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CcrSetpointSwitchMode)]
#[Field('CcrHighSetpoint', 26, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::Uint8)]
#[Field('CcrHighSetpointDepth', 27, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::Uint32)]
#[Field('GasConsumptionDisplay', 29, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GasConsumptionRateType)]
#[Field('UpKeyEnabled', 30, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Bool)]
#[Field('DiveSounds', 35, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Tone)]
#[Field('LastStopMultiple', 36, FitBaseType::UINT8, 10.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('NoFlyTimeMode', 37, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::NoFlyTimeMode)]
final class DiveSettingsMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('DiveSettings', MesgNum::DiveSettings);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the name
     */
    public function getName(): string|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the model
     */
    public function getModel(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the gf low
     */
    public function getGfLow(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the gf high
     */
    public function getGfHigh(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the water type
     */
    public function getWaterType(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the water density
     */
    public function getWaterDensity(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the po2 warn
     */
    public function getPo2Warn(): float|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the po2 critical
     */
    public function getPo2Critical(): float|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the po2 deco
     */
    public function getPo2Deco(): float|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the safety stop enabled
     */
    public function getSafetyStopEnabled(): bool|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the bottom depth
     */
    public function getBottomDepth(): float|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the bottom time
     */
    public function getBottomTime(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the apnea countdown enabled
     */
    public function getApneaCountdownEnabled(): bool|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the apnea countdown time
     */
    public function getApneaCountdownTime(): int|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the backlight mode
     */
    public function getBacklightMode(): int|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the backlight brightness
     */
    public function getBacklightBrightness(): int|array|null
    {
        return $this->getFieldValue(15);
    }

    /**
     * Gets the backlight timeout
     */
    public function getBacklightTimeout(): int|array|null
    {
        return $this->getFieldValue(16);
    }

    /**
     * Gets the repeat dive interval
     */
    public function getRepeatDiveInterval(): int|array|null
    {
        return $this->getFieldValue(17);
    }

    /**
     * Gets the safety stop time
     */
    public function getSafetyStopTime(): int|array|null
    {
        return $this->getFieldValue(18);
    }

    /**
     * Gets the heart rate source type
     */
    public function getHeartRateSourceType(): int|array|null
    {
        return $this->getFieldValue(19);
    }

    /**
     * Gets the heart rate source
     */
    public function getHeartRateSource(): int|array|null
    {
        return $this->getFieldValue(20);
    }

    /**
     * Gets the travel gas
     */
    public function getTravelGas(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the ccr low setpoint switch mode
     */
    public function getCcrLowSetpointSwitchMode(): int|array|null
    {
        return $this->getFieldValue(22);
    }

    /**
     * Gets the ccr low setpoint
     */
    public function getCcrLowSetpoint(): float|array|null
    {
        return $this->getFieldValue(23);
    }

    /**
     * Gets the ccr low setpoint depth
     */
    public function getCcrLowSetpointDepth(): float|array|null
    {
        return $this->getFieldValue(24);
    }

    /**
     * Gets the ccr high setpoint switch mode
     */
    public function getCcrHighSetpointSwitchMode(): int|array|null
    {
        return $this->getFieldValue(25);
    }

    /**
     * Gets the ccr high setpoint
     */
    public function getCcrHighSetpoint(): float|array|null
    {
        return $this->getFieldValue(26);
    }

    /**
     * Gets the ccr high setpoint depth
     */
    public function getCcrHighSetpointDepth(): float|array|null
    {
        return $this->getFieldValue(27);
    }

    /**
     * Gets the gas consumption display
     */
    public function getGasConsumptionDisplay(): int|array|null
    {
        return $this->getFieldValue(29);
    }

    /**
     * Gets the up key enabled
     */
    public function getUpKeyEnabled(): bool|array|null
    {
        return $this->getFieldValue(30);
    }

    /**
     * Gets the dive sounds
     */
    public function getDiveSounds(): int|array|null
    {
        return $this->getFieldValue(35);
    }

    /**
     * Gets the last stop multiple
     */
    public function getLastStopMultiple(): float|array|null
    {
        return $this->getFieldValue(36);
    }

    /**
     * Gets the no fly time mode
     */
    public function getNoFlyTimeMode(): int|array|null
    {
        return $this->getFieldValue(37);
    }
}
