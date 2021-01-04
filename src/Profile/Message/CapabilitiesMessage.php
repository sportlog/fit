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
 * CapabilitiesMessage message
 */
final class CapabilitiesMessage extends Message
{
    public function getLanguages(): ?int
    {
        return $this->getValue(0);
    }

    public function getSports(): ?int
    {
        return $this->getValue(1);
    }

    public function getWorkoutsSupported(): ?int
    {
        return $this->getValue(21);
    }

    public function getConnectivitySupported(): ?int
    {
        return $this->getValue(23);
    }

    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct("Capabilities", MessageNumber::Capabilities, [
        new Field('Languages', 0, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z),
            new Field('Sports', 1, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::SPORTBITS0),
            new Field('WorkoutsSupported', 21, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::WORKOUTCAPABILITIES),
            new Field('ConnectivitySupported', 23, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::CONNECTIVITYCAPABILITIES)
        ]);
    }
}
