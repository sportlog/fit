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
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('FractionalTimestamp', 0, FitBaseType::UINT16, 32768.0, 0.0, 's', false, ProfileType::UINT16)]
    public ?int $fractionalTimestamp;

    #[Field('MesgId', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $mesgId;

    #[Field('MesgData', 2, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $mesgData;

    #[Field('ChannelNumber', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $channelNumber;

    #[Field('Data', 4, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $data;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("AntRx", MessageNumber::AntRx);
    }
}
