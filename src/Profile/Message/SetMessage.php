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
 * SetMessage message
 */
final class SetMessage extends Message
{
    #[Field('Timestamp', 254, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('Duration', 0, FitBaseType::UINT32, 1000.0, 0.0, 's', false, ProfileType::UINT32)]
    public ?int $duration;

    #[Field('Repetitions', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $repetitions;

    #[Field('Weight', 4, FitBaseType::UINT16, 16.0, 0.0, 'kg', false, ProfileType::UINT16)]
    public ?int $weight;

    #[Field('SetType', 5, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::SETTYPE)]
    public ?int $setType;

    #[Field('StartTime', 6, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $startTime;

    #[Field('Category', 7, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::EXERCISECATEGORY)]
    public ?int $category;

    #[Field('CategorySubtype', 8, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $categorySubtype;

    #[Field('WeightDisplayUnit', 9, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::FITBASEUNIT)]
    public ?int $weightDisplayUnit;

    #[Field('MessageIndex', 10, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('WktStepIndex', 11, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $wktStepIndex;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Set", MessageNumber::Set);
    }
}
