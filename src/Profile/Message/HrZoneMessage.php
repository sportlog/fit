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
 * HrZoneMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('HighBpm', 1, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
#[Field('Name', 2, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
final class HrZoneMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('HrZone', MessageNumber::HrZone);
    }

    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getHighBpm(): ?int
    {
        return $this->getValue(1);
    }

    public function getName(): ?string
    {
        return $this->getValue(2);
    }
}
