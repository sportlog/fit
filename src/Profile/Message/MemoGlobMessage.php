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
#[Field('PartIndex', 250, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
#[Field('Memo', 0, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('MessageNumber', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('MessageIndex', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
final class MemoGlobMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('MemoGlob', MessageNumber::MemoGlob);
    }

    public function getPartIndex(): ?int
    {
        return $this->getValue(250);
    }

    public function getMemo(): ?int
    {
        return $this->getValue(0);
    }

    public function getMessageNumber(): ?int
    {
        return $this->getValue(1);
    }

    public function getMessageIndex(): ?int
    {
        return $this->getValue(2);
    }
}
