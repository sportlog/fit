<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.158 SDK
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
 * ChronoShotSessionMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('MinSpeed', 0, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('MaxSpeed', 1, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('AvgSpeed', 2, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
#[Field('ShotCount', 3, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('ProjectileType', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::PROJECTILETYPE)]
#[Field('GrainWeight', 5, FitBaseType::UINT32, 10.0, 0.0, 'gr', false, ProfileType::UINT32)]
#[Field('StandardDeviation', 6, FitBaseType::UINT32, 1000.0, 0.0, 'm/s', false, ProfileType::UINT32)]
final class ChronoShotSessionMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('ChronoShotSession', MesgNum::CHRONO_SHOT_SESSION);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the min speed
     */
    public function getMinSpeed(): float|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the max speed
     */
    public function getMaxSpeed(): float|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the avg speed
     */
    public function getAvgSpeed(): float|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the shot count
     */
    public function getShotCount(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the projectile type
     */
    public function getProjectileType(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the grain weight
     */
    public function getGrainWeight(): float|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the standard deviation
     */
    public function getStandardDeviation(): float|array|null
    {
        return $this->getFieldValue(6);
    }
}
