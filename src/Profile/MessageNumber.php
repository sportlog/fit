<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Profile;

class MessageNumber {
    const FileId = 0;
    const Capabilities = 1;
    const DeviceSettings = 2;
    const UserProfile = 3;
    const HrmProfile = 4;
    const SdmProfile = 5;
    const BikeProfile = 6;
    const ZonesTarget = 7;
    const HrZone = 8;
    const PowerZone = 9;
    const MetZone = 10;
    const Sport = 12;
    const Goal = 15;
    const Session = 18;
    const Lap = 19;
    const Record = 20;
    const Event = 21;
    const DeviceInfo = 23;
    const Workout = 26;
    const WorkoutStep = 27;
    const Schedule = 28;
    const WeightScale = 30;
    const Course = 31;
    const CoursePo= 32;
    const Totals = 33;
    const Activity = 34;
    const Software = 35;
    const FileCapabilities = 37;
    const MesgCapabilities = 38;
    const FieldCapabilities = 39;
    const FileCreator = 49;
    const BloodPressure = 51;
    const SpeedZone = 53;
    const Monitoring = 55;
    const TrainingFile = 72;
    const Hrv = 78;
    const AntRx = 80;
    const AntTx = 81;
    const AntChannelId = 82;
    const Length = 101;
    const MonitoringInfo = 103;
    const Pad = 105;
    const SlaveDevice = 106;
    const Connectivity = 127;
    const WeatherConditions = 128;
    const WeatherAlert = 129;
    const CadenceZone = 131;
    const Hr = 132;
    const SegmentLap = 142;
    const MemoGlob = 145;
    const SegmentId = 148;
    const SegmentLeaderboardEntry = 149;
    const SegmentPo= 150;
    const SegmentFile = 151;
    const WorkoutSession = 158;
    const WatchfaceSettings = 159;
    const GpsMetadata = 160;
    const CameraEvent = 161;
    const TimestampCorrelation = 162;
    const GyroscopeData = 164;
    const AccelerometerData = 165;
    const ThreeDSensorCalibration = 167;
    const VideoFrame = 169;
    const ObdiiData = 174;
    const NmeaSentence = 177;
    const AviationAttitude = 178;
    const Video = 184;
    const VideoTitle = 185;
    const VideoDescription = 186;
    const VideoClip = 187;
    const OhrSettings = 188;
    const ExdScreenConfiguration = 200;
    const ExdDataFieldConfiguration = 201;
    const ExdDataConceptConfiguration = 202;
    const FieldDescription = 206;
    const DeveloperDataId = 207;
    const MagnetometerData = 208;
    const BarometerData = 209;
    const OneDSensorCalibration = 210;
    const Set = 225;
    const StressLevel = 227;
    const DiveSettings = 258;
    const DiveGas = 259;
    const DiveAlarm = 262;
    const ExerciseTitle = 264;
    const DiveSummary = 268;
    const Jump = 285;
    const ClimbPro = 317;
    const MfgRangeMin = 65280;
    const MfgRangeMax = 65534;
    const Invalid = 65535;
}