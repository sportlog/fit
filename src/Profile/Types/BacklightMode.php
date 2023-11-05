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

enum BacklightMode: int
{
    case Off = 0;
    case Manual = 1;
    case KeyAndMessages = 2;
    case AutoBrightness = 3;
    case SmartNotifications = 4;
    case KeyAndMessagesNight = 5;
    case KeyAndMessagesAndSmartNotifications = 6;
}
