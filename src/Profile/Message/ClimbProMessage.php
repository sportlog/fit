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
 * ClimbProMessage message
 */
final class ClimbProMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('PositionLat', 0, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $positionLat;

    #[Field('PositionLong', 1, FitBaseType::SINT32, 1.0, 0.0, 'semicircles', false, ProfileType::SINT32)]
    public ?int $positionLong;

    #[Field('ClimbProEvent', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CLIMBPROEVENT)]
    public ?int $climbProEvent;

    #[Field('ClimbNumber', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $climbNumber;

    #[Field('ClimbCategory', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $climbCategory;

    #[Field('CurrentDist', 5, FitBaseType::FLOAT32, 1.0, 0.0, 'm', false, ProfileType::FLOAT32)]
    public ?float $currentDist;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("ClimbPro", MessageNumber::ClimbPro);
    }
}
