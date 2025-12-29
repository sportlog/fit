<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.188 SDK
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
 * TrainingSettingsMessage message
 */
#[Field('TargetDistance', 31, FitBaseType::UINT32, 100.0, 0.0, 'm', false, ProfileType::UINT32)]
#[Field('TargetSpeed', 32, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16)]
#[Field('TargetTime', 33, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::UINT32)]
#[Field('PreciseTargetSpeed', 153, FitBaseType::UINT32, 1000000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
final class TrainingSettingsMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('TrainingSettings', MesgNum::TRAINING_SETTINGS);
    }

    /**
     * Gets the target distance
     */
    public function getTargetDistance(): float|array|null
    {
        return $this->getFieldValue(31);
    }

    /**
     * Gets the target speed
     */
    public function getTargetSpeed(): float|array|null
    {
        return $this->getFieldValue(32);
    }

    /**
     * Gets the target time
     */
    public function getTargetTime(): int|array|null
    {
        return $this->getFieldValue(33);
    }

    /**
     * Gets the precise target speed
     */
    public function getPreciseTargetSpeed(): float|array|null
    {
        return $this->getFieldValue(153);
    }
}
