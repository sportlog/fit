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

enum TurnType: int
{
    case ArrivingIdx = 0;
    case ArrivingLeftIdx = 1;
    case ArrivingRightIdx = 2;
    case ArrivingViaIdx = 3;
    case ArrivingViaLeftIdx = 4;
    case ArrivingViaRightIdx = 5;
    case BearKeepLeftIdx = 6;
    case BearKeepRightIdx = 7;
    case ContinueIdx = 8;
    case ExitLeftIdx = 9;
    case ExitRightIdx = 10;
    case FerryIdx = 11;
    case Roundabout45Idx = 12;
    case Roundabout90Idx = 13;
    case Roundabout135Idx = 14;
    case Roundabout180Idx = 15;
    case Roundabout225Idx = 16;
    case Roundabout270Idx = 17;
    case Roundabout315Idx = 18;
    case Roundabout360Idx = 19;
    case RoundaboutNeg45Idx = 20;
    case RoundaboutNeg90Idx = 21;
    case RoundaboutNeg135Idx = 22;
    case RoundaboutNeg180Idx = 23;
    case RoundaboutNeg225Idx = 24;
    case RoundaboutNeg270Idx = 25;
    case RoundaboutNeg315Idx = 26;
    case RoundaboutNeg360Idx = 27;
    case RoundaboutGenericIdx = 28;
    case RoundaboutNegGenericIdx = 29;
    case SharpTurnLeftIdx = 30;
    case SharpTurnRightIdx = 31;
    case TurnLeftIdx = 32;
    case TurnRightIdx = 33;
    case UturnLeftIdx = 34;
    case UturnRightIdx = 35;
    case IconInvIdx = 36;
    case IconIdxCnt = 37;
}
