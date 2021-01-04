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
 * WorkoutSessionMessage message
 */
final class WorkoutSessionMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getSport(): ?int
    {
        return $this->getValue(0);
    }

    public function getSubSport(): ?int
    {
        return $this->getValue(1);
    }

    public function getNumValidSteps(): ?int
    {
        return $this->getValue(2);
    }

    public function getFirstStepIndex(): ?int
    {
        return $this->getValue(3);
    }

    public function getPoolLength(): ?int
    {
        return $this->getValue(4);
    }

    public function getPoolLengthUnit(): ?int
    {
        return $this->getValue(5);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("WorkoutSession", MessageNumber::WorkoutSession, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('Sport', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SPORT),
            new Field('SubSport', 1, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::SUBSPORT),
            new Field('NumValidSteps', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('FirstStepIndex', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('PoolLength', 4, FitBaseType::UINT16, 100.0, 0.0, 'm', false, ProfileType::UINT16),
            new Field('PoolLengthUnit', 5, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::DISPLAYMEASURE)
        ]);
    }
}
