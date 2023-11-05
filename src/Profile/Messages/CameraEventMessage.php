<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * CameraEventMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DateTime)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::Uint16)]
#[Field('CameraEventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CameraEventType)]
#[Field('CameraFileUuid', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::String)]
#[Field('CameraOrientation', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::CameraOrientationType)]
final class CameraEventMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('CameraEvent', MesgNum::CameraEvent->value);
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
     * Gets the camera event type
     */
    public function getCameraEventType(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the camera file uuid
     */
    public function getCameraFileUuid(): string|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the camera orientation
     */
    public function getCameraOrientation(): int|array|null
    {
        return $this->getFieldValue(3);
    }
}
