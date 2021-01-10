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
 * FileCapabilitiesMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Type', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::FILE)]
#[Field('Flags', 1, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::FILEFLAGS)]
#[Field('Directory', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('MaxCount', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('MaxSize', 4, FitBaseType::UINT32, 1.0, 0.0, 'bytes', false, ProfileType::UINT32)]
final class FileCapabilitiesMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('FileCapabilities', MessageNumber::FileCapabilities);
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
    public function getDirectory(): string|array|null
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
