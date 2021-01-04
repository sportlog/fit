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
 * OhrSettingsMessage message
 */
final class OhrSettingsMessage extends Message
{
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getEnabled(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("OhrSettings", MessageNumber::OhrSettings, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('Enabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SWITCH)
        ]);
    }
}
