<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.188 SDK
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
 * HsaWristTemperatureDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('ProcessingInterval', 0, FitBaseType::UINT16, 1.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('Value', 1, FitBaseType::UINT16, 1000.0, 0.0, 'degC', false, ProfileType::UINT16)]
final class HsaWristTemperatureDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('HsaWristTemperatureData', MesgNum::HSA_WRIST_TEMPERATURE_DATA);
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
     * Gets the value
     */
    public function getValue(): float|array|null
    {
        return $this->getFieldValue(1);
    }
}
