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
     * Gets the MessageIndex
     */
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    /**
     * Gets the Name
     */
    public function getName(): ?string
    {
        return $this->getValue(0);
    }

    /**
     * Gets the Model
     */
    public function getModel(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the GfLow
     */
    public function getGfLow(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the GfHigh
     */
    public function getGfHigh(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the WaterType
     */
    public function getWaterType(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the WaterDensity
     */
    public function getWaterDensity(): ?float
    {
        return $this->getValue(5);
    }

    /**
     * Gets the Po2Warn
     */
    public function getPo2Warn(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the Po2Critical
     */
    public function getPo2Critical(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the Po2Deco
     */
    public function getPo2Deco(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the SafetyStopEnabled
     */
    public function getSafetyStopEnabled(): ?bool
    {
        return $this->getValue(9);
    }

    /**
     * Gets the BottomDepth
     */
    public function getBottomDepth(): ?float
    {
        return $this->getValue(10);
    }

    /**
     * Gets the BottomTime
     */
    public function getBottomTime(): ?int
    {
        return $this->getValue(11);
    }

    /**
     * Gets the ApneaCountdownEnabled
     */
    public function getApneaCountdownEnabled(): ?bool
    {
        return $this->getValue(12);
    }

    /**
     * Gets the ApneaCountdownTime
     */
    public function getApneaCountdownTime(): ?int
    {
        return $this->getValue(13);
    }

    /**
     * Gets the BacklightMode
     */
    public function getBacklightMode(): ?int
    {
        return $this->getValue(14);
    }

    /**
     * Gets the BacklightBrightness
     */
    public function getBacklightBrightness(): ?int
    {
        return $this->getValue(15);
    }

    /**
     * Gets the BacklightTimeout
     */
    public function getBacklightTimeout(): ?int
    {
        return $this->getValue(16);
    }

    /**
     * Gets the RepeatDiveInterval
     */
    public function getRepeatDiveInterval(): ?int
    {
        return $this->getValue(17);
    }

    /**
     * Gets the SafetyStopTime
     */
    public function getSafetyStopTime(): ?int
    {
        return $this->getValue(18);
    }

    /**
     * Gets the HeartRateSourceType
     */
    public function getHeartRateSourceType(): ?int
    {
        return $this->getValue(19);
    }

    /**
     * Gets the HeartRateSource
     */
    public function getHeartRateSource(): ?int
    {
        return $this->getValue(20);
    }
}
