<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Message;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\MessageNumber;
use Sportlog\FIT\Profile\ProfileType;

/**
 * BikeProfileMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Sport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
#[Field('SubSport', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
#[Field('Odometer', 3, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('BikeSpdAntId', 4, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
#[Field('BikeCadAntId', 5, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
#[Field('BikeSpdcadAntId', 6, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
#[Field('BikePowerAntId', 7, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
#[Field('CustomWheelsize', 8, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('AutoWheelsize', 9, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16)]
#[Field('BikeWeight', 10, FitBaseType::UINT16, 10.0, 0.0, 'kg', false, ProfileType::UINT16)]
#[Field('PowerCalFactor', 11, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16)]
#[Field('AutoWheelCal', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('AutoPowerZero', 13, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('Id', 14, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('SpdEnabled', 15, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('CadEnabled', 16, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('SpdcadEnabled', 17, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('PowerEnabled', 18, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('CrankLength', 19, FitBaseType::UINT8, 2.0, -110.0, 'mm', false, ProfileType::UINT8)]
#[Field('Enabled', 20, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('BikeSpdAntIdTransType', 21, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('BikeCadAntIdTransType', 22, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('BikeSpdcadAntIdTransType', 23, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('BikePowerAntIdTransType', 24, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('OdometerRollover', 37, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('FrontGearNum', 38, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('FrontGear', 39, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('RearGearNum', 40, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('RearGear', 41, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('ShimanoDi2Enabled', 44, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
final class BikeProfileMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('BikeProfile', MessageNumber::BikeProfile);
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
     * Gets the sport
     */
    public function getSport(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the sub sport
     */
    public function getSubSport(): int|array|null
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
     * Gets the bike spd ant id
     */
    public function getBikeSpdAntId(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the bike cad ant id
     */
    public function getBikeCadAntId(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the bike spdcad ant id
     */
    public function getBikeSpdcadAntId(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the bike power ant id
     */
    public function getBikePowerAntId(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the custom wheelsize
     */
    public function getCustomWheelsize(): float|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the auto wheelsize
     */
    public function getAutoWheelsize(): float|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the bike weight
     */
    public function getBikeWeight(): float|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the power cal factor
     */
    public function getPowerCalFactor(): float|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the auto wheel cal
     */
    public function getAutoWheelCal(): bool|array|null
    {
        return $this->getFieldValue(12);
    }

    /**
     * Gets the auto power zero
     */
    public function getAutoPowerZero(): bool|array|null
    {
        return $this->getFieldValue(13);
    }

    /**
     * Gets the id
     */
    public function getId(): int|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the spd enabled
     */
    public function getSpdEnabled(): bool|array|null
    {
        return $this->getFieldValue(15);
    }

    /**
     * Gets the cad enabled
     */
    public function getCadEnabled(): bool|array|null
    {
        return $this->getFieldValue(16);
    }

    /**
     * Gets the spdcad enabled
     */
    public function getSpdcadEnabled(): bool|array|null
    {
        return $this->getFieldValue(17);
    }

    /**
     * Gets the power enabled
     */
    public function getPowerEnabled(): bool|array|null
    {
        return $this->getFieldValue(18);
    }

    /**
     * Gets the crank length
     */
    public function getCrankLength(): float|array|null
    {
        return $this->getFieldValue(19);
    }

    /**
     * Gets the enabled
     */
    public function getEnabled(): bool|array|null
    {
        return $this->getFieldValue(20);
    }

    /**
     * Gets the bike spd ant id trans type
     */
    public function getBikeSpdAntIdTransType(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the bike cad ant id trans type
     */
    public function getBikeCadAntIdTransType(): int|array|null
    {
        return $this->getFieldValue(22);
    }

    /**
     * Gets the bike spdcad ant id trans type
     */
    public function getBikeSpdcadAntIdTransType(): int|array|null
    {
        return $this->getFieldValue(23);
    }

    /**
     * Gets the bike power ant id trans type
     */
    public function getBikePowerAntIdTransType(): int|array|null
    {
        return $this->getFieldValue(24);
    }

    /**
     * Gets the odometer rollover
     */
    public function getOdometerRollover(): int|array|null
    {
        return $this->getFieldValue(37);
    }

    /**
     * Gets the front gear num
     */
    public function getFrontGearNum(): int|array|null
    {
        return $this->getFieldValue(38);
    }

    /**
     * Gets the front gear
     */
    public function getFrontGear(): int|array|null
    {
        return $this->getFieldValue(39);
    }

    /**
     * Gets the rear gear num
     */
    public function getRearGearNum(): int|array|null
    {
        return $this->getFieldValue(40);
    }

    /**
     * Gets the rear gear
     */
    public function getRearGear(): int|array|null
    {
        return $this->getFieldValue(41);
    }

    /**
     * Gets the shimano di2 enabled
     */
    public function getShimanoDi2Enabled(): bool|array|null
    {
        return $this->getFieldValue(44);
    }
}
