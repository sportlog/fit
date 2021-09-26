<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.60Release
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
 * DeveloperDataIdMessage message
 */
#[Field('DeveloperId', 0, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('ApplicationId', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE)]
#[Field('ManufacturerId', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER)]
#[Field('DeveloperDataIndex', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8)]
#[Field('ApplicationVersion', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)]
final class DeveloperDataIdMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('DeveloperDataId', MesgNum::DEVELOPER_DATA_ID);
    }

    /**
     * Gets the developer id
     */
    public function getDeveloperId(): mixed
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the application id
     */
    public function getApplicationId(): mixed
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the manufacturer id
     */
    public function getManufacturerId(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the developer data index
     */
    public function getDeveloperDataIndex(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the application version
     */
    public function getApplicationVersion(): int|array|null
    {
        return $this->getFieldValue(4);
    }
}
