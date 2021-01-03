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
 * LengthMessage message
 */
final class LengthMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('Event', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENT)]
    public ?int $event;

    #[Field('EventType', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::EVENTTYPE)]
    public ?int $eventType;

    #[Field('StartTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $startTime;

    #[Field('TotalElapsedTime', 3, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $totalElapsedTime;

    #[Field('TotalTimerTime', 4, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $totalTimerTime;

    #[Field('TotalStrokes', 5, FitBaseType::UINT16, 1.0, 0.0, 'strokes', false, ProfileType::UINT16)]
    public ?int $totalStrokes;

    #[Field('AvgSpeed', 6, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
    public ?int $avgSpeed;

    #[Field('SwimStroke', 7, FitBaseType::ENUM, 1.0, 0.0, 'swim_stroke', false, ProfileType::SWIMSTROKE)]
    public ?int $swimStroke;

    #[Field('AvgSwimmingCadence', 9, FitBaseType::UINT8, 1.0, 0.0, 'strokes/min', false, ProfileType::UINT8)]
    public ?int $avgSwimmingCadence;

    #[Field('EventGroup', 10, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $eventGroup;

    #[Field('TotalCalories', 11, FitBaseType::UINT16, 1.0, 0.0, 'kcal', false, ProfileType::UINT16)]
    public ?int $totalCalories;

    #[Field('LengthType', 12, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::LENGTHTYPE)]
    public ?int $lengthType;

    #[Field('PlayerScore', 18, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $playerScore;

    #[Field('OpponentScore', 19, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $opponentScore;

    #[Field('StrokeCount', 20, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $strokeCount;

    #[Field('ZoneCount', 21, FitBaseType::UINT16, 1.0, 0.0, 'counts', false, ProfileType::UINT16)]
    public ?int $zoneCount;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Length", MessageNumber::Length);
    }
}
