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
 * HrvMessage message
 */
final class HrvMessage extends Message
{
    #[Field('Time', 0, FitBaseType::UINT16, 1000.0, 0.0, 's', false, ProfileType::UINT16)]
    public ?int $time;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Hrv", MessageNumber::Hrv);
    }
}
