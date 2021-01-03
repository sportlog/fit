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
 * GoalMessage message
 */
final class GoalMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Sport', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
    public ?int $sport;

    #[Field('SubSport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT)]
    public ?int $subSport;

    #[Field('StartDate', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $startDate;

    #[Field('EndDate', 3, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $endDate;

    #[Field('Type', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GOAL)]
    public ?int $type;

    #[Field('Value', 5, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $value;

    #[Field('Repeat', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $repeat;

    #[Field('TargetValue', 7, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $targetValue;

    #[Field('Recurrence', 8, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GOALRECURRENCE)]
    public ?int $recurrence;

    #[Field('RecurrenceValue', 9, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $recurrenceValue;

    #[Field('Enabled', 10, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
    public ?bool $enabled;

    #[Field('Source', 11, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::GOALSOURCE)]
    public ?int $source;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Goal", MessageNumber::Goal);
    }
}
