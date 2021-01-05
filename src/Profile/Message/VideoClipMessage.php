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

    public function getClipNumber(): ?int
    {
        return $this->getValue(0);
    }

    public function getStartTimestamp(): ?DateTime
    {
        return $this->getValue(1);
    }

    public function getStartTimestampMs(): ?int
    {
        return $this->getValue(2);
    }

    public function getEndTimestamp(): ?DateTime
    {
        return $this->getValue(3);
    }

    public function getEndTimestampMs(): ?int
    {
        return $this->getValue(4);
    }

    public function getClipStart(): ?int
    {
        return $this->getValue(6);
    }

    public function getClipEnd(): ?int
    {
        return $this->getValue(7);
    }
}
