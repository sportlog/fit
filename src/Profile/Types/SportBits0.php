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

class SportBits0
{
    public const Generic = 1;
    public const Running = 2;
    public const Cycling = 4;

    /**
     * Mulitsport transition
     */
    public const Transition = 8;
    public const FitnessEquipment = 16;
    public const Swimming = 32;
    public const Basketball = 64;
    public const Soccer = 128;
}
