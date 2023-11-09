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

class BleDeviceType
{
    /**
     * GPS that is provided over a proprietary bluetooth service
     */
    public const ConnectedGps = 0;
    public const HeartRate = 1;
    public const BikePower = 2;
    public const BikeSpeedCadence = 3;
    public const BikeSpeed = 4;
    public const BikeCadence = 5;
    public const Footpod = 6;

    /**
     * Indoor-Bike FTMS protocol
     */
    public const BikeTrainer = 7;
}
