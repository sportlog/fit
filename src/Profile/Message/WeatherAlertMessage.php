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
final class WeatherAlertMessage extends Message
{
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getReportId(): ?string
    {
        return $this->getValue(0);
    }

    public function getIssueTime(): ?DateTime
    {
        return $this->getValue(1);
    }

    public function getExpireTime(): ?DateTime
    {
        return $this->getValue(2);
    }

    public function getSeverity(): ?int
    {
        return $this->getValue(3);
    }

    public function getType(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("WeatherAlert", MessageNumber::WeatherAlert, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('ReportId', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING),
            new Field('IssueTime', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('ExpireTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('Severity', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WEATHERSEVERITY),
            new Field('Type', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WEATHERSEVERETYPE)
        ]);
    }
}
