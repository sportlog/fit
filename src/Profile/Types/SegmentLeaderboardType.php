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
    case Carrot = 9;
    case ClubLeader = 10;
    case Rival = 11;
    case Last = 12;
    case RecentBest = 13;
    case CourseRecord = 14;
}
