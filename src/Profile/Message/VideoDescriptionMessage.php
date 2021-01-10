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
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('MessageCount', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('Text', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
final class VideoDescriptionMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('VideoDescription', MessageNumber::VideoDescription);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the message count
     */
    public function getMessageCount(): int|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the text
     */
    public function getText(): string|null
    {
        return $this->getFieldValue(1);
    }
}
