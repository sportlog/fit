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
 * BarometerDataMessage message
 */
final class BarometerDataMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $timestampMs;

    #[Field('SampleTimeOffset', 1, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $sampleTimeOffset;

    #[Field('BaroPres', 2, FitBaseType::UINT32, 1.0, 0.0, 'Pa', false, ProfileType::UINT32)]
    public ?int $baroPres;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("BarometerData", MessageNumber::BarometerData);
    }
}
