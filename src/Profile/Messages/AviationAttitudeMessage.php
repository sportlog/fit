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
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\ProfileType;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * AviationAttitudeMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('SystemTime', 1, FitBaseType::UINT32, 1.0, 0.0, 'ms', false, ProfileType::UINT32)]
#[Field('Pitch', 2, FitBaseType::SINT16, 10430.38, 0.0, 'radians', false, ProfileType::SINT16)]
#[Field('Roll', 3, FitBaseType::SINT16, 10430.38, 0.0, 'radians', false, ProfileType::SINT16)]
#[Field('AccelLateral', 4, FitBaseType::SINT16, 100.0, 0.0, 'm/s^2', false, ProfileType::SINT16)]
#[Field('AccelNormal', 5, FitBaseType::SINT16, 100.0, 0.0, 'm/s^2', false, ProfileType::SINT16)]
#[Field('TurnRate', 6, FitBaseType::SINT16, 1024.0, 0.0, 'radians/second', false, ProfileType::SINT16)]
#[Field('Stage', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ATTITUDESTAGE)]
#[Field('AttitudeStageComplete', 8, FitBaseType::UINT8, 1.0, 0.0, '%', false, ProfileType::UINT8)]
#[Field('Track', 9, FitBaseType::UINT16, 10430.38, 0.0, 'radians', false, ProfileType::UINT16)]
#[Field('Validity', 10, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::ATTITUDEVALIDITY)]
final class AviationAttitudeMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('AviationAttitude', MesgNum::AviationAttitude->value);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the timestamp ms
     */
    public function getTimestampMs(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the system time
     */
    public function getSystemTime(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the pitch
     */
    public function getPitch(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the roll
     */
    public function getRoll(): float|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the accel lateral
     */
    public function getAccelLateral(): float|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the accel normal
     */
    public function getAccelNormal(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the turn rate
     */
    public function getTurnRate(): float|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the stage
     */
    public function getStage(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the attitude stage complete
     */
    public function getAttitudeStageComplete(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the track
     */
    public function getTrack(): float|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the validity
     */
    public function getValidity(): int|array|null
    {
        return $this->getFieldValue(10);
    }
}
