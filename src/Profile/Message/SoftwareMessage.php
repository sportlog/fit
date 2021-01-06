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
 * SoftwareMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Version', 3, FitBaseType::UINT16, 100.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('PartNumber', 5, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
final class SoftwareMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Software', MessageNumber::Software);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): ?int
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the version
     */
    public function getVersion(): ?int
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the part number
     */
    public function getPartNumber(): ?string
    {
        return $this->getFieldValue(5);
    }
}
