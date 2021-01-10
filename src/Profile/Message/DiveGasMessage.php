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
 * DiveGasMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('HeliumContent', 0, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('OxygenContent', 1, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('Status', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEGASSTATUS)]
final class DiveGasMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('DiveGas', MessageNumber::DiveGas);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the helium content
     */
    public function getHeliumContent(): int|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the oxygen content
     */
    public function getOxygenContent(): int|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the status
     */
    public function getStatus(): int|null
    {
        return $this->getFieldValue(2);
    }
}
