<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.60Release
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
 * AntTxMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('FractionalTimestamp', 0, FitBaseType::UINT16, 32768.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('MesgId', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('MesgData', 2, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('ChannelNumber', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Data', 4, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
final class AntTxMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('AntTx', MesgNum::ANT_TX);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the fractional timestamp
     */
    public function getFractionalTimestamp(): float|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the mesg id
     */
    public function getMesgId(): mixed
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the mesg data
     */
    public function getMesgData(): mixed
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the channel number
     */
    public function getChannelNumber(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the data
     */
    public function getData(): mixed
    {
        return $this->getFieldValue(4);
    }
}
