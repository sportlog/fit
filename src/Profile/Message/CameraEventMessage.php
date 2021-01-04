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
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getTimestampMs(): ?int
    {
        return $this->getValue(0);
    }

    public function getCameraEventType(): ?int
    {
        return $this->getValue(1);
    }

    public function getCameraFileUuid(): ?string
    {
        return $this->getValue(2);
    }

    public function getCameraOrientation(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("CameraEvent", MessageNumber::CameraEvent, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16),
            new Field('CameraEventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CAMERAEVENTTYPE),
            new Field('CameraFileUuid', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('CameraOrientation', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CAMERAORIENTATIONTYPE)
        ]);
    }
}
