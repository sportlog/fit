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
 * SlaveDeviceMessage message
 */
final class SlaveDeviceMessage extends Message
{
    #[Field('Manufacturer', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER)]
    public ?int $manufacturer;

    #[Field('Product', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)]
    public ?int $product;

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SlaveDevice", MessageNumber::SlaveDevice);
    }
}
