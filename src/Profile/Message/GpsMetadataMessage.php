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
final class GpsMetadataMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $timestampMs;

    #[Field('PositionLat', 1, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $positionLat;

    #[Field('PositionLong', 2, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $positionLong;

    #[Field('EnhancedAltitude', 3, FitBaseType::UINT32, 5.0, 500.0, 'm', false, ProfileType::UINT32)]
    public ?int $enhancedAltitude;

    #[Field('EnhancedSpeed', 4, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
    public ?int $enhancedSpeed;

    #[Field('Heading', 5, FitBaseType::UINT16, 100.0, 0.0, 'degrees', false, ProfileType::UINT16)]
    public ?int $heading;

    #[Field('UtcTimestamp', 6, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $utcTimestamp;

    #[Field('Velocity', 7, FitBaseType::SINT16, 100.0, 0.0, 'm/s', false, ProfileType::SINT16)]
    public ?int $velocity;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("GpsMetadata", MessageNumber::GpsMetadata);
    }
}
