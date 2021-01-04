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
    public function getUrl(): ?string
    {
        return $this->getValue(0);
    }

    public function getHostingProvider(): ?string
    {
        return $this->getValue(1);
    }

    public function getDuration(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Video", MessageNumber::Video, [
        new Field('Url', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('HostingProvider', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('Duration', 2, FitBaseType::UINT32, 1.0, 0.0, 'ms', false, ProfileType::UINT32)
        ]);
    }
}
