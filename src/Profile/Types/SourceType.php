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

enum SourceType: int
{
    case Ant = 0;
    case Antplus = 1;
    case Bluetooth = 2;
    case BluetoothLowEnergy = 3;
    case Wifi = 4;
    case Local = 5;
}
