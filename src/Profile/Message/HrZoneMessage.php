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
 * HrZoneMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('HighBpm', 1, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('Name', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
final class HrZoneMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('HrZone', MessageNumber::HrZone);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the high bpm
     */
    public function getHighBpm(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the name
     */
    public function getName(): string|array|null
    {
        return $this->getFieldValue(2);
    }
}
