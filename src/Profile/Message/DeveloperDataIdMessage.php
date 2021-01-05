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
        parent::__construct('DeveloperDataId', MessageNumber::DeveloperDataId);
    }

    /**
     * Gets the DeveloperId
     */
    public function getDeveloperId(): ?int
    {
        return $this->getValue(0);
    }

    /**
     * Gets the ApplicationId
     */
    public function getApplicationId(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Gets the ManufacturerId
     */
    public function getManufacturerId(): ?int
    {
        return $this->getValue(2);
    }

    /**
     * Gets the DeveloperDataIndex
     */
    public function getDeveloperDataIndex(): ?int
    {
        return $this->getValue(3);
    }

    /**
     * Gets the ApplicationVersion
     */
    public function getApplicationVersion(): ?int
    {
        return $this->getValue(4);
    }
}
