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
final class VideoClipMessage extends Message
{
    #[Field('ClipNumber', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $clipNumber;

    #[Field('StartTimestamp', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $startTimestamp;

    #[Field('StartTimestampMs', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $startTimestampMs;

    #[Field('EndTimestamp', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $endTimestamp;

    #[Field('EndTimestampMs', 4, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $endTimestampMs;

    #[Field('ClipStart', 6, FitBaseType::UINT32, 1.0, 0.0, 'ms', false, ProfileType::UINT32)]
    public ?int $clipStart;

    #[Field('ClipEnd', 7, FitBaseType::UINT32, 1.0, 0.0, 'ms', false, ProfileType::UINT32)]
    public ?int $clipEnd;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("VideoClip", MessageNumber::VideoClip);
    }
}
