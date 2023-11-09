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

class Checksum
{
    /**
     * Allows clear of checksum for flash memory where can only write 1 to 0 without erasing sector.
     */
    public const Clear = 0;

    /**
     * Set to mark checksum as valid if computes to invalid values 0 or 0xFF. Checksum can also be set to ok to save encoding computation time.
     */
    public const Ok = 1;
}
