<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.171 SDK
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
 * HsaBodyBatteryDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('ProcessingInterval', 0, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('Level', 1, FitBaseType::SINT8, 1.0, 0.0, 'percent', false, ProfileType::SINT8)]
#[Field('Charged', 2, FitBaseType::SINT16, 1.0, 0.0, '', false, ProfileType::SINT16)]
#[Field('Uncharged', 3, FitBaseType::SINT16, 1.0, 0.0, '', false, ProfileType::SINT16)]
final class HsaBodyBatteryDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('HsaBodyBatteryData', MesgNum::HSA_BODY_BATTERY_DATA);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the processing interval
     */
    public function getProcessingInterval(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the level
     */
    public function getLevel(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the charged
     */
    public function getCharged(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the uncharged
     */
    public function getUncharged(): int|array|null
    {
        return $this->getFieldValue(3);
    }
}
