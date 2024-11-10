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
 * HsaConfigurationDataMessage message
 */
#[Field('Timestamp', 253, FitBaseType::Uint32->value, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('Data', 0, FitBaseType::Byte->value, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('DataSize', 1, FitBaseType::Uint8->value, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class HsaConfigurationDataMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('HsaConfigurationData', MesgNum::HsaConfigurationData->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the data
     */
    public function getData(): mixed
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the data size
     */
    public function getDataSize(): int|array|null
    {
        return $this->getFieldValue(1);
    }
}
