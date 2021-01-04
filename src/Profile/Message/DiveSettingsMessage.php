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
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getName(): ?string
    {
        return $this->getValue(0);
    }

    public function getModel(): ?int
    {
        return $this->getValue(1);
    }

    public function getGfLow(): ?int
    {
        return $this->getValue(2);
    }

    public function getGfHigh(): ?int
    {
        return $this->getValue(3);
    }

    public function getWaterType(): ?int
    {
        return $this->getValue(4);
    }

    public function getWaterDensity(): ?float
    {
        return $this->getValue(5);
    }

    public function getPo2Warn(): ?int
    {
        return $this->getValue(6);
    }

    public function getPo2Critical(): ?int
    {
        return $this->getValue(7);
    }

    public function getPo2Deco(): ?int
    {
        return $this->getValue(8);
    }

    public function getSafetyStopEnabled(): ?bool
    {
        return $this->getValue(9);
    }

    public function getBottomDepth(): ?float
    {
        return $this->getValue(10);
    }

    public function getBottomTime(): ?int
    {
        return $this->getValue(11);
    }

    public function getApneaCountdownEnabled(): ?bool
    {
        return $this->getValue(12);
    }

    public function getApneaCountdownTime(): ?int
    {
        return $this->getValue(13);
    }

    public function getBacklightMode(): ?int
    {
        return $this->getValue(14);
    }

    public function getBacklightBrightness(): ?int
    {
        return $this->getValue(15);
    }

    public function getBacklightTimeout(): ?int
    {
        return $this->getValue(16);
    }

    public function getRepeatDiveInterval(): ?int
    {
        return $this->getValue(17);
    }

    public function getSafetyStopTime(): ?int
    {
        return $this->getValue(18);
    }

    public function getHeartRateSourceType(): ?int
    {
        return $this->getValue(19);
    }

    public function getHeartRateSource(): ?int
    {
        return $this->getValue(20);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("DiveSettings", MessageNumber::DiveSettings, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('Model', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::TISSUEMODELTYPE),
            new Field('GfLow', 2, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('GfHigh', 3, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('WaterType', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WATERTYPE),
            new Field('WaterDensity', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'kg/m^3', false, ProfileType::FLOAT32),
            new Field('Po2Warn', 6, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('Po2Critical', 7, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('Po2Deco', 8, FitBaseType::UINT8, 100.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('SafetyStopEnabled', 9, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('BottomDepth', 10, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32),
            new Field('BottomTime', 11, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('ApneaCountdownEnabled', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('ApneaCountdownTime', 13, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('BacklightMode', 14, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEBACKLIGHTMODE),
            new Field('BacklightBrightness', 15, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('BacklightTimeout', 16, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::BACKLIGHTTIMEOUT),
            new Field('RepeatDiveInterval', 17, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16),
            new Field('SafetyStopTime', 18, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16),
            new Field('HeartRateSourceType', 19, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SOURCETYPE),
            new Field('HeartRateSource', 20, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)
        ]);
    }
}
