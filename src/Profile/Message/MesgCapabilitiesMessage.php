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
final class MesgCapabilitiesMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('File', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::FILE)]
    public ?int $file;

    #[Field('MesgNum', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESGNUM)]
    public ?int $mesgNum;

    #[Field('CountType', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::MESGCOUNT)]
    public ?int $countType;

    #[Field('Count', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $count;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("MesgCapabilities", MessageNumber::MesgCapabilities);
    }
}
