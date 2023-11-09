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

class ActivityType
{
    public const Generic = 0;
    public const Running = 1;
    public const Cycling = 2;

    /**
     * Mulitsport transition
     */
    public const Transition = 3;
    public const FitnessEquipment = 4;
    public const Swimming = 5;
    public const Walking = 6;
    public const Sedentary = 8;

    /**
     * All is for goals only to include all sports.
     */
    public const All = 254;
}
