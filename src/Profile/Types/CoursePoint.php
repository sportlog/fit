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

enum CoursePoint: int
{
    case Generic = 0;
    case Summit = 1;
    case Valley = 2;
    case Water = 3;
    case Food = 4;
    case Danger = 5;
    case Left = 6;
    case Right = 7;
    case Straight = 8;
    case FirstAid = 9;
    case FourthCategory = 10;
    case ThirdCategory = 11;
    case SecondCategory = 12;
    case FirstCategory = 13;
    case HorsCategory = 14;
    case Sprint = 15;
    case LeftFork = 16;
    case RightFork = 17;
    case MiddleFork = 18;
    case SlightLeft = 19;
    case SharpLeft = 20;
    case SlightRight = 21;
    case SharpRight = 22;
    case UTurn = 23;
    case SegmentStart = 24;
    case SegmentEnd = 25;
    case Campsite = 27;
    case AidStation = 28;
    case RestArea = 29;
    case GeneralDistance = 30;
    case Service = 31;
    case EnergyGel = 32;
    case SportsDrink = 33;
    case MileMarker = 34;
    case Checkpoint = 35;
    case Shelter = 36;
    case MeetingSpot = 37;
    case Overlook = 38;
    case Toilet = 39;
    case Shower = 40;
    case Gear = 41;
    case SharpCurve = 42;
    case SteepIncline = 43;
    case Tunnel = 44;
    case Bridge = 45;
    case Obstacle = 46;
    case Crossing = 47;
    case Store = 48;
    case Transition = 49;
    case Navaid = 50;
    case Transport = 51;
    case Alert = 52;
    case Info = 53;
}
