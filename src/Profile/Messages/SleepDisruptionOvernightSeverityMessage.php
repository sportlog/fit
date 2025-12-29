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
 * SleepDisruptionOvernightSeverityMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('Severity', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SLEEPDISRUPTIONSEVERITY)]
final class SleepDisruptionOvernightSeverityMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SleepDisruptionOvernightSeverity', MesgNum::SLEEP_DISRUPTION_OVERNIGHT_SEVERITY);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the severity
     */
    public function getSeverity(): int|array|null
    {
        return $this->getFieldValue(0);
    }
}
