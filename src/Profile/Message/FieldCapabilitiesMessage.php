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
 * FieldCapabilitiesMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('File', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::FILE)]
#[Field('MesgNum', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESGNUM)]
#[Field('FieldNum', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Count', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
final class FieldCapabilitiesMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('FieldCapabilities', MessageNumber::FieldCapabilities);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): ?int
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the file
     */
    public function getFile(): ?int
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the mesg num
     */
    public function getMesgNum(): ?int
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the field num
     */
    public function getFieldNum(): ?int
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the count
     */
    public function getCount(): ?int
    {
        return $this->getFieldValue(3);
    }
}
