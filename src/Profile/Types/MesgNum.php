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

enum MesgNum: int
{
    case FileId = 0;
    case Capabilities = 1;
    case DeviceSettings = 2;
    case UserProfile = 3;
    case HrmProfile = 4;
    case SdmProfile = 5;
    case BikeProfile = 6;
    case ZonesTarget = 7;
    case HrZone = 8;
    case PowerZone = 9;
    case MetZone = 10;
    case Sport = 12;
    case Goal = 15;
    case Session = 18;
    case Lap = 19;
    case Record = 20;
    case Event = 21;
    case DeviceInfo = 23;
    case Workout = 26;
    case WorkoutStep = 27;
    case Schedule = 28;
    case WeightScale = 30;
    case Course = 31;
    case CoursePoint = 32;
    case Totals = 33;
    case Activity = 34;
    case Software = 35;
    case FileCapabilities = 37;
    case MesgCapabilities = 38;
    case FieldCapabilities = 39;
    case FileCreator = 49;
    case BloodPressure = 51;
    case SpeedZone = 53;
    case Monitoring = 55;
    case TrainingFile = 72;
    case Hrv = 78;
    case AntRx = 80;
    case AntTx = 81;
    case AntChannelId = 82;
    case Length = 101;
    case MonitoringInfo = 103;
    case Pad = 105;
    case SlaveDevice = 106;
    case Connectivity = 127;
    case WeatherConditions = 128;
    case WeatherAlert = 129;
    case CadenceZone = 131;
    case Hr = 132;
    case SegmentLap = 142;
    case MemoGlob = 145;
    case SegmentId = 148;
    case SegmentLeaderboardEntry = 149;
    case SegmentPoint = 150;
    case SegmentFile = 151;
    case WorkoutSession = 158;
    case WatchfaceSettings = 159;
    case GpsMetadata = 160;
    case CameraEvent = 161;
    case TimestampCorrelation = 162;
    case GyroscopeData = 164;
    case AccelerometerData = 165;
    case ThreeDSensorCalibration = 167;
    case VideoFrame = 169;
    case ObdiiData = 174;
    case NmeaSentence = 177;
    case AviationAttitude = 178;
    case Video = 184;
    case VideoTitle = 185;
    case VideoDescription = 186;
    case VideoClip = 187;
    case OhrSettings = 188;
    case ExdScreenConfiguration = 200;
    case ExdDataFieldConfiguration = 201;
    case ExdDataConceptConfiguration = 202;
    case FieldDescription = 206;
    case DeveloperDataId = 207;
    case MagnetometerData = 208;
    case BarometerData = 209;
    case OneDSensorCalibration = 210;
    case MonitoringHrData = 211;
    case TimeInZone = 216;
    case Set = 225;
    case StressLevel = 227;
    case MaxMetData = 229;
    case DiveSettings = 258;
    case DiveGas = 259;
    case DiveAlarm = 262;
    case ExerciseTitle = 264;
    case DiveSummary = 268;
    case Spo2Data = 269;
    case SleepLevel = 275;
    case Jump = 285;
    case AadAccelFeatures = 289;
    case BeatIntervals = 290;
    case RespirationRate = 297;
    case HsaAccelerometerData = 302;
    case HsaStepData = 304;
    case HsaSpo2Data = 305;
    case HsaStressData = 306;
    case HsaRespirationData = 307;
    case HsaHeartRateData = 308;
    case Split = 312;
    case SplitSummary = 313;
    case HsaBodyBatteryData = 314;
    case HsaEvent = 315;
    case ClimbPro = 317;
    case TankUpdate = 319;
    case TankSummary = 323;
    case SleepAssessment = 346;
    case HrvStatusSummary = 370;
    case HrvValue = 371;
    case RawBbi = 372;
    case DeviceAuxBatteryInfo = 375;
    case HsaGyroscopeData = 376;
    case ChronoShotSession = 387;
    case ChronoShotData = 388;
    case HsaConfigurationData = 389;
    case DiveApneaAlarm = 393;
    case SkinTempOvernight = 398;
    case HsaWristTemperatureData = 409;
    case MfgRangeMin = 65280;
    case MfgRangeMax = 65534;
}
