<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Messages;

use DateTime;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * MetZoneMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MessageIndex)]
#[Field('HighBpm', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('Calories', 2, FitBaseType::UINT16, 10.0, 0.0, 'kcal / min', false, ProfileType::Uint16)]
#[Field('FatCalories', 3, FitBaseType::UINT8, 10.0, 0.0, 'kcal / min', false, ProfileType::Uint8)]
final class MetZoneMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('MetZone', MesgNum::MetZone);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the high bpm
     */
    public function getHighBpm(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the calories
     */
    public function getCalories(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the fat calories
     */
    public function getFatCalories(): float|array|null
    {
        return $this->getFieldValue(3);
    }
}
