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
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\FitBaseType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * HsaStepDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('ProcessingInterval', 0, FitBaseType::Uint16->value, 1.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('Steps', 1, FitBaseType::Uint32->value, 1.0, 0.0, 'steps', false, ProfileType::UINT32)]
final class HsaStepDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('HsaStepData', MesgNum::HsaStepData->value);
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
     * Gets the steps
     */
    public function getSteps(): int|array|null
    {
        return $this->getFieldValue(1);
    }
}
