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
 * SleepAssessmentMessage message
 */
#[Field('CombinedAwakeScore', 0, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('AwakeTimeScore', 1, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('AwakeningsCountScore', 2, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('DeepSleepScore', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('SleepDurationScore', 4, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('LightSleepScore', 5, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('OverallSleepScore', 6, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('SleepQualityScore', 7, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('SleepRecoveryScore', 8, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('RemSleepScore', 9, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('SleepRestlessnessScore', 10, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('AwakeningsCount', 11, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('InterruptionsScore', 14, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::Uint8)]
#[Field('AverageStressDuringSleep', 15, FitBaseType::UINT16, 100.0, 0.0, '', false, ProfileType::Uint16)]
final class SleepAssessmentMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('SleepAssessment', MesgNum::SleepAssessment);
    }

    /**
     * Gets the combined awake score
     */
    public function getCombinedAwakeScore(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the awake time score
     */
    public function getAwakeTimeScore(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the awakenings count score
     */
    public function getAwakeningsCountScore(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the deep sleep score
     */
    public function getDeepSleepScore(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the sleep duration score
     */
    public function getSleepDurationScore(): int|array|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the light sleep score
     */
    public function getLightSleepScore(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the overall sleep score
     */
    public function getOverallSleepScore(): int|array|null
    {
        return $this->getFieldValue(6);
    }

    /**
     * Gets the sleep quality score
     */
    public function getSleepQualityScore(): int|array|null
    {
        return $this->getFieldValue(7);
    }

    /**
     * Gets the sleep recovery score
     */
    public function getSleepRecoveryScore(): int|array|null
    {
        return $this->getFieldValue(8);
    }

    /**
     * Gets the rem sleep score
     */
    public function getRemSleepScore(): int|array|null
    {
        return $this->getFieldValue(9);
    }

    /**
     * Gets the sleep restlessness score
     */
    public function getSleepRestlessnessScore(): int|array|null
    {
        return $this->getFieldValue(10);
    }

    /**
     * Gets the awakenings count
     */
    public function getAwakeningsCount(): int|array|null
    {
        return $this->getFieldValue(11);
    }

    /**
     * Gets the interruptions score
     */
    public function getInterruptionsScore(): int|array|null
    {
        return $this->getFieldValue(14);
    }

    /**
     * Gets the average stress during sleep
     */
    public function getAverageStressDuringSleep(): float|array|null
    {
        return $this->getFieldValue(15);
    }
}
