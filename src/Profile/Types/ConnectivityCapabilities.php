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

enum ConnectivityCapabilities: int
{
    case Bluetooth = 1;
    case BluetoothLe = 2;
    case Ant = 4;
    case ActivityUpload = 8;
    case CourseDownload = 16;
    case WorkoutDownload = 32;
    case LiveTrack = 64;
    case WeatherConditions = 128;
    case WeatherAlerts = 256;
    case GpsEphemerisDownload = 512;
    case ExplicitArchive = 1024;
    case SetupIncomplete = 2048;
    case ContinueSyncAfterSoftwareUpdate = 4096;
    case ConnectIqAppDownload = 8192;
    case GolfCourseDownload = 16384;
    case DeviceInitiatesSync = 32768;
    case ConnectIqWatchAppDownload = 65536;
    case ConnectIqWidgetDownload = 131072;
    case ConnectIqWatchFaceDownload = 262144;
    case ConnectIqDataFieldDownload = 524288;
    case ConnectIqAppManagment = 1048576;
    case SwingSensor = 2097152;
    case SwingSensorRemote = 4194304;
    case IncidentDetection = 8388608;
    case AudioPrompts = 16777216;
    case WifiVerification = 33554432;
    case TrueUp = 67108864;
    case FindMyWatch = 134217728;
    case RemoteManualSync = 268435456;
    case LiveTrackAutoStart = 536870912;
    case LiveTrackMessaging = 1073741824;
    case InstantInput = 2147483648;
}
