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
 * MesgCapabilitiesMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('File', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::FILE)]
#[Field('MesgNum', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESGNUM)]
#[Field('CountType', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::MESGCOUNT)]
#[Field('Count', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
final class MesgCapabilitiesMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('MesgCapabilities', MessageNumber::MesgCapabilities);
    }

    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getFile(): ?int
    {
        return $this->getValue(0);
    }

    public function getMesgNum(): ?int
    {
        return $this->getValue(1);
    }

    public function getCountType(): ?int
    {
        return $this->getValue(2);
    }

    public function getCount(): ?int
    {
        return $this->getValue(3);
    }
}
