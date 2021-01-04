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
final class AntRxMessage extends Message
{
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

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("AntRx", MessageNumber::AntRx, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME),
            new Field('FractionalTimestamp', 0, FitBaseType::UINT16, 32768.0, 0.0, 's', false, ProfileType::UINT16),
            new Field('MesgId', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE),
            new Field('MesgData', 2, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE),
            new Field('ChannelNumber', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('Data', 4, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)
        ]);
    }
}
