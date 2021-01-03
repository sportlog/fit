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
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('HeliumContent', 0, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $heliumContent;

    #[Field('OxygenContent', 1, FitBaseType::UINT8, 1.0, 0.0, 'percent', false, ProfileType::UINT8)]
    public ?int $oxygenContent;

    #[Field('Status', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEGASSTATUS)]
    public ?int $status;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("DiveGas", MessageNumber::DiveGas);
    }
}
