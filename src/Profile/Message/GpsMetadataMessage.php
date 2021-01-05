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
 * GpsMetadataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('PositionLat', 1, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('PositionLong', 2, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('EnhancedAltitude', 3, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
#[Field('EnhancedSpeed', 4, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('Heading', 5, FitBaseType::UINT16, 100.0, 0.0, 'degrees', false, ProfileType::UINT16)]
#[Field('UtcTimestamp', 6, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('Velocity', 7, FitBaseType::SINT16, 100.0, 0.0, 'm/s', false, ProfileType::SINT16)]
final class GpsMetadataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('GpsMetadata', MessageNumber::GpsMetadata);
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getTimestampMs(): ?int
    {
        return $this->getValue(0);
    }

    public function getPositionLat(): ?int
    {
        return $this->getValue(1);
    }

    public function getPositionLong(): ?int
    {
        return $this->getValue(2);
    }

    public function getEnhancedAltitude(): ?int
    {
        return $this->getValue(3);
    }

    public function getEnhancedSpeed(): ?int
    {
        return $this->getValue(4);
    }

    public function getHeading(): ?int
    {
        return $this->getValue(5);
    }

    public function getUtcTimestamp(): ?DateTime
    {
        return $this->getValue(6);
    }

    public function getVelocity(): ?int
    {
        return $this->getValue(7);
    }
}
