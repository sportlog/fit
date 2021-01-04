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
    public function getDeveloperId(): ?int
    {
        return $this->getValue(0);
    }

    public function getApplicationId(): ?int
    {
        return $this->getValue(1);
    }

    public function getManufacturerId(): ?int
    {
        return $this->getValue(2);
    }

    public function getDeveloperDataIndex(): ?int
    {
        return $this->getValue(3);
    }

    public function getApplicationVersion(): ?int
    {
        return $this->getValue(4);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("DeveloperDataId", MessageNumber::DeveloperDataId, [
        new Field('DeveloperId', 0, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE),
            new Field('ApplicationId', 1, FitBaseType::BYTE, 1.0, 0.0, '', false, ProfileType::BYTE),
            new Field('ManufacturerId', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER),
            new Field('DeveloperDataIndex', 3, FitBaseType::UINT8, 1.0, 0.0, '', false, ProfileType::UINT8),
            new Field('ApplicationVersion', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::UINT32)
        ]);
    }
}
