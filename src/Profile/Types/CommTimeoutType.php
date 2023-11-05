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

enum CommTimeoutType: int
{
    case WildcardPairingTimeout = 0;
    case PairingTimeout = 1;
    case ConnectionLost = 2;
    case ConnectionTimeout = 3;
}
