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
 * VideoFrameMessage message
 */
final class VideoFrameMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $timestampMs;

    #[Field('FrameNumber', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $frameNumber;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("VideoFrame", MessageNumber::VideoFrame);
    }
}
