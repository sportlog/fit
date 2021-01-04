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
final class DiveGasMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getHeliumContent(): ?int
    {
        return $this->getValue(0);
    }

    public function getOxygenContent(): ?int
    {
        return $this->getValue(1);
    }

    public function getStatus(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("DiveGas", MessageNumber::DiveGas, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('HeliumContent', 0, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('OxygenContent', 1, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8),
            new Field('Status', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEGASSTATUS)
        ]);
    }
}
