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
final class AviationAttitudeMessage extends Message
{
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, 's', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('TimestampMs', 0, FitBaseType::UINT16, 1.0, 0.0, 'ms', false, ProfileType::UINT16)]
    public ?int $timestampMs;

    #[Field('SystemTime', 1, FitBaseType::UINT32, 1.0, 0.0, 'ms', false, ProfileType::UINT32)]
    public ?int $systemTime;

    #[Field('Pitch', 2, FitBaseType::SINT16, 1043038.0, 0.0, 'radians', false, ProfileType::SINT16)]
    public ?int $pitch;

    #[Field('Roll', 3, FitBaseType::SINT16, 1043038.0, 0.0, 'radians', false, ProfileType::SINT16)]
    public ?int $roll;

    #[Field('AccelLateral', 4, FitBaseType::SINT16, 100.0, 0.0, 'm/s^2', false, ProfileType::SINT16)]
    public ?int $accelLateral;

    #[Field('AccelNormal', 5, FitBaseType::SINT16, 100.0, 0.0, 'm/s^2', false, ProfileType::SINT16)]
    public ?int $accelNormal;

    #[Field('TurnRate', 6, FitBaseType::SINT16, 1024.0, 0.0, 'radians/second', false, ProfileType::SINT16)]
    public ?int $turnRate;

    #[Field('Stage', 7, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::ATTITUDESTAGE)]
    public ?int $stage;

    #[Field('AttitudeStageComplete', 8, FitBaseType::UINT8, 1.0, 0.0, '%', false, ProfileType::UINT8)]
    public ?int $attitudeStageComplete;

    #[Field('Track', 9, FitBaseType::UINT16, 1043038.0, 0.0, 'radians', false, ProfileType::UINT16)]
    public ?int $track;

    #[Field('Validity', 10, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::ATTITUDEVALIDITY)]
    public ?int $validity;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("AviationAttitude", MessageNumber::AviationAttitude);
    }
}
