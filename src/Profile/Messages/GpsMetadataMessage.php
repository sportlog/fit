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
 * GpsMetadataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::Uint16->value, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('PositionLat', 1, FitBaseType::Sint32->value, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('PositionLong', 2, FitBaseType::Sint32->value, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
#[Field('EnhancedAltitude', 3, FitBaseType::Uint32->value, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
#[Field('EnhancedSpeed', 4, FitBaseType::Uint32->value, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('Heading', 5, FitBaseType::Uint16->value, 100.0, 0.0, 'degrees', false, ProfileType::UINT16)]
#[Field('UtcTimestamp', 6, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('Velocity', 7, FitBaseType::Sint16->value, 100.0, 0.0, 'm/s', false, ProfileType::SINT16)]
final class GpsMetadataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('GpsMetadata', MesgNum::GpsMetadata->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the timestamp ms
     */
    public function getTimestampMs(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the position lat
     */
    public function getPositionLat(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the position long
     */
    public function getPositionLong(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the enhanced altitude
     */
    public function getEnhancedAltitude(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the enhanced speed
     */
    public function getEnhancedSpeed(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the heading
     */
    public function getHeading(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the utc timestamp
     */
    public function getUtcTimestamp(): DateTime|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the velocity
     */
    public function getVelocity(): float|array|null
    {
        return $this->getFieldValue(7);
    }
}
