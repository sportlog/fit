<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Message;

use FIT\FitBaseType;

class FileIdMessage extends Message
{
    #[Field("Type", 0, FitBaseType::ENUM, ProfileType::FILE)]
    public string $type;
    #[Field("Manufacturer", 1, FitBaseType::UINT16, ProfileType::MANUFACTURER)]
    public int $manufacturer;
    #[Field("Product", 2, FitBaseType::UINT16, ProfileType::UINT16)]
    public int $product;
    #[Field("SerialNumber", 3, FitBaseType::UINT32Z, ProfileType::UINT32Z)]
    public float $serialNumber;
    #[Field("TimeCreated", 4, FitBaseType::UINT32, ProfileType::DATETIME)]
    public float $created;
    #[Field("Number", 5, FitBaseType::UINT16, ProfileType::UINT16)]
    public int $number;
    #[Field("ProductName", 8, FitBaseType::STRING, ProfileType::STRING)]
    public string $productName;

    public function __construct()
    {
        parent::__construct("FileId", MessageNumber::FileId);
    }
}
