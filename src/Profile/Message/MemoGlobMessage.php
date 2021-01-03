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
 * MemoGlobMessage message
 */
final class MemoGlobMessage extends Message
{
    #[Field('PartIndex', 250, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $partIndex;

    #[Field('Memo', 0, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $memo;

    #[Field('MessageNumber', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $messageNumber;

    #[Field('MessageIndex', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("MemoGlob", MessageNumber::MemoGlob);
    }
}
