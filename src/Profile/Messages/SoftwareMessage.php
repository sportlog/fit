<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.141 SDK
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\FitBaseType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * SoftwareMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Version', 3, FitBaseType::Uint16->value, 100.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('PartNumber', 5, FitBaseType::String->value, 1.0, 0.0, '', false, ProfileType::STRING)]
final class SoftwareMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Software', MesgNum::Software->value);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the version
     */
    public function getVersion(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the part number
     */
    public function getPartNumber(): string|null
    {
        return $this->getFieldValue(5);
    }
}
