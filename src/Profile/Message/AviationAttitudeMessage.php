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
 * AviationAttitudeMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
#[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
#[Field('SystemTime', 1, FitBaseType::UINT32, 1.0, 0.0, 'ms', false, ProfileType::UINT32)]
#[Field('Pitch', 2, FitBaseType::SINT16, 1043038.0, 0.0, 'radians', false, ProfileType::SINT16)]
#[Field('Roll', 3, FitBaseType::SINT16, 1043038.0, 0.0, 'radians', false, ProfileType::SINT16)]
#[Field('AccelLateral', 4, FitBaseType::SINT16, 100.0, 0.0, 'm/s^2', false, ProfileType::SINT16)]
#[Field('AccelNormal', 5, FitBaseType::SINT16, 100.0, 0.0, 'm/s^2', false, ProfileType::SINT16)]
#[Field('TurnRate', 6, FitBaseType::SINT16, 1024.0, 0.0, 'radians/second', false, ProfileType::SINT16)]
#[Field('Stage', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ATTITUDESTAGE)]
#[Field('AttitudeStageComplete', 8, FitBaseType::UINT8, 1.0, 0.0, '%', false, ProfileType::UINT8)]
#[Field('Track', 9, FitBaseType::UINT16, 1043038.0, 0.0, 'radians', false, ProfileType::UINT16)]
#[Field('Validity', 10, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::ATTITUDEVALIDITY)]
final class AviationAttitudeMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('AviationAttitude', MessageNumber::AviationAttitude);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    /**
     * Gets the timestamp ms
     */
    public function getTimestampMs(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the system time
     */
    public function getSystemTime(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the pitch
     */
    public function getPitch(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the roll
     */
    public function getRoll(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the accel lateral
     */
    public function getAccelLateral(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Gets the accel normal
     */
    public function getAccelNormal(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Gets the turn rate
     */
    public function getTurnRate(): ?int
    {
        return $this->getValue(6);
    }

    /**
     * Gets the stage
     */
    public function getStage(): ?int
    {
        return $this->getValue(7);
    }

    /**
     * Gets the attitude stage complete
     */
    public function getAttitudeStageComplete(): ?int
    {
        return $this->getValue(8);
    }

    /**
     * Gets the track
     */
    public function getTrack(): ?int
    {
        return $this->getValue(9);
    }

    /**
     * Gets the validity
     */
    public function getValidity(): ?int
    {
        return $this->getValue(10);
    }
}
