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
 * FileCreatorMessage message
 */
#[Field('SoftwareVersion', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('HardwareVersion', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class FileCreatorMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('FileCreator', MessageNumber::FileCreator);
    }

    public function getSoftwareVersion(): ?int
    {
        return $this->getValue(0);
    }

    public function getHardwareVersion(): ?int
    {
        return $this->getValue(1);
    }
}
