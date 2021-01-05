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
 * AntRxMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('FractionalTimestamp', 0, FitBaseType::UINT16, 32768.0, 0.0, 's', false, ProfileType::UINT16)]
#[Field('MesgId', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('MesgData', 2, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('ChannelNumber', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('Data', 4, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
final class AntRxMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('AntRx', MessageNumber::AntRx);
    }

    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getFractionalTimestamp(): ?int
    {
        return $this->getValue(0);
    }

    public function getMesgId(): ?int
    {
        return $this->getValue(1);
    }

    public function getMesgData(): ?int
    {
        return $this->getValue(2);
    }

    public function getChannelNumber(): ?int
    {
        return $this->getValue(3);
    }

    public function getData(): ?int
    {
        return $this->getValue(4);
    }
}
