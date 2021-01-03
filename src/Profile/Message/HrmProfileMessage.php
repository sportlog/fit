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
 * HrmProfileMessage message
 */
final class HrmProfileMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Enabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $enabled;

    #[Field('HrmAntId', 1, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
    public ?int $hrmAntId;

    #[Field('LogHrv', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $logHrv;

    #[Field('HrmAntIdTransType', 3, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
    public ?int $hrmAntIdTransType;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("HrmProfile", MessageNumber::HrmProfile);
    }
}
