<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.171 SDK
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
 * FileCreatorMessage message
 */
#[Field('SoftwareVersion', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('HardwareVersion', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
final class FileCreatorMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('FileCreator', MesgNum::FILE_CREATOR);
    }

    /**
     * Gets the software version
     */
    public function getSoftwareVersion(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the hardware version
     */
    public function getHardwareVersion(): int|array|null
    {
        return $this->getFieldValue(1);
    }
}
