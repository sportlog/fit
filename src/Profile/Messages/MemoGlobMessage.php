<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.60Release
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
        parent::__construct('MemoGlob', MesgNum::MEMO_GLOB);
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
