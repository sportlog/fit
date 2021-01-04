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

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("MemoGlob", MessageNumber::MemoGlob, [
        new Field('PartIndex', 250, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32),
            new Field('Memo', 0, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE),
            new Field('MessageNumber', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('MessageIndex', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)
        ]);
    }
}
