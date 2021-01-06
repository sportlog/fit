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
#[Field('Url', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('HostingProvider', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('Duration', 2, FitBaseType::UINT32, 1.0, 0.0, 'ms', false, ProfileType::UINT32)]
final class VideoMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Video', MessageNumber::Video);
    }

    /**
     * Gets the url
     */
    public function getUrl(): ?string
    {
        return $this->getValue(0);
    }

    /**
     * Gets the hosting provider
     */
    public function getHostingProvider(): ?string
    {
        return $this->getValue(1);
    }

    /**
     * Gets the duration
     */
    public function getDuration(): ?int
    {
        return $this->getValue(2);
    }
}
