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
 * HrMessage message
 */
final class HrMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('FractionalTimestamp', 0, FitBaseType::UINT16, 32768.0, 0.0, 's', false, ProfileType::UINT16)]
    public ?int $fractionalTimestamp;

    #[Field('Time256', 1, FitBaseType::UINT8, 256.0, 0.0, 's', false, ProfileType::UINT8)]
    public ?int $time256;

    #[Field('FilteredBpm', 6, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8)]
    public ?int $filteredBpm;

    #[Field('EventTimestamp', 9, FitBaseType::UINT32, 1024.0, 0.0, 's', true, ProfileType::UINT32)]
    public ?int $eventTimestamp;

    #[Field('EventTimestamp12', 10, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $eventTimestamp12;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Hr", MessageNumber::Hr);
    }
}
