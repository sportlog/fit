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

class SessionTrigger
{
    public const ActivityEnd = 0;

    /**
     * User changed sport.
     */
    public const Manual = 1;

    /**
     * Auto multi-sport feature is enabled and user pressed lap button to advance session.
     */
    public const AutoMultiSport = 2;

    /**
     * Auto sport change caused by user linking to fitness equipment.
     */
    public const FitnessEquipment = 3;
}
