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
 * TotalsMessage message
 */
final class TotalsMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('TimerTime', 0, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $timerTime;

    #[Field('Distance', 1, FitBaseType::UINT32, 1.0, 0.0, 'm', false, ProfileType::UINT32)]
    public ?int $distance;

    #[Field('Calories', 2, FitBaseType::UINT32, 1.0, 0.0, 'kcal', false, ProfileType::UINT32)]
    public ?int $calories;

    #[Field('Sport', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT)]
    public ?int $sport;

    #[Field('ElapsedTime', 4, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $elapsedTime;

    #[Field('Sessions', 5, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $sessions;

    #[Field('ActiveTime', 6, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $activeTime;

    #[Field('SportIndex', 9, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $sportIndex;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Totals", MessageNumber::Totals);
    }
}
