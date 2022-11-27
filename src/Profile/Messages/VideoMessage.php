<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.89Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

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
        parent::__construct('Video', MesgNum::VIDEO);
    }

    /**
     * Gets the url
     */
    public function getUrl(): string|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the hosting provider
     */
    public function getHostingProvider(): string|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the duration
     */
    public function getDuration(): int|array|null
    {
        return $this->getFieldValue(2);
    }
}
