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
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Model', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::TISSUEMODELTYPE)]
#[Field('GfLow', 2, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('GfHigh', 3, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('WaterType', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WATERTYPE)]
#[Field('WaterDensity', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'kg/m^3', false, ProfileType::FLOAT32)]
#[Field('Po2Warn', 6, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('Po2Critical', 7, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('Po2Deco', 8, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('SafetyStopEnabled', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('BottomDepth', 10, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32)]
#[Field('BottomTime', 11, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('ApneaCountdownEnabled', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('ApneaCountdownTime', 13, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('BacklightMode', 14, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEBACKLIGHTMODE)]
#[Field('BacklightBrightness', 15, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('BacklightTimeout', 16, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::BACKLIGHTTIMEOUT)]
#[Field('RepeatDiveInterval', 17, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('SafetyStopTime', 18, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('HeartRateSourceType', 19, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SOURCETYPE)]
#[Field('HeartRateSource', 20, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class DiveSettingsMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('DiveSettings', MessageNumber::DiveSettings);
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
    public function getName(): string|array|null
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
}
