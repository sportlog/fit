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

class CommTimeoutType
{
    /**
     * Timeout pairing to any device
     */
    public const WildcardPairingTimeout = 0;

    /**
     * Timeout pairing to previously paired device
     */
    public const PairingTimeout = 1;

    /**
     * Temporary loss of communications
     */
    public const ConnectionLost = 2;

    /**
     * Connection closed due to extended bad communications
     */
    public const ConnectionTimeout = 3;
}
