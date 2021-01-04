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
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getMode(): ?int
    {
        return $this->getValue(0);
    }

    public function getLayout(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("WatchfaceSettings", MessageNumber::WatchfaceSettings, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Mode', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WATCHFACEMODE),
            new Field('Layout', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)
        ]);
    }
}
