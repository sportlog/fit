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

namespace Sportlog\FIT\Profile\Types;

enum BleDeviceType: int
{
    case ConnectedGps = 0;
    case HeartRate = 1;
    case BikePower = 2;
    case BikeSpeedCadence = 3;
    case BikeSpeed = 4;
    case BikeCadence = 5;
    case Footpod = 6;
    case BikeTrainer = 7;
}
