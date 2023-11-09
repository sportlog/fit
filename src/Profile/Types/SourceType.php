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

class SourceType
{
    /**
     * External device connected with ANT
     */
    public const Ant = 0;

    /**
     * External device connected with ANT+
     */
    public const Antplus = 1;

    /**
     * External device connected with BT
     */
    public const Bluetooth = 2;

    /**
     * External device connected with BLE
     */
    public const BluetoothLowEnergy = 3;

    /**
     * External device connected with Wifi
     */
    public const Wifi = 4;

    /**
     * Onboard device
     */
    public const Local = 5;
}
