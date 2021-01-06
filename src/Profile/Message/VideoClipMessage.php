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
 * VideoClipMessage message
 */
#[Field('ClipNumber', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('StartTimestamp', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('StartTimestampMs', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('EndTimestamp', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('EndTimestampMs', 4, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('ClipStart', 6, FitBaseType::UINT32, 1.0, 0.0, 'ms', false, ProfileType::UINT32)]
#[Field('ClipEnd', 7, FitBaseType::UINT32, 1.0, 0.0, 'ms', false, ProfileType::UINT32)]
final class VideoClipMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('VideoClip', MessageNumber::VideoClip);
    }

    /**
     * Gets the clip number
     */
    public function getClipNumber(): ?int
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the start timestamp
     */
    public function getStartTimestamp(): ?DateTime
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the start timestamp ms
     */
    public function getStartTimestampMs(): ?int
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the end timestamp
     */
    public function getEndTimestamp(): ?DateTime
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the end timestamp ms
     */
    public function getEndTimestampMs(): ?int
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the clip start
     */
    public function getClipStart(): ?int
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the clip end
     */
    public function getClipEnd(): ?int
    {
        return $this->getFieldValue(7);
    }
}
