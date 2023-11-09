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

class MesgNum
{
    public const FileId = 0;
    public const Capabilities = 1;
    public const DeviceSettings = 2;
    public const UserProfile = 3;
    public const HrmProfile = 4;
    public const SdmProfile = 5;
    public const BikeProfile = 6;
    public const ZonesTarget = 7;
    public const HrZone = 8;
    public const PowerZone = 9;
    public const MetZone = 10;
    public const Sport = 12;
    public const Goal = 15;
    public const Session = 18;
    public const Lap = 19;
    public const Record = 20;
    public const Event = 21;
    public const DeviceInfo = 23;
    public const Workout = 26;
    public const WorkoutStep = 27;
    public const Schedule = 28;
    public const WeightScale = 30;
    public const Course = 31;
    public const CoursePoint = 32;
    public const Totals = 33;
    public const Activity = 34;
    public const Software = 35;
    public const FileCapabilities = 37;
    public const MesgCapabilities = 38;
    public const FieldCapabilities = 39;
    public const FileCreator = 49;
    public const BloodPressure = 51;
    public const SpeedZone = 53;
    public const Monitoring = 55;
    public const TrainingFile = 72;
    public const Hrv = 78;
    public const AntRx = 80;
    public const AntTx = 81;
    public const AntChannelId = 82;
    public const Length = 101;
    public const MonitoringInfo = 103;
    public const Pad = 105;
    public const SlaveDevice = 106;
    public const Connectivity = 127;
    public const WeatherConditions = 128;
    public const WeatherAlert = 129;
    public const CadenceZone = 131;
    public const Hr = 132;
    public const SegmentLap = 142;
    public const MemoGlob = 145;
    public const SegmentId = 148;
    public const SegmentLeaderboardEntry = 149;
    public const SegmentPoint = 150;
    public const SegmentFile = 151;
    public const WorkoutSession = 158;
    public const WatchfaceSettings = 159;
    public const GpsMetadata = 160;
    public const CameraEvent = 161;
    public const TimestampCorrelation = 162;
    public const GyroscopeData = 164;
    public const AccelerometerData = 165;
    public const ThreeDSensorCalibration = 167;
    public const VideoFrame = 169;
    public const ObdiiData = 174;
    public const NmeaSentence = 177;
    public const AviationAttitude = 178;
    public const Video = 184;
    public const VideoTitle = 185;
    public const VideoDescription = 186;
    public const VideoClip = 187;
    public const OhrSettings = 188;
    public const ExdScreenConfiguration = 200;
    public const ExdDataFieldConfiguration = 201;
    public const ExdDataConceptConfiguration = 202;
    public const FieldDescription = 206;
    public const DeveloperDataId = 207;
    public const MagnetometerData = 208;
    public const BarometerData = 209;
    public const OneDSensorCalibration = 210;
    public const MonitoringHrData = 211;
    public const TimeInZone = 216;
    public const Set = 225;
    public const StressLevel = 227;
    public const MaxMetData = 229;
    public const DiveSettings = 258;
    public const DiveGas = 259;
    public const DiveAlarm = 262;
    public const ExerciseTitle = 264;
    public const DiveSummary = 268;
    public const Spo2Data = 269;
    public const SleepLevel = 275;
    public const Jump = 285;
    public const BeatIntervals = 290;
    public const RespirationRate = 297;
    public const Split = 312;
    public const ClimbPro = 317;
    public const TankUpdate = 319;
    public const TankSummary = 323;
    public const SleepAssessment = 346;
    public const HrvStatusSummary = 370;
    public const HrvValue = 371;
    public const DeviceAuxBatteryInfo = 375;
    public const DiveApneaAlarm = 393;

    /**
     * 0xFF00 - 0xFFFE reserved for manufacturer specific messages
     */
    public const MfgRangeMin = 65280;

    /**
     * 0xFF00 - 0xFFFE reserved for manufacturer specific messages
     */
    public const MfgRangeMax = 65534;
}
