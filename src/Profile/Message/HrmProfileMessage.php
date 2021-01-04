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
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getEnabled(): ?bool
    {
        return $this->getValue(0);
    }

    public function getHrmAntId(): ?int
    {
        return $this->getValue(1);
    }

    public function getLogHrv(): ?bool
    {
        return $this->getValue(2);
    }

    public function getHrmAntIdTransType(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("HrmProfile", MessageNumber::HrmProfile, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Enabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('HrmAntId', 1, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z),
            new Field('LogHrv', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL),
            new Field('HrmAntIdTransType', 3, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)
        ]);
    }
}
