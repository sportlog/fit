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
 * DeveloperDataIdMessage message
 */
final class DeveloperDataIdMessage extends Message
{
    #[Field('DeveloperId', 0, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $developerId;

    #[Field('ApplicationId', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
    public ?int $applicationId;

    #[Field('ManufacturerId', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER)]
    public ?int $manufacturerId;

    #[Field('DeveloperDataIndex', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
    public ?int $developerDataIndex;

    #[Field('ApplicationVersion', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
    public ?int $applicationVersion;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("DeveloperDataId", MessageNumber::DeveloperDataId);
    }
}
