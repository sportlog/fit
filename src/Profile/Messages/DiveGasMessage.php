<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.126Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * DiveGasMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('HeliumContent', 0, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('OxygenContent', 1, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
#[Field('Status', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEGASSTATUS)]
#[Field('Mode', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEGASMODE)]
final class DiveGasMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('DiveGas', MesgNum::DIVE_GAS);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the helium content
     */
    public function getHeliumContent(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the oxygen content
     */
    public function getOxygenContent(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the status
     */
    public function getStatus(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the mode
     */
    public function getMode(): int|array|null
    {
        return $this->getFieldValue(3);
    }
}
