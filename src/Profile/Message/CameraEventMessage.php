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
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('CameraEventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CAMERAEVENTTYPE)]
#[Field('CameraFileUuid', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('CameraOrientation', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CAMERAORIENTATIONTYPE)]
final class CameraEventMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('CameraEvent', MessageNumber::CameraEvent);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the timestamp ms
     */
    public function getTimestampMs(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the camera event type
     */
    public function getCameraEventType(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the camera file uuid
     */
    public function getCameraFileUuid(): ?string
    {
        return $this->getValue(2);
    }

    /**
     * Gets the camera orientation
     */
    public function getCameraOrientation(): ?int
    {
        return $this->getValue(3);
    }
}
