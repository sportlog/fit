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
 * HrmProfileMessage message
 */
#[Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX)]
#[Field('Enabled', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('HrmAntId', 1, FitBaseType::UINT16Z, 1.0, 0.0, '', false, ProfileType::UINT16Z)]
#[Field('LogHrv', 2, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::BOOL)]
#[Field('HrmAntIdTransType', 3, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
final class HrmProfileMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('HrmProfile', MesgNum::HRM_PROFILE);
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
