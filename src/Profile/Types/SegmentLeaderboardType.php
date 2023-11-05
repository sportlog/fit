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

enum SegmentLeaderboardType: int
{
    case Overall = 0;
    case PersonalBest = 1;
    case Connections = 2;
    case Group = 3;
    case Challenger = 4;
    case Kom = 5;
    case Qom = 6;
    case Pr = 7;
    case Goal = 8;
    case Rival = 9;
    case ClubLeader = 10;
}
