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
 * VideoMessage message
 */
final class VideoMessage extends Message
{
    #[Field('Url', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $url;

    #[Field('HostingProvider', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $hostingProvider;

    #[Field('Duration', 2, FitBaseType::UINT32, 1.0, 0.0, 'ms', false, ProfileType::UINT32)]
    public ?int $duration;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Video", MessageNumber::Video);
    }
}
