<?php

/**
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace FIT\Profile;

use FIT\Profile\Message\AccelerometerDataMessage;
use FIT\Profile\Message\ActivityMessage;
use FIT\Profile\Message\AntChannelIdMessage;
use FIT\Profile\Message\AntRxMessage;
use FIT\Profile\Message\AntTxMessage;
use FIT\Profile\Message\AviationAttitudeMessage;
use FIT\Profile\Message\BarometerDataMessage;
use FIT\Profile\Message\BikeProfileMessage;
use FIT\Profile\Message\BloodPressureMessage;
use FIT\Profile\Message\CadenceZoneMessage;
use FIT\Profile\Message\CameraEventMessage;
use FIT\Profile\Message\CapabilitiesMessage;
use FIT\Profile\Message\ClimbProMessage;
use FIT\Profile\Message\ConnectivityMessage;
use FIT\Profile\Message\CourseMessage;
use FIT\Profile\Message\CoursePointMessage;
use FIT\Profile\Message\DeveloperDataIdMessage;
use FIT\Profile\Message\DeviceInfoMessage;
use FIT\Profile\Message\DeviceSettingsMessage;
use FIT\Profile\Message\DiveAlarmMessage;
use FIT\Profile\Message\DiveGasMessage;
use FIT\Profile\Message\DiveSettingsMessage;
use FIT\Profile\Message\DiveSummaryMessage;
use FIT\Profile\Message\EventMessage;
use FIT\Profile\Message\ExdDataConceptConfigurationMessage;
use FIT\Profile\Message\ExdDataFieldConfigurationMessage;
use FIT\Profile\Message\ExdScreenConfigurationMessage;
use FIT\Profile\Message\ExerciseTitleMessage;
use FIT\Profile\Message\FieldCapabilitiesMessage;
use FIT\Profile\Message\FieldDescriptionMessage;
use FIT\Profile\Message\FileCapabilitiesMessage;
use FIT\Profile\Message\FileCreatorMessage;
use FIT\Profile\Message\FileIdMessage;
use FIT\Profile\Message\GoalMessage;
use FIT\Profile\Message\GpsMetadataMessage;
use FIT\Profile\Message\GyroscopeDataMessage;
use FIT\Profile\Message\HrMessage;
use FIT\Profile\Message\HrZoneMessage;
use FIT\Profile\Message\HrmProfileMessage;
use FIT\Profile\Message\HrvMessage;
use FIT\Profile\Message\InvalidMessage;
use FIT\Profile\Message\JumpMessage;
use FIT\Profile\Message\LapMessage;
use FIT\Profile\Message\LengthMessage;
use FIT\Profile\Message\MagnetometerDataMessage;
use FIT\Profile\Message\MemoGlobMessage;
use FIT\Profile\Message\MesgCapabilitiesMessage;
use FIT\Profile\Message\MetZoneMessage;
use FIT\Profile\Message\MonitoringInfoMessage;
use FIT\Profile\Message\MonitoringMessage;
use FIT\Profile\Message\NmeaSentenceMessage;
use FIT\Profile\Message\ObdiiDataMessage;
use FIT\Profile\Message\OhrSettingsMessage;
use FIT\Profile\Message\OneDSensorCalibrationMessage;
use FIT\Profile\Message\PadMessage;
use FIT\Profile\Message\PowerZoneMessage;
use FIT\Profile\Message\RecordMessage;
use FIT\Profile\Message\ScheduleMessage;
use FIT\Profile\Message\SdmProfileMessage;
use FIT\Profile\Message\SegmentFileMessage;
use FIT\Profile\Message\SegmentIdMessage;
use FIT\Profile\Message\SegmentLapMessage;
use FIT\Profile\Message\SegmentLeaderboardEntryMessage;
use FIT\Profile\Message\SegmentPointMessage;
use FIT\Profile\Message\SessionMessage;
use FIT\Profile\Message\SetMessage;
use FIT\Profile\Message\SlaveDeviceMessage;
use FIT\Profile\Message\SoftwareMessage;
use FIT\Profile\Message\SpeedZoneMessage;
use FIT\Profile\Message\SportMessage;
use FIT\Profile\Message\StressLevelMessage;
use FIT\Profile\Message\ThreeDSensorCalibrationMessage;
use FIT\Profile\Message\TimestampCorrelationMessage;
use FIT\Profile\Message\TotalsMessage;
use FIT\Profile\Message\TrainingFileMessage;
use FIT\Profile\Message\UserProfileMessage;
use FIT\Profile\Message\VideoClipMessage;
use FIT\Profile\Message\VideoDescriptionMessage;
use FIT\Profile\Message\VideoFrameMessage;
use FIT\Profile\Message\VideoMessage;
use FIT\Profile\Message\VideoTitleMessage;
use FIT\Profile\Message\WatchfaceSettingsMessage;
use FIT\Profile\Message\WeatherAlertMessage;
use FIT\Profile\Message\WeatherConditionsMessage;
use FIT\Profile\Message\WeightScaleMessage;
use FIT\Profile\Message\WorkoutMessage;
use FIT\Profile\Message\WorkoutSessionMessage;
use FIT\Profile\Message\WorkoutStepMessage;
use FIT\Profile\Message\ZonesTargetMessage;

/**
 * Factory for creating a new message instance
 */
class Profile
{
    /**
     * Creates the message instance for the global message number
     */
    public static function createMessage(int $globalMessageNumber): Message
    {
        switch ($globalMessageNumber) {
            case MessageNumber::FileId:
                return new FileIdMessage();
            case MessageNumber::FileCreator:
                return new FileCreatorMessage();
            case MessageNumber::TimestampCorrelation:
                return new TimestampCorrelationMessage();
            case MessageNumber::Software:
                return new SoftwareMessage();
            case MessageNumber::SlaveDevice:
                return new SlaveDeviceMessage();
            case MessageNumber::Capabilities:
                return new CapabilitiesMessage();
            case MessageNumber::FileCapabilities:
                return new FileCapabilitiesMessage();
            case MessageNumber::MesgCapabilities:
                return new MesgCapabilitiesMessage();
            case MessageNumber::FieldCapabilities:
                return new FieldCapabilitiesMessage();
            case MessageNumber::DeviceSettings:
                return new DeviceSettingsMessage();
            case MessageNumber::UserProfile:
                return new UserProfileMessage();
            case MessageNumber::HrmProfile:
                return new HrmProfileMessage();
            case MessageNumber::SdmProfile:
                return new SdmProfileMessage();
            case MessageNumber::BikeProfile:
                return new BikeProfileMessage();
            case MessageNumber::Connectivity:
                return new ConnectivityMessage();
            case MessageNumber::WatchfaceSettings:
                return new WatchfaceSettingsMessage();
            case MessageNumber::OhrSettings:
                return new OhrSettingsMessage();
            case MessageNumber::ZonesTarget:
                return new ZonesTargetMessage();
            case MessageNumber::Sport:
                return new SportMessage();
            case MessageNumber::HrZone:
                return new HrZoneMessage();
            case MessageNumber::SpeedZone:
                return new SpeedZoneMessage();
            case MessageNumber::CadenceZone:
                return new CadenceZoneMessage();
            case MessageNumber::PowerZone:
                return new PowerZoneMessage();
            case MessageNumber::MetZone:
                return new MetZoneMessage();
            case MessageNumber::DiveSettings:
                return new DiveSettingsMessage();
            case MessageNumber::DiveAlarm:
                return new DiveAlarmMessage();
            case MessageNumber::DiveGas:
                return new DiveGasMessage();
            case MessageNumber::Goal:
                return new GoalMessage();
            case MessageNumber::Activity:
                return new ActivityMessage();
            case MessageNumber::Session:
                return new SessionMessage();
            case MessageNumber::Lap:
                return new LapMessage();
            case MessageNumber::Length:
                return new LengthMessage();
            case MessageNumber::Record:
                return new RecordMessage();
            case MessageNumber::Event:
                return new EventMessage();
            case MessageNumber::DeviceInfo:
                return new DeviceInfoMessage();
            case MessageNumber::TrainingFile:
                return new TrainingFileMessage();
            case MessageNumber::Hrv:
                return new HrvMessage();
            case MessageNumber::WeatherConditions:
                return new WeatherConditionsMessage();
            case MessageNumber::WeatherAlert:
                return new WeatherAlertMessage();
            case MessageNumber::GpsMetadata:
                return new GpsMetadataMessage();
            case MessageNumber::CameraEvent:
                return new CameraEventMessage();
            case MessageNumber::GyroscopeData:
                return new GyroscopeDataMessage();
            case MessageNumber::AccelerometerData:
                return new AccelerometerDataMessage();
            case MessageNumber::MagnetometerData:
                return new MagnetometerDataMessage();
            case MessageNumber::BarometerData:
                return new BarometerDataMessage();
            case MessageNumber::ThreeDSensorCalibration:
                return new ThreeDSensorCalibrationMessage();
            case MessageNumber::OneDSensorCalibration:
                return new OneDSensorCalibrationMessage();
            case MessageNumber::VideoFrame:
                return new VideoFrameMessage();
            case MessageNumber::ObdiiData:
                return new ObdiiDataMessage();
            case MessageNumber::NmeaSentence:
                return new NmeaSentenceMessage();
            case MessageNumber::AviationAttitude:
                return new AviationAttitudeMessage();
            case MessageNumber::Video:
                return new VideoMessage();
            case MessageNumber::VideoTitle:
                return new VideoTitleMessage();
            case MessageNumber::VideoDescription:
                return new VideoDescriptionMessage();
            case MessageNumber::VideoClip:
                return new VideoClipMessage();
            case MessageNumber::Set:
                return new SetMessage();
            case MessageNumber::Jump:
                return new JumpMessage();
            case MessageNumber::Course:
                return new CourseMessage();
            case MessageNumber::CoursePoint:
                return new CoursePointMessage();
            case MessageNumber::SegmentId:
                return new SegmentIdMessage();
            case MessageNumber::SegmentLeaderboardEntry:
                return new SegmentLeaderboardEntryMessage();
            case MessageNumber::SegmentPoint:
                return new SegmentPointMessage();
            case MessageNumber::SegmentLap:
                return new SegmentLapMessage();
            case MessageNumber::SegmentFile:
                return new SegmentFileMessage();
            case MessageNumber::Workout:
                return new WorkoutMessage();
            case MessageNumber::WorkoutSession:
                return new WorkoutSessionMessage();
            case MessageNumber::WorkoutStep:
                return new WorkoutStepMessage();
            case MessageNumber::ExerciseTitle:
                return new ExerciseTitleMessage();
            case MessageNumber::Schedule:
                return new ScheduleMessage();
            case MessageNumber::Totals:
                return new TotalsMessage();
            case MessageNumber::WeightScale:
                return new WeightScaleMessage();
            case MessageNumber::BloodPressure:
                return new BloodPressureMessage();
            case MessageNumber::MonitoringInfo:
                return new MonitoringInfoMessage();
            case MessageNumber::Monitoring:
                return new MonitoringMessage();
            case MessageNumber::Hr:
                return new HrMessage();
            case MessageNumber::StressLevel:
                return new StressLevelMessage();
            case MessageNumber::MemoGlob:
                return new MemoGlobMessage();
            case MessageNumber::AntChannelId:
                return new AntChannelIdMessage();
            case MessageNumber::AntRx:
                return new AntRxMessage();
            case MessageNumber::AntTx:
                return new AntTxMessage();
            case MessageNumber::ExdScreenConfiguration:
                return new ExdScreenConfigurationMessage();
            case MessageNumber::ExdDataFieldConfiguration:
                return new ExdDataFieldConfigurationMessage();
            case MessageNumber::ExdDataConceptConfiguration:
                return new ExdDataConceptConfigurationMessage();
            case MessageNumber::FieldDescription:
                return new FieldDescriptionMessage();
            case MessageNumber::DeveloperDataId:
                return new DeveloperDataIdMessage();
            case MessageNumber::DiveSummary:
                return new DiveSummaryMessage();
            case MessageNumber::ClimbPro:
                return new ClimbProMessage();
            case MessageNumber::Pad:
                return new PadMessage();
            default:
                return new InvalidMessage();
        }
    }
}
