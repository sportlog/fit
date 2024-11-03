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
 * FileIdMessage message
 */
#[Field('Type', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::FILE)]
#[Field('Manufacturer', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER)]
#[Field('Product', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('SerialNumber', 3, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::UINT32Z)]
#[Field('TimeCreated', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
#[Field('Number', 5, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
#[Field('ProductName', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
final class FileIdMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('FileId', MesgNum::FileId->value);
    }

    /**
     * Gets the type
     */
    public function getType(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the manufacturer
     */
    public function getManufacturer(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the product
     */
    public function getProduct(): int|array|null
    {
        return $this->getFieldValue(2);
    }

    /**
     * Gets the serial number
     */
    public function getSerialNumber(): int|array|null
    {
        return $this->getFieldValue(3);
    }

    /**
     * Gets the time created
     */
    public function getTimeCreated(): DateTime|null
    {
        return $this->getFieldValue(4);
    }

    /**
     * Gets the number
     */
    public function getNumber(): int|array|null
    {
        return $this->getFieldValue(5);
    }

    /**
     * Gets the product name
     */
    public function getProductName(): string|null
    {
        return $this->getFieldValue(8);
    }
}
