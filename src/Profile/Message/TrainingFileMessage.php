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
 * TrainingFileMessage message
 */
final class TrainingFileMessage extends Message
{
    public function getTimestamp(): ?DateTime
    {
        return $this->getValue(253);
    }

    public function getType(): ?int
    {
        return $this->getValue(0);
    }

    public function getManufacturer(): ?int
    {
        return $this->getValue(1);
    }

    public function getProduct(): ?int
    {
        return $this->getValue(2);
    }

    public function getSerialNumber(): ?int
    {
        return $this->getValue(3);
    }

    public function getTimeCreated(): ?DateTime
    {
        return $this->getValue(4);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("TrainingFile", MessageNumber::TrainingFile, [
        new Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME),
            new Field('Type', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::FILE),
            new Field('Manufacturer', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER),
            new Field('Product', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16),
            new Field('SerialNumber', 3, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::UINT32Z),
            new Field('TimeCreated', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)
        ]);
    }
}
