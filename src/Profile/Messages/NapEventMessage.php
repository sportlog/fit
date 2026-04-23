<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.201 SDK
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
 * NapEventMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('StartTime', 0, FitBaseType::UINT32, 1.0, 0.0, 'seconds', false, ProfileType::DATETIME)]
#[Field('StartTimezoneOffset', 1, FitBaseType::SINT16, 1.0, 0.0, 'minutes', false, ProfileType::SINT16)]
#[Field('EndTime', 2, FitBaseType::UINT32, 1.0, 0.0, 'seconds', false, ProfileType::DATETIME)]
#[Field('EndTimezoneOffset', 3, FitBaseType::SINT16, 1.0, 0.0, 'minutes', false, ProfileType::SINT16)]
#[Field('Feedback', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::NAPPERIODFEEDBACK)]
#[Field('IsDeleted', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('Source', 6, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::NAPSOURCE)]
#[Field('UpdateTimestamp', 7, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
final class NapEventMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('NapEvent', MesgNum::NAP_EVENT);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the start time
     */
    public function getStartTime(): DateTime|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the start timezone offset
     */
    public function getStartTimezoneOffset(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the end time
     */
    public function getEndTime(): DateTime|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the end timezone offset
     */
    public function getEndTimezoneOffset(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the feedback
     */
    public function getFeedback(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the is deleted
     */
    public function getIsDeleted(): bool|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the source
     */
    public function getSource(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the update timestamp
     */
    public function getUpdateTimestamp(): DateTime|null
    {
        return $this->getFieldValue(7);
    }
}
