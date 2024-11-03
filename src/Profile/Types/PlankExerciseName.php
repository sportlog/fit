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

enum PlankExerciseName: int
{
    case _45DegreePlank = 0;
    case Weighted45DegreePlank = 1;
    case _90DegreeStaticHold = 2;
    case Weighted90DegreeStaticHold = 3;
    case BearCrawl = 4;
    case WeightedBearCrawl = 5;
    case CrossBodyMountainClimber = 6;
    case WeightedCrossBodyMountainClimber = 7;
    case ElbowPlankPikeJacks = 8;
    case WeightedElbowPlankPikeJacks = 9;
    case ElevatedFeetPlank = 10;
    case WeightedElevatedFeetPlank = 11;
    case ElevatorAbs = 12;
    case WeightedElevatorAbs = 13;
    case ExtendedPlank = 14;
    case WeightedExtendedPlank = 15;
    case FullPlankPasseTwist = 16;
    case WeightedFullPlankPasseTwist = 17;
    case InchingElbowPlank = 18;
    case WeightedInchingElbowPlank = 19;
    case InchwormToSidePlank = 20;
    case WeightedInchwormToSidePlank = 21;
    case KneelingPlank = 22;
    case WeightedKneelingPlank = 23;
    case KneelingSidePlankWithLegLift = 24;
    case WeightedKneelingSidePlankWithLegLift = 25;
    case LateralRoll = 26;
    case WeightedLateralRoll = 27;
    case LyingReversePlank = 28;
    case WeightedLyingReversePlank = 29;
    case MedicineBallMountainClimber = 30;
    case WeightedMedicineBallMountainClimber = 31;
    case ModifiedMountainClimberAndExtension = 32;
    case WeightedModifiedMountainClimberAndExtension = 33;
    case MountainClimber = 34;
    case WeightedMountainClimber = 35;
    case MountainClimberOnSlidingDiscs = 36;
    case WeightedMountainClimberOnSlidingDiscs = 37;
    case MountainClimberWithFeetOnBosuBall = 38;
    case WeightedMountainClimberWithFeetOnBosuBall = 39;
    case MountainClimberWithHandsOnBench = 40;
    case MountainClimberWithHandsOnSwissBall = 41;
    case WeightedMountainClimberWithHandsOnSwissBall = 42;
    case Plank = 43;
    case PlankJacksWithFeetOnSlidingDiscs = 44;
    case WeightedPlankJacksWithFeetOnSlidingDiscs = 45;
    case PlankKneeTwist = 46;
    case WeightedPlankKneeTwist = 47;
    case PlankPikeJumps = 48;
    case WeightedPlankPikeJumps = 49;
    case PlankPikes = 50;
    case WeightedPlankPikes = 51;
    case PlankToStandUp = 52;
    case WeightedPlankToStandUp = 53;
    case PlankWithArmRaise = 54;
    case WeightedPlankWithArmRaise = 55;
    case PlankWithKneeToElbow = 56;
    case WeightedPlankWithKneeToElbow = 57;
    case PlankWithObliqueCrunch = 58;
    case WeightedPlankWithObliqueCrunch = 59;
    case PlyometricSidePlank = 60;
    case WeightedPlyometricSidePlank = 61;
    case RollingSidePlank = 62;
    case WeightedRollingSidePlank = 63;
    case SideKickPlank = 64;
    case WeightedSideKickPlank = 65;
    case SidePlank = 66;
    case WeightedSidePlank = 67;
    case SidePlankAndRow = 68;
    case WeightedSidePlankAndRow = 69;
    case SidePlankLift = 70;
    case WeightedSidePlankLift = 71;
    case SidePlankWithElbowOnBosuBall = 72;
    case WeightedSidePlankWithElbowOnBosuBall = 73;
    case SidePlankWithFeetOnBench = 74;
    case WeightedSidePlankWithFeetOnBench = 75;
    case SidePlankWithKneeCircle = 76;
    case WeightedSidePlankWithKneeCircle = 77;
    case SidePlankWithKneeTuck = 78;
    case WeightedSidePlankWithKneeTuck = 79;
    case SidePlankWithLegLift = 80;
    case WeightedSidePlankWithLegLift = 81;
    case SidePlankWithReachUnder = 82;
    case WeightedSidePlankWithReachUnder = 83;
    case SingleLegElevatedFeetPlank = 84;
    case WeightedSingleLegElevatedFeetPlank = 85;
    case SingleLegFlexAndExtend = 86;
    case WeightedSingleLegFlexAndExtend = 87;
    case SingleLegSidePlank = 88;
    case WeightedSingleLegSidePlank = 89;
    case SpidermanPlank = 90;
    case WeightedSpidermanPlank = 91;
    case StraightArmPlank = 92;
    case WeightedStraightArmPlank = 93;
    case StraightArmPlankWithShoulderTouch = 94;
    case WeightedStraightArmPlankWithShoulderTouch = 95;
    case SwissBallPlank = 96;
    case WeightedSwissBallPlank = 97;
    case SwissBallPlankLegLift = 98;
    case WeightedSwissBallPlankLegLift = 99;
    case SwissBallPlankLegLiftAndHold = 100;
    case SwissBallPlankWithFeetOnBench = 101;
    case WeightedSwissBallPlankWithFeetOnBench = 102;
    case SwissBallProneJackknife = 103;
    case WeightedSwissBallProneJackknife = 104;
    case SwissBallSidePlank = 105;
    case WeightedSwissBallSidePlank = 106;
    case ThreeWayPlank = 107;
    case WeightedThreeWayPlank = 108;
    case TowelPlankAndKneeIn = 109;
    case WeightedTowelPlankAndKneeIn = 110;
    case TStabilization = 111;
    case WeightedTStabilization = 112;
    case TurkishGetUpToSidePlank = 113;
    case WeightedTurkishGetUpToSidePlank = 114;
    case TwoPointPlank = 115;
    case WeightedTwoPointPlank = 116;
    case WeightedPlank = 117;
    case WideStancePlankWithDiagonalArmLift = 118;
    case WeightedWideStancePlankWithDiagonalArmLift = 119;
    case WideStancePlankWithDiagonalLegLift = 120;
    case WeightedWideStancePlankWithDiagonalLegLift = 121;
    case WideStancePlankWithLegLift = 122;
    case WeightedWideStancePlankWithLegLift = 123;
    case WideStancePlankWithOppositeArmAndLegLift = 124;
    case WeightedMountainClimberWithHandsOnBench = 125;
    case WeightedSwissBallPlankLegLiftAndHold = 126;
    case WeightedWideStancePlankWithOppositeArmAndLegLift = 127;
    case PlankWithFeetOnSwissBall = 128;
    case SidePlankToPlankWithReachUnder = 129;
    case BridgeWithGluteLowerLift = 130;
    case BridgeOneLegBridge = 131;
    case PlankWithArmVariations = 132;
    case PlankWithLegLift = 133;
    case ReversePlankWithLegPull = 134;
}
