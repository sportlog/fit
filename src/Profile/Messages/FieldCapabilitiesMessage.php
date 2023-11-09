<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
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
 * FieldCapabilitiesMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MessageIndex)]
#[Field('File', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::File)]
#[Field('MesgNum', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MesgNum)]
#[Field('FieldNum', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('Count', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::Uint16)]
final class FieldCapabilitiesMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('FieldCapabilities', MesgNum::FieldCapabilities);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the file
     */
    public function getFile(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the mesg num
     */
    public function getMesgNum(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the field num
     */
    public function getFieldNum(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the count
     */
    public function getCount(): int|array|null
    {
        return $this->getFieldValue(3);
    }
}
