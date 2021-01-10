<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.40Release
 */

declare(strict_types=1);

namespace Sportlog\FIT\Profile;

use Sportlog\FIT\Profile\Message\AccelerometerDataMessage;
use Sportlog\FIT\Profile\Message\ActivityMessage;
use Sportlog\FIT\Profile\Message\AntChannelIdMessage;
use Sportlog\FIT\Profile\Message\AntRxMessage;
use Sportlog\FIT\Profile\Message\AntTxMessage;
use Sportlog\FIT\Profile\Message\AviationAttitudeMessage;
use Sportlog\FIT\Profile\Message\BarometerDataMessage;
use Sportlog\FIT\Profile\Message\BikeProfileMessage;
use Sportlog\FIT\Profile\Message\BloodPressureMessage;
use Sportlog\FIT\Profile\Message\CadenceZoneMessage;
use Sportlog\FIT\Profile\Message\CameraEventMessage;
use Sportlog\FIT\Profile\Message\CapabilitiesMessage;
use Sportlog\FIT\Profile\Message\ClimbProMessage;
use Sportlog\FIT\Profile\Message\ConnectivityMessage;
use Sportlog\FIT\Profile\Message\CourseMessage;
use Sportlog\FIT\Profile\Message\CoursePointMessage;
use Sportlog\FIT\Profile\Message\DeveloperDataIdMessage;
use Sportlog\FIT\Profile\Message\DeviceInfoMessage;
use Sportlog\FIT\Profile\Message\DeviceSettingsMessage;
use Sportlog\FIT\Profile\Message\DiveAlarmMessage;
use Sportlog\FIT\Profile\Message\DiveGasMessage;
use Sportlog\FIT\Profile\Message\DiveSettingsMessage;
use Sportlog\FIT\Profile\Message\DiveSummaryMessage;
use Sportlog\FIT\Profile\Message\EventMessage;
use Sportlog\FIT\Profile\Message\ExdDataConceptConfigurationMessage;
use Sportlog\FIT\Profile\Message\ExdDataFieldConfigurationMessage;
use Sportlog\FIT\Profile\Message\ExdScreenConfigurationMessage;
use Sportlog\FIT\Profile\Message\ExerciseTitleMessage;
use Sportlog\FIT\Profile\Message\FieldCapabilitiesMessage;
use Sportlog\FIT\Profile\Message\FieldDescriptionMessage;
use Sportlog\FIT\Profile\Message\FileCapabilitiesMessage;
use Sportlog\FIT\Profile\Message\FileCreatorMessage;
use Sportlog\FIT\Profile\Message\FileIdMessage;
use Sportlog\FIT\Profile\Message\GoalMessage;
use Sportlog\FIT\Profile\Message\GpsMetadataMessage;
use Sportlog\FIT\Profile\Message\GyroscopeDataMessage;
use Sportlog\FIT\Profile\Message\HrMessage;
use Sportlog\FIT\Profile\Message\HrZoneMessage;
use Sportlog\FIT\Profile\Message\HrmProfileMessage;
use Sportlog\FIT\Profile\Message\HrvMessage;
use Sportlog\FIT\Profile\Message\InvalidMessage;
use Sportlog\FIT\Profile\Message\JumpMessage;
use Sportlog\FIT\Profile\Message\LapMessage;
use Sportlog\FIT\Profile\Message\LengthMessage;
use Sportlog\FIT\Profile\Message\MagnetometerDataMessage;
use Sportlog\FIT\Profile\Message\MemoGlobMessage;
use Sportlog\FIT\Profile\Message\MesgCapabilitiesMessage;
use Sportlog\FIT\Profile\Message\MetZoneMessage;
use Sportlog\FIT\Profile\Message\MonitoringInfoMessage;
use Sportlog\FIT\Profile\Message\MonitoringMessage;
use Sportlog\FIT\Profile\Message\NmeaSentenceMessage;
use Sportlog\FIT\Profile\Message\ObdiiDataMessage;
use Sportlog\FIT\Profile\Message\OhrSettingsMessage;
use Sportlog\FIT\Profile\Message\OneDSensorCalibrationMessage;
use Sportlog\FIT\Profile\Message\PadMessage;
use Sportlog\FIT\Profile\Message\PowerZoneMessage;
use Sportlog\FIT\Profile\Message\RecordMessage;
use Sportlog\FIT\Profile\Message\ScheduleMessage;
use Sportlog\FIT\Profile\Message\SdmProfileMessage;
use Sportlog\FIT\Profile\Message\SegmentFileMessage;
use Sportlog\FIT\Profile\Message\SegmentIdMessage;
use Sportlog\FIT\Profile\Message\SegmentLapMessage;
use Sportlog\FIT\Profile\Message\SegmentLeaderboardEntryMessage;
use Sportlog\FIT\Profile\Message\SegmentPointMessage;
use Sportlog\FIT\Profile\Message\SessionMessage;
use Sportlog\FIT\Profile\Message\SetMessage;
use Sportlog\FIT\Profile\Message\SlaveDeviceMessage;
use Sportlog\FIT\Profile\Message\SoftwareMessage;
use Sportlog\FIT\Profile\Message\SpeedZoneMessage;
use Sportlog\FIT\Profile\Message\SportMessage;
use Sportlog\FIT\Profile\Message\StressLevelMessage;
use Sportlog\FIT\Profile\Message\ThreeDSensorCalibrationMessage;
use Sportlog\FIT\Profile\Message\TimestampCorrelationMessage;
use Sportlog\FIT\Profile\Message\TotalsMessage;
use Sportlog\FIT\Profile\Message\TrainingFileMessage;
use Sportlog\FIT\Profile\Message\UserProfileMessage;
use Sportlog\FIT\Profile\Message\VideoClipMessage;
use Sportlog\FIT\Profile\Message\VideoDescriptionMessage;
use Sportlog\FIT\Profile\Message\VideoFrameMessage;
use Sportlog\FIT\Profile\Message\VideoMessage;
use Sportlog\FIT\Profile\Message\VideoTitleMessage;
use Sportlog\FIT\Profile\Message\WatchfaceSettingsMessage;
use Sportlog\FIT\Profile\Message\WeatherAlertMessage;
use Sportlog\FIT\Profile\Message\WeatherConditionsMessage;
use Sportlog\FIT\Profile\Message\WeightScaleMessage;
use Sportlog\FIT\Profile\Message\WorkoutMessage;
use Sportlog\FIT\Profile\Message\WorkoutSessionMessage;
use Sportlog\FIT\Profile\Message\WorkoutStepMessage;
use Sportlog\FIT\Profile\Message\ZonesTargetMessage;

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
