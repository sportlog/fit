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
 * CameraEventMessage message
 */
final class CameraEventMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $timestampMs;

    #[Field('CameraEventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CAMERAEVENTTYPE)]
    public ?int $cameraEventType;

    #[Field('CameraFileUuid', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $cameraFileUuid;

    #[Field('CameraOrientation', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CAMERAORIENTATIONTYPE)]
    public ?int $cameraOrientation;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("CameraEvent", MessageNumber::CameraEvent);
    }
}
