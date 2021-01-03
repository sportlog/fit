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
 * CadenceZoneMessage message
 */
final class CadenceZoneMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('HighValue', 0, FitBaseType::UINT8, 1.0, 0.0, 'rpm', false, ProfileType::UINT8)]
    public ?int $highValue;

    #[Field('Name', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $name;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("CadenceZone", MessageNumber::CadenceZone);
    }
}
