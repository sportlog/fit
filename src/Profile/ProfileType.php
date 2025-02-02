<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * FIT 21.158 SDK
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile;

class ProfileType
{
    public const ENUM = 'Enum';
    public const SINT8 = 'Sint8';
    public const UINT8 = 'Uint8';
    public const SINT16 = 'Sint16';
    public const UINT16 = 'Uint16';
    public const SINT32 = 'Sint32';
    public const UINT32 = 'Uint32';
    public const STRING = 'String';
    public const FLOAT32 = 'Float32';
    public const FLOAT64 = 'Float64';
    public const UINT8Z = 'Uint8z';
    public const UINT16Z = 'Uint16z';
    public const UINT32Z = 'Uint32z';
    public const BYTE = 'Byte';
    public const SINT64 = 'Sint64';
    public const UINT64 = 'Uint64';
    public const UINT64Z = 'Uint64z';
    public const BOOL = 'Bool';
    public const FILE = 'File';
    public const MESGNUM = 'MesgNum';
    public const CHECKSUM = 'Checksum';
    public const FILEFLAGS = 'FileFlags';
    public const MESGCOUNT = 'MesgCount';
    public const DATETIME = 'DateTime';
    public const LOCALDATETIME = 'LocalDateTime';
    public const MESSAGEINDEX = 'MessageIndex';
    public const DEVICEINDEX = 'DeviceIndex';
    public const GENDER = 'Gender';
    public const LANGUAGE = 'Language';
    public const LANGUAGEBITS0 = 'LanguageBits0';
    public const LANGUAGEBITS1 = 'LanguageBits1';
    public const LANGUAGEBITS2 = 'LanguageBits2';
    public const LANGUAGEBITS3 = 'LanguageBits3';
    public const LANGUAGEBITS4 = 'LanguageBits4';
    public const TIMEZONE = 'TimeZone';
    public const DISPLAYMEASURE = 'DisplayMeasure';
    public const DISPLAYHEART = 'DisplayHeart';
    public const DISPLAYPOWER = 'DisplayPower';
    public const DISPLAYPOSITION = 'DisplayPosition';
    public const SWITCH = 'Switch';
    public const SPORT = 'Sport';
    public const SPORTBITS0 = 'SportBits0';
    public const SPORTBITS1 = 'SportBits1';
    public const SPORTBITS2 = 'SportBits2';
    public const SPORTBITS3 = 'SportBits3';
    public const SPORTBITS4 = 'SportBits4';
    public const SPORTBITS5 = 'SportBits5';
    public const SPORTBITS6 = 'SportBits6';
    public const SUBSPORT = 'SubSport';
    public const SPORTEVENT = 'SportEvent';
    public const ACTIVITY = 'Activity';
    public const INTENSITY = 'Intensity';
    public const SESSIONTRIGGER = 'SessionTrigger';
    public const AUTOLAPTRIGGER = 'AutolapTrigger';
    public const LAPTRIGGER = 'LapTrigger';
    public const TIMEMODE = 'TimeMode';
    public const BACKLIGHTMODE = 'BacklightMode';
    public const DATEMODE = 'DateMode';
    public const BACKLIGHTTIMEOUT = 'BacklightTimeout';
    public const EVENT = 'Event';
    public const EVENTTYPE = 'EventType';
    public const TIMERTRIGGER = 'TimerTrigger';
    public const FITNESSEQUIPMENTSTATE = 'FitnessEquipmentState';
    public const TONE = 'Tone';
    public const AUTOSCROLL = 'Autoscroll';
    public const ACTIVITYCLASS = 'ActivityClass';
    public const HRZONECALC = 'HrZoneCalc';
    public const PWRZONECALC = 'PwrZoneCalc';
    public const WKTSTEPDURATION = 'WktStepDuration';
    public const WKTSTEPTARGET = 'WktStepTarget';
    public const GOAL = 'Goal';
    public const GOALRECURRENCE = 'GoalRecurrence';
    public const GOALSOURCE = 'GoalSource';
    public const SCHEDULE = 'Schedule';
    public const COURSEPOINT = 'CoursePoint';
    public const MANUFACTURER = 'Manufacturer';
    public const GARMINPRODUCT = 'GarminProduct';
    public const ANTPLUSDEVICETYPE = 'AntplusDeviceType';
    public const ANTNETWORK = 'AntNetwork';
    public const WORKOUTCAPABILITIES = 'WorkoutCapabilities';
    public const BATTERYSTATUS = 'BatteryStatus';
    public const HRTYPE = 'HrType';
    public const COURSECAPABILITIES = 'CourseCapabilities';
    public const WEIGHT = 'Weight';
    public const WORKOUTHR = 'WorkoutHr';
    public const WORKOUTPOWER = 'WorkoutPower';
    public const BPSTATUS = 'BpStatus';
    public const USERLOCALID = 'UserLocalId';
    public const SWIMSTROKE = 'SwimStroke';
    public const ACTIVITYTYPE = 'ActivityType';
    public const ACTIVITYSUBTYPE = 'ActivitySubtype';
    public const ACTIVITYLEVEL = 'ActivityLevel';
    public const SIDE = 'Side';
    public const LEFTRIGHTBALANCE = 'LeftRightBalance';
    public const LEFTRIGHTBALANCE100 = 'LeftRightBalance100';
    public const LENGTHTYPE = 'LengthType';
    public const DAYOFWEEK = 'DayOfWeek';
    public const CONNECTIVITYCAPABILITIES = 'ConnectivityCapabilities';
    public const WEATHERREPORT = 'WeatherReport';
    public const WEATHERSTATUS = 'WeatherStatus';
    public const WEATHERSEVERITY = 'WeatherSeverity';
    public const WEATHERSEVERETYPE = 'WeatherSevereType';
    public const TIMEINTODAY = 'TimeIntoDay';
    public const LOCALTIMEINTODAY = 'LocaltimeIntoDay';
    public const STROKETYPE = 'StrokeType';
    public const BODYLOCATION = 'BodyLocation';
    public const SEGMENTLAPSTATUS = 'SegmentLapStatus';
    public const SEGMENTLEADERBOARDTYPE = 'SegmentLeaderboardType';
    public const SEGMENTDELETESTATUS = 'SegmentDeleteStatus';
    public const SEGMENTSELECTIONTYPE = 'SegmentSelectionType';
    public const SOURCETYPE = 'SourceType';
    public const LOCALDEVICETYPE = 'LocalDeviceType';
    public const BLEDEVICETYPE = 'BleDeviceType';
    public const ANTCHANNELID = 'AntChannelId';
    public const DISPLAYORIENTATION = 'DisplayOrientation';
    public const WORKOUTEQUIPMENT = 'WorkoutEquipment';
    public const WATCHFACEMODE = 'WatchfaceMode';
    public const DIGITALWATCHFACELAYOUT = 'DigitalWatchfaceLayout';
    public const ANALOGWATCHFACELAYOUT = 'AnalogWatchfaceLayout';
    public const RIDERPOSITIONTYPE = 'RiderPositionType';
    public const POWERPHASETYPE = 'PowerPhaseType';
    public const CAMERAEVENTTYPE = 'CameraEventType';
    public const SENSORTYPE = 'SensorType';
    public const BIKELIGHTNETWORKCONFIGTYPE = 'BikeLightNetworkConfigType';
    public const COMMTIMEOUTTYPE = 'CommTimeoutType';
    public const CAMERAORIENTATIONTYPE = 'CameraOrientationType';
    public const ATTITUDESTAGE = 'AttitudeStage';
    public const ATTITUDEVALIDITY = 'AttitudeValidity';
    public const AUTOSYNCFREQUENCY = 'AutoSyncFrequency';
    public const EXDLAYOUT = 'ExdLayout';
    public const EXDDISPLAYTYPE = 'ExdDisplayType';
    public const EXDDATAUNITS = 'ExdDataUnits';
    public const EXDQUALIFIERS = 'ExdQualifiers';
    public const EXDDESCRIPTORS = 'ExdDescriptors';
    public const AUTOACTIVITYDETECT = 'AutoActivityDetect';
    public const SUPPORTEDEXDSCREENLAYOUTS = 'SupportedExdScreenLayouts';
    public const FITBASETYPE = 'FitBaseType';
    public const TURNTYPE = 'TurnType';
    public const BIKELIGHTBEAMANGLEMODE = 'BikeLightBeamAngleMode';
    public const FITBASEUNIT = 'FitBaseUnit';
    public const SETTYPE = 'SetType';
    public const MAXMETCATEGORY = 'MaxMetCategory';
    public const EXERCISECATEGORY = 'ExerciseCategory';
    public const BENCHPRESSEXERCISENAME = 'BenchPressExerciseName';
    public const CALFRAISEEXERCISENAME = 'CalfRaiseExerciseName';
    public const CARDIOEXERCISENAME = 'CardioExerciseName';
    public const CARRYEXERCISENAME = 'CarryExerciseName';
    public const CHOPEXERCISENAME = 'ChopExerciseName';
    public const COREEXERCISENAME = 'CoreExerciseName';
    public const CRUNCHEXERCISENAME = 'CrunchExerciseName';
    public const CURLEXERCISENAME = 'CurlExerciseName';
    public const DEADLIFTEXERCISENAME = 'DeadliftExerciseName';
    public const FLYEEXERCISENAME = 'FlyeExerciseName';
    public const HIPRAISEEXERCISENAME = 'HipRaiseExerciseName';
    public const HIPSTABILITYEXERCISENAME = 'HipStabilityExerciseName';
    public const HIPSWINGEXERCISENAME = 'HipSwingExerciseName';
    public const HYPEREXTENSIONEXERCISENAME = 'HyperextensionExerciseName';
    public const LATERALRAISEEXERCISENAME = 'LateralRaiseExerciseName';
    public const LEGCURLEXERCISENAME = 'LegCurlExerciseName';
    public const LEGRAISEEXERCISENAME = 'LegRaiseExerciseName';
    public const LUNGEEXERCISENAME = 'LungeExerciseName';
    public const OLYMPICLIFTEXERCISENAME = 'OlympicLiftExerciseName';
    public const PLANKEXERCISENAME = 'PlankExerciseName';
    public const PLYOEXERCISENAME = 'PlyoExerciseName';
    public const PULLUPEXERCISENAME = 'PullUpExerciseName';
    public const PUSHUPEXERCISENAME = 'PushUpExerciseName';
    public const ROWEXERCISENAME = 'RowExerciseName';
    public const SHOULDERPRESSEXERCISENAME = 'ShoulderPressExerciseName';
    public const SHOULDERSTABILITYEXERCISENAME = 'ShoulderStabilityExerciseName';
    public const SHRUGEXERCISENAME = 'ShrugExerciseName';
    public const SITUPEXERCISENAME = 'SitUpExerciseName';
    public const SQUATEXERCISENAME = 'SquatExerciseName';
    public const TOTALBODYEXERCISENAME = 'TotalBodyExerciseName';
    public const TRICEPSEXTENSIONEXERCISENAME = 'TricepsExtensionExerciseName';
    public const WARMUPEXERCISENAME = 'WarmUpExerciseName';
    public const RUNEXERCISENAME = 'RunExerciseName';
    public const WATERTYPE = 'WaterType';
    public const TISSUEMODELTYPE = 'TissueModelType';
    public const DIVEGASSTATUS = 'DiveGasStatus';
    public const DIVEALERT = 'DiveAlert';
    public const DIVEALARMTYPE = 'DiveAlarmType';
    public const DIVEBACKLIGHTMODE = 'DiveBacklightMode';
    public const SLEEPLEVEL = 'SleepLevel';
    public const SPO2MEASUREMENTTYPE = 'Spo2MeasurementType';
    public const CCRSETPOINTSWITCHMODE = 'CcrSetpointSwitchMode';
    public const DIVEGASMODE = 'DiveGasMode';
    public const PROJECTILETYPE = 'ProjectileType';
    public const FAVEROPRODUCT = 'FaveroProduct';
    public const SPLITTYPE = 'SplitType';
    public const CLIMBPROEVENT = 'ClimbProEvent';
    public const GASCONSUMPTIONRATETYPE = 'GasConsumptionRateType';
    public const TAPSENSITIVITY = 'TapSensitivity';
    public const RADARTHREATLEVELTYPE = 'RadarThreatLevelType';
    public const MAXMETSPEEDSOURCE = 'MaxMetSpeedSource';
    public const MAXMETHEARTRATESOURCE = 'MaxMetHeartRateSource';
    public const HRVSTATUS = 'HrvStatus';
    public const NOFLYTIMEMODE = 'NoFlyTimeMode';
    public const NUMTYPES = 'NumTypes';
}
