<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.141 SDK
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\FitBaseType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * SdmProfileMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Enabled', 0, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('SdmAntId', 1, FitBaseType::Uint16z->value, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
#[Field('SdmCalFactor', 2, FitBaseType::Uint16->value, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('Odometer', 3, FitBaseType::Uint32->value, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('SpeedSource', 4, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('SdmAntIdTransType', 5, FitBaseType::Uint8z->value, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('OdometerRollover', 7, FitBaseType::Uint8->value, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class SdmProfileMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SdmProfile', MesgNum::SdmProfile->value);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the enabled
     */
    public function getEnabled(): bool|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the sdm ant id
     */
    public function getSdmAntId(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the sdm cal factor
     */
    public function getSdmCalFactor(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the odometer
     */
    public function getOdometer(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the speed source
     */
    public function getSpeedSource(): bool|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the sdm ant id trans type
     */
    public function getSdmAntIdTransType(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the odometer rollover
     */
    public function getOdometerRollover(): int|array|null
    {
        return $this->getFieldValue(7);
    }
}
