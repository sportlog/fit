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
 * StressLevelMessage message
 */
final class StressLevelMessage extends Message
{
    public function getStressLevelValue(): ?int
    {
        return $this->getValue(0);
    }

    public function getStressLevelTime(): ?DateTime
    {
        return $this->getValue(1);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("StressLevel", MessageNumber::StressLevel, [
        new Field('StressLevelValue', 0, FitBaseType::SINT16, 1.0, 0.0, '', false, ProfileType::SINT16),
            new Field('StressLevelTime', 1, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)
        ]);
    }
}
