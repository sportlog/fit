<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.188 SDK
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
#[Field('MesgNum', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESGNUM)]
#[Field('ParentIndex', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('FieldNum', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Data', 4, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
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
     * Gets the mesg num
     */
    public function getMesgNum(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the parent index
     */
    public function getParentIndex(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the field num
     */
    public function getFieldNum(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the data
     */
    public function getData(): int|array|null
    {
        return $this->getFieldValue(4);
    }
}
