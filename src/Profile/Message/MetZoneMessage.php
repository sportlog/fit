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
 * MetZoneMessage message
 */
final class MetZoneMessage extends Message
{
    #[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
    public ?int $messageIndex;

    #[Field('HighBpm', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $highBpm;

    #[Field('Calories', 2, FitBaseType::UINT16, 10.0, 0.0, 'kcal / min', false, ProfileType::UINT16)]
    public ?int $calories;

    #[Field('FatCalories', 3, FitBaseType::UINT8, 10.0, 0.0, 'kcal / min', false, ProfileType::UINT8)]
    public ?int $fatCalories;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("MetZone", MessageNumber::MetZone);
    }
}
