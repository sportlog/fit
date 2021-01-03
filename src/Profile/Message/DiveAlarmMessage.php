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
 * DiveAlarmMessage message
 */
final class DiveAlarmMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Depth', 0, FitBaseType::UINT32, 1000.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $depth;

    #[Field('Time', 1, FitBaseType::SINT32, 1.0, 0.0, 's', false, ProfileType::SINT32)]
    public ?int $time;

    #[Field('Enabled', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $enabled;

    #[Field('AlarmType', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DIVEALARMTYPE)]
    public ?int $alarmType;

    #[Field('Sound', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::TONE)]
    public ?int $sound;

    #[Field('DiveTypes', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
    public ?int $diveTypes;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("DiveAlarm", MessageNumber::DiveAlarm);
    }
}
