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

class ConnectivityCapabilities
{
    public const Bluetooth = 1;
    public const BluetoothLe = 2;
    public const Ant = 4;
    public const ActivityUpload = 8;
    public const CourseDownload = 16;
    public const WorkoutDownload = 32;
    public const LiveTrack = 64;
    public const WeatherConditions = 128;
    public const WeatherAlerts = 256;
    public const GpsEphemerisDownload = 512;
    public const ExplicitArchive = 1024;
    public const SetupIncomplete = 2048;
    public const ContinueSyncAfterSoftwareUpdate = 4096;
    public const ConnectIqAppDownload = 8192;
    public const GolfCourseDownload = 16384;

    /**
     * Indicates device is in control of initiating all syncs
     */
    public const DeviceInitiatesSync = 32768;
    public const ConnectIqWatchAppDownload = 65536;
    public const ConnectIqWidgetDownload = 131072;
    public const ConnectIqWatchFaceDownload = 262144;
    public const ConnectIqDataFieldDownload = 524288;

    /**
     * Device supports delete and reorder of apps via GCM
     */
    public const ConnectIqAppManagment = 1048576;
    public const SwingSensor = 2097152;
    public const SwingSensorRemote = 4194304;

    /**
     * Device supports incident detection
     */
    public const IncidentDetection = 8388608;
    public const AudioPrompts = 16777216;

    /**
     * Device supports reporting wifi verification via GCM
     */
    public const WifiVerification = 33554432;

    /**
     * Device supports True Up
     */
    public const TrueUp = 67108864;

    /**
     * Device supports Find My Watch
     */
    public const FindMyWatch = 134217728;
    public const RemoteManualSync = 268435456;

    /**
     * Device supports LiveTrack auto start
     */
    public const LiveTrackAutoStart = 536870912;

    /**
     * Device supports LiveTrack Messaging
     */
    public const LiveTrackMessaging = 1073741824;

    /**
     * Device supports instant input feature
     */
    public const InstantInput = 2147483648;
}
