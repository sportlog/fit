<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Message;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\MessageNumber;
use Sportlog\FIT\Profile\ProfileType;

/**
 * OhrSettingsMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('Enabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SWITCH)]
final class OhrSettingsMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('OhrSettings', MessageNumber::OhrSettings);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the enabled
     */
    public function getEnabled(): int|array|null
    {
        return $this->getFieldValue(0);
    }
}
