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
