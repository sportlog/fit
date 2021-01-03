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
 * VideoDescriptionMessage message
 */
final class VideoDescriptionMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('MessageCount', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $messageCount;

    #[Field('Text', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $text;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("VideoDescription", MessageNumber::VideoDescription);
    }
}
