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
    public function getManufacturer(): ?int
    {
        return $this->getValue(0);
    }

    public function getProduct(): ?int
    {
        return $this->getValue(1);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SlaveDevice", MessageNumber::SlaveDevice, [
        new Field('Manufacturer', 0, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MANUFACTURER),
            new Field('Product', 1, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::UINT16)
        ]);
    }
}
