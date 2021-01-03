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
 * FileIdMessage message
 */
final class FileIdMessage extends Message
{
    #[Field('Type', 0, FitBaseType::ENUM, 1.0, 0.0, '', false, ProfileType::FILE)]
    public ?int $type;

    #[Field('Manufacturer', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER)]
    public ?int $manufacturer;

    #[Field('Product', 2, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $product;

    #[Field('SerialNumber', 3, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::UINT32Z)]
    public ?int $serialNumber;

    #[Field('TimeCreated', 4, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $timeCreated;

    #[Field('Number', 5, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $number;

    #[Field('ProductName', 8, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)]
    public ?string $productName;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("FileId", MessageNumber::FileId);
    }
}
