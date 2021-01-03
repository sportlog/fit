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
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Type', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::FILE)]
    public ?int $type;

    #[Field('Flags', 1, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::FILEFLAGS)]
    public ?int $flags;

    #[Field('Directory', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $directory;

    #[Field('MaxCount', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $maxCount;

    #[Field('MaxSize', 4, FitBaseType::UINT32, 1.0, 0.0, 'bytes', false, ProfileType::UINT32)]
    public ?int $maxSize;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("FileCapabilities", MessageNumber::FileCapabilities);
    }
}
