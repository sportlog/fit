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
 * VideoTitleMessage message
 */
final class VideoTitleMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getMessageCount(): ?int
    {
        return $this->getValue(0);
    }

    public function getText(): ?string
    {
        return $this->getValue(1);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("VideoTitle", MessageNumber::VideoTitle, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('MessageCount', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('Text', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)
        ]);
    }
}
