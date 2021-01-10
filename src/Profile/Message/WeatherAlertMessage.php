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
 * WeatherAlertMessage message
 */
#[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('ReportId', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
#[Field('IssueTime', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('ExpireTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('Severity', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WEATHERSEVERITY)]
#[Field('Type', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WEATHERSEVERETYPE)]
final class WeatherAlertMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('WeatherAlert', MessageNumber::WeatherAlert);
    }

    /**
     * Gets the timestamp
     */
    public function getTimestamp(): DateTime|null
    {
        return $this->getFieldValue(253);
    }

    /**
     * Gets the report id
     */
    public function getReportId(): string|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the issue time
     */
    public function getIssueTime(): DateTime|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the expire time
     */
    public function getExpireTime(): DateTime|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the severity
     */
    public function getSeverity(): int|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the type
     */
    public function getType(): int|null
    {
        return $this->getFieldValue(4);
    }
}
