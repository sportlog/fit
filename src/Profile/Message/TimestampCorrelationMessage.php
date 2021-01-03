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
 * TimestampCorrelationMessage message
 */
final class TimestampCorrelationMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('FractionalTimestamp', 0, FitBaseType::UINT16, 32768.0, 0.0, 's', false, ProfileType::UINT16)]
    public ?int $fractionalTimestamp;

    #[Field('SystemTimestamp', 1, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $systemTimestamp;

    #[Field('FractionalSystemTimestamp', 2, FitBaseType::UINT16, 32768.0, 0.0, 's', false, ProfileType::UINT16)]
    public ?int $fractionalSystemTimestamp;

    #[Field('LocalTimestamp', 3, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::LOCALDATETIME)]
    public ?DateTime $localTimestamp;

    #[Field('TimestampMs', 4, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $timestampMs;

    #[Field('SystemTimestampMs', 5, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $systemTimestampMs;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("TimestampCorrelation", MessageNumber::TimestampCorrelation);
    }
}
