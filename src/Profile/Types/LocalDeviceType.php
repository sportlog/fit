<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.115Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile\Types;

class LocalDeviceType
{
    /**
     * Onboard gps receiver
     */
    public const Gps = 0;

    /**
     * Onboard glonass receiver
     */
    public const Glonass = 1;

    /**
     * Onboard gps glonass receiver
     */
    public const GpsGlonass = 2;

    /**
     * Onboard sensor
     */
    public const Accelerometer = 3;

    /**
     * Onboard sensor
     */
    public const Barometer = 4;

    /**
     * Onboard sensor
     */
    public const Temperature = 5;

    /**
     * Onboard wrist HR sensor
     */
    public const Whr = 10;

    /**
     * Onboard software package
     */
    public const SensorHub = 12;
}
