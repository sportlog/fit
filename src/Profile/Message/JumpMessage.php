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
 * JumpMessage message
 */
final class JumpMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('Distance', 0, FitBaseType::FLOAT32, 1.0, 0.0, 'm', false, ProfileType::FLOAT32)]
    public ?float $distance;

    #[Field('Height', 1, FitBaseType::FLOAT32, 1.0, 0.0, 'm', false, ProfileType::FLOAT32)]
    public ?float $height;

    #[Field('Rotations', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $rotations;

    #[Field('HangTime', 3, FitBaseType::FLOAT32, 1.0, 0.0, 's', false, ProfileType::FLOAT32)]
    public ?float $hangTime;

    #[Field('Score', 4, FitBaseType::FLOAT32, 1.0, 0.0, '', false, ProfileType::FLOAT32)]
    public ?float $score;

    #[Field('PositionLat', 5, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $positionLat;

    #[Field('PositionLong', 6, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $positionLong;

    #[Field('Speed', 7, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $speed;

    #[Field('EnhancedSpeed', 8, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
    public ?int $enhancedSpeed;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Jump", MessageNumber::Jump);
    }
}
