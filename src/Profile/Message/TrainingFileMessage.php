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
    #[Field('Timestamp', 253, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::DATETIME)]
    public ?DateTime $timestamp;

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

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("TrainingFile", MessageNumber::TrainingFile);
    }
}
