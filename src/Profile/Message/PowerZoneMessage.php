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
 * PowerZoneMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('HighValue', 1, FitBaseType::UINT16, 1.0, 0.0, 'watts', false, ProfileType::UINT16)]
#[Field('Name', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
final class PowerZoneMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('PowerZone', MessageNumber::PowerZone);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the high value
     */
    public function getHighValue(): int|array|null
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
