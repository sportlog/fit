<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * WatchfaceSettingsMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MessageIndex)]
#[Field('Mode', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WatchfaceMode)]
#[Field('Layout', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::Byte)]
final class WatchfaceSettingsMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('WatchfaceSettings', MesgNum::WatchfaceSettings->value);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the mode
     */
    public function getMode(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the layout
     */
    public function getLayout(): mixed
    {
        return $this->getFieldValue(1);
    }
}
