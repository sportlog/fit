<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.54Release
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
        parent::__construct('VideoClip', MesgNum::VIDEO_CLIP);
    }

    /**
     * Gets the clip number
     */
    public function getClipNumber(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the start timestamp
     */
    public function getStartTimestamp(): DateTime|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the start timestamp ms
     */
    public function getStartTimestampMs(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the end timestamp
     */
    public function getEndTimestamp(): DateTime|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the end timestamp ms
     */
    public function getEndTimestampMs(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the clip start
     */
    public function getClipStart(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the clip end
     */
    public function getClipEnd(): int|array|null
    {
        return $this->getFieldValue(7);
    }
}
