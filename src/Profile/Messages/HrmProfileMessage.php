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
 * HrmProfileMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MessageIndex)]
#[Field('Enabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Bool)]
#[Field('HrmAntId', 1, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::Uint16z)]
#[Field('LogHrv', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::Bool)]
#[Field('HrmAntIdTransType', 3, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::Uint8z)]
final class HrmProfileMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('HrmProfile', MesgNum::HrmProfile);
    }

    /**
     * Gets the message index
     */
    public function getMessageIndex(): int|array|null
    {
        return $this->getFieldValue(254);
    }

    /**
     * Gets the enabled
     */
    public function getEnabled(): bool|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the hrm ant id
     */
    public function getHrmAntId(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the log hrv
     */
    public function getLogHrv(): bool|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the hrm ant id trans type
     */
    public function getHrmAntIdTransType(): int|array|null
    {
        return $this->getFieldValue(3);
    }
}
