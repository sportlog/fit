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
final class FileCapabilitiesMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getType(): ?int
    {
        return $this->getValue(0);
    }

    public function getFlags(): ?int
    {
        return $this->getValue(1);
    }

    public function getDirectory(): ?string
    {
        return $this->getValue(2);
    }

    public function getMaxCount(): ?int
    {
        return $this->getValue(3);
    }

    public function getMaxSize(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("FileCapabilities", MessageNumber::FileCapabilities, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Type', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::FILE),
            new Field('Flags', 1, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::FILEFLAGS),
            new Field('Directory', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('MaxCount', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('MaxSize', 4, FitBaseType::UINT32, 1.0, 0.0, 'bytes', false, ProfileType::UINT32)
        ]);
    }
}
