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

enum CommTimeoutType: int
{
    case WildcardPairingTimeout = 0;
    case PairingTimeout = 1;
    case ConnectionLost = 2;
    case ConnectionTimeout = 3;
}
