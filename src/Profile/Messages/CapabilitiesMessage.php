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
 * CapabilitiesMessage message
 */
#[Field('Languages', 0, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::UINT8Z)]
#[Field('Sports', 1, FitBaseType::UINT8Z, 1.0, 0.0, '', false, ProfileType::SPORTBITS0)]
#[Field('WorkoutsSupported', 21, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::WORKOUTCAPABILITIES)]
#[Field('ConnectivitySupported', 23, FitBaseType::UINT32Z, 1.0, 0.0, '', false, ProfileType::CONNECTIVITYCAPABILITIES)]
final class CapabilitiesMessage extends Message
{
    /**
     * Creates a new message instance
     */
    public function __construct()
    {
        parent::__construct('Capabilities', MesgNum::CAPABILITIES);
    }

    /**
     * Gets the languages
     */
    public function getLanguages(): int|array|null
    {
        return $this->getFieldValue(0);
    }

    /**
     * Gets the sports
     */
    public function getSports(): int|array|null
    {
        return $this->getFieldValue(1);
    }

    /**
     * Gets the workouts supported
     */
    public function getWorkoutsSupported(): int|array|null
    {
        return $this->getFieldValue(21);
    }

    /**
     * Gets the connectivity supported
     */
    public function getConnectivitySupported(): int|array|null
    {
        return $this->getFieldValue(23);
    }
}
