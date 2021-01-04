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
 * SpeedZoneMessage message
 */
final class SpeedZoneMessage extends Message
{
    public function getMessageIndex(): ?int
    {
        return $this->getValue(254);
    }

    public function getHighValue(): ?int
    {
        return $this->getValue(0);
    }

    public function getName(): ?string
    {
        return $this->getValue(1);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("SpeedZone", MessageNumber::SpeedZone, [
        new Field('MessageIndex', 254, FitBaseType::UINT16, 1.0, 0.0, '', false, ProfileType::MESSAGEINDEX),
            new Field('HighValue', 0, FitBaseType::UINT16, 1000.0, 0.0, 'm/s', false, ProfileType::UINT16),
            new Field('Name', 1, FitBaseType::STRING, 1.0, 0.0, '', false, ProfileType::STRING)
        ]);
    }
}
