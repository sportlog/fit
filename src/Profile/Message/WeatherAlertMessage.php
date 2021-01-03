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
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

    #[Field('ReportId', 0, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $reportId;

    #[Field('IssueTime', 1, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $issueTime;

    #[Field('ExpireTime', 2, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $expireTime;

    #[Field('Severity', 3, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WEATHERSEVERITY)]
    public ?int $severity;

    #[Field('Type', 4, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::WEATHERSEVERETYPE)]
    public ?int $type;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("WeatherAlert", MessageNumber::WeatherAlert);
    }
}
