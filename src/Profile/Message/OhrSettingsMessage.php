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
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('Enabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SWITCH)]
    public ?int $enabled;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("OhrSettings", MessageNumber::OhrSettings);
    }
}
