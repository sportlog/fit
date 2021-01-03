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
 * WatchfaceSettingsMessage message
 */
final class WatchfaceSettingsMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Mode', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WATCHFACEMODE)]
    public ?int $mode;

    #[Field('Layout', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $layout;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("WatchfaceSettings", MessageNumber::WatchfaceSettings);
    }
}
