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
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getName(): ?string
    {
        return $this->getValue(0);
    }

    public function getSport(): ?int
    {
        return $this->getValue(1);
    }

    public function getSubSport(): ?int
    {
        return $this->getValue(2);
    }

    public function getOdometer(): ?int
    {
        return $this->getValue(3);
    }

    public function getBikeSpdAntId(): ?int
    {
        return $this->getValue(4);
    }

    public function getBikeCadAntId(): ?int
    {
        return $this->getValue(5);
    }

    public function getBikeSpdcadAntId(): ?int
    {
        return $this->getValue(6);
    }

    public function getBikePowerAntId(): ?int
    {
        return $this->getValue(7);
    }

    public function getCustomWheelsize(): ?int
    {
        return $this->getValue(8);
    }

    public function getAutoWheelsize(): ?int
    {
        return $this->getValue(9);
    }

    public function getBikeWeight(): ?int
    {
        return $this->getValue(10);
    }

    public function getPowerCalFactor(): ?int
    {
        return $this->getValue(11);
    }

    public function getAutoWheelCal(): ?bool
    {
        return $this->getValue(12);
    }

    public function getAutoPowerZero(): ?bool
    {
        return $this->getValue(13);
    }

    public function getId(): ?int
    {
        return $this->getValue(14);
    }

    public function getSpdEnabled(): ?bool
    {
        return $this->getValue(15);
    }

    public function getCadEnabled(): ?bool
    {
        return $this->getValue(16);
    }

    public function getSpdcadEnabled(): ?bool
    {
        return $this->getValue(17);
    }

    public function getPowerEnabled(): ?bool
    {
        return $this->getValue(18);
    }

    public function getCrankLength(): ?int
    {
        return $this->getValue(19);
    }

    public function getEnabled(): ?bool
    {
        return $this->getValue(20);
    }

    public function getBikeSpdAntIdTransType(): ?int
    {
        return $this->getValue(21);
    }

    public function getBikeCadAntIdTransType(): ?int
    {
        return $this->getValue(22);
    }

    public function getBikeSpdcadAntIdTransType(): ?int
    {
        return $this->getValue(23);
    }

    public function getBikePowerAntIdTransType(): ?int
    {
        return $this->getValue(24);
    }

    public function getOdometerRollover(): ?int
    {
        return $this->getValue(37);
    }

    public function getFrontGearNum(): ?int
    {
        return $this->getValue(38);
    }

    public function getFrontGear(): ?int
    {
        return $this->getValue(39);
    }

    public function getRearGearNum(): ?int
    {
        return $this->getValue(40);
    }

    public function getRearGear(): ?int
    {
        return $this->getValue(41);
    }

    public function getShimanoDi2Enabled(): ?bool
    {
        return $this->getValue(44);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("BikeProfile", MessageNumber::BikeProfile, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Name', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('Sport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT),
            new Field('SubSport', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT),
            new Field('Odometer', 3, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32),
            new Field('BikeSpdAntId', 4, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z),
            new Field('BikeCadAntId', 5, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z),
            new Field('BikeSpdcadAntId', 6, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z),
            new Field('BikePowerAntId', 7, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z),
            new Field('CustomWheelsize', 8, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('AutoWheelsize', 9, FitBaseType::UINT16, 1000.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('BikeWeight', 10, FitBaseType::UINT16, 10.0, 0.0, 'kg', false, ProfileType::UINT16),
            new Field('PowerCalFactor', 11, FitBaseType::UINT16, 10.0, 0.0, '%', false, ProfileType::UINT16),
            new Field('AutoWheelCal', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('AutoPowerZero', 13, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('Id', 14, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('SpdEnabled', 15, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('CadEnabled', 16, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('SpdcadEnabled', 17, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('PowerEnabled', 18, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('CrankLength', 19, FitBaseType::UINT8, 2.0, -110.0, 'mm', false, ProfileType::UINT8),
            new Field('Enabled', 20, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('BikeSpdAntIdTransType', 21, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('BikeCadAntIdTransType', 22, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('BikeSpdcadAntIdTransType', 23, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('BikePowerAntIdTransType', 24, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('OdometerRollover', 37, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('FrontGearNum', 38, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('FrontGear', 39, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('RearGearNum', 40, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('RearGear', 41, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('ShimanoDi2Enabled', 44, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)
        ]);
    }
}
