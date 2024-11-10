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
 * FileCapabilitiesMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Type', 0, FitBaseType::Enum->value, 1.0, 0.0, '', false, ProfileType::FILE)]
#[Field('Flags', 1, FitBaseType::Uint8z->value, 1.0, 0.0, '', false, ProfileType::FILEFLAGS)]
#[Field('Directory', 2, FitBaseType::String->value, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('MaxCount', 3, FitBaseType::Uint16->value, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('MaxSize', 4, FitBaseType::Uint32->value, 1.0, 0.0, 'bytes', false, ProfileType::UINT32)]
final class FileCapabilitiesMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('FileCapabilities', MesgNum::FileCapabilities->value);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the type
     */
    public function getType(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the flags
     */
    public function getFlags(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the directory
     */
    public function getDirectory(): string|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the max count
     */
    public function getMaxCount(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the max size
     */
    public function getMaxSize(): int|array|null
    {
        return $this->getFieldValue(4);
    }
}
