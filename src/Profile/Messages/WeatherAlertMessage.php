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
        parent::__construct('WeatherAlert', MesgNum::WeatherAlert->value);
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
    public function getSeverity(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the type
     */
    public function getType(): int|array|null
    {
        return $this->getFieldValue(4);
    }
}
