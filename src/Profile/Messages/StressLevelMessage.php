<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.78Release
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
 * StressLevelMessage message
 */
#[Field('StressLevelValue', 0, FitBaseType::SINT16, 1.0, 0.0, '', false, ProfileType::SINT16)]
#[Field('StressLevelTime', 1, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
final class StressLevelMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('StressLevel', MesgNum::STRESS_LEVEL);
    }

    /**
     * Gets the stress level value
     */
    public function getStressLevelValue(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the stress level time
     */
    public function getStressLevelTime(): DateTime|null
    {
        return $this->getFieldValue(1);
    }
}
