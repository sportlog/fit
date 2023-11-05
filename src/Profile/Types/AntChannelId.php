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

enum AntChannelId: int
{
    case AntExtendedDeviceNumberUpperNibble = 4026531840;
    case AntTransmissionTypeLowerNibble = 251658240;
    case AntDeviceType = 16711680;
    case AntDeviceNumber = 65535;
}
