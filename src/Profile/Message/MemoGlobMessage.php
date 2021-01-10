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

    /**
     * Gets the part index
     */
    public function getPartIndex(): int|array|null
    {
        return $this->getFieldValue(250);
    }

    /**
     * Gets the memo
     */
    public function getMemo(): mixed
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the message number
     */
    public function getMessageNumber(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(2);
    }
}
