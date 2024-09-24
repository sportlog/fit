<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.141 SDK
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
 * RawBbiMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('Data', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('Time', 2, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('Quality', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Gap', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class RawBbiMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('RawBbi', MesgNum::RAW_BBI);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the timestamp ms
     */
    public function getTimestampMs(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the data
     */
    public function getData(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the time
     */
    public function getTime(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the quality
     */
    public function getQuality(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the gap
     */
    public function getGap(): int|array|null
    {
        return $this->getFieldValue(4);
    }
}
