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
 * ScheduleMessage message
 */
final class ScheduleMessage extends Message
{
    #[Field('Manufacturer', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER)]
    public ?int $manufacturer;

    #[Field('Product', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $product;

    #[Field('SerialNumber', 2, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::UINT32Z)]
    public ?int $serialNumber;

    #[Field('TimeCreated', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $timeCreated;

    #[Field('Completed', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $completed;

    #[Field('Type', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SCHEDULE)]
    public ?int $type;

    #[Field('ScheduledTime', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::LOCALDATETIME)]
    public ?DateTime $scheduledTime;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Schedule", MessageNumber::Schedule);
    }
}
