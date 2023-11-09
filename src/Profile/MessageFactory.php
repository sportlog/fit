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

namespace Sportlog\FIT\Profile;

use Sportlog\FIT\Profile\Messages\AccelerometerDataMessage;
use Sportlog\FIT\Profile\Messages\ActivityMessage;
use Sportlog\FIT\Profile\Messages\AntChannelIdMessage;
use Sportlog\FIT\Profile\Messages\AntRxMessage;
use Sportlog\FIT\Profile\Messages\AntTxMessage;
use Sportlog\FIT\Profile\Messages\AviationAttitudeMessage;
use Sportlog\FIT\Profile\Messages\BarometerDataMessage;
use Sportlog\FIT\Profile\Messages\BeatIntervalsMessage;
use Sportlog\FIT\Profile\Messages\BikeProfileMessage;
use Sportlog\FIT\Profile\Messages\BloodPressureMessage;
use Sportlog\FIT\Profile\Messages\CadenceZoneMessage;
use Sportlog\FIT\Profile\Messages\CameraEventMessage;
use Sportlog\FIT\Profile\Messages\CapabilitiesMessage;
use Sportlog\FIT\Profile\Messages\ClimbProMessage;
use Sportlog\FIT\Profile\Messages\ConnectivityMessage;
use Sportlog\FIT\Profile\Messages\CourseMessage;
use Sportlog\FIT\Profile\Messages\CoursePointMessage;
use Sportlog\FIT\Profile\Messages\DeveloperDataIdMessage;
use Sportlog\FIT\Profile\Messages\DeviceAuxBatteryInfoMessage;
use Sportlog\FIT\Profile\Messages\DeviceInfoMessage;
use Sportlog\FIT\Profile\Messages\DeviceSettingsMessage;
use Sportlog\FIT\Profile\Messages\DiveAlarmMessage;
use Sportlog\FIT\Profile\Messages\DiveApneaAlarmMessage;
use Sportlog\FIT\Profile\Messages\DiveGasMessage;
use Sportlog\FIT\Profile\Messages\DiveSettingsMessage;
use Sportlog\FIT\Profile\Messages\DiveSummaryMessage;
use Sportlog\FIT\Profile\Messages\EventMessage;
use Sportlog\FIT\Profile\Messages\ExdDataConceptConfigurationMessage;
use Sportlog\FIT\Profile\Messages\ExdDataFieldConfigurationMessage;
use Sportlog\FIT\Profile\Messages\ExdScreenConfigurationMessage;
use Sportlog\FIT\Profile\Messages\ExerciseTitleMessage;
use Sportlog\FIT\Profile\Messages\FieldCapabilitiesMessage;
use Sportlog\FIT\Profile\Messages\FieldDescriptionMessage;
use Sportlog\FIT\Profile\Messages\FileCapabilitiesMessage;
use Sportlog\FIT\Profile\Messages\FileCreatorMessage;
use Sportlog\FIT\Profile\Messages\FileIdMessage;
use Sportlog\FIT\Profile\Messages\GoalMessage;
use Sportlog\FIT\Profile\Messages\GpsMetadataMessage;
use Sportlog\FIT\Profile\Messages\GyroscopeDataMessage;
use Sportlog\FIT\Profile\Messages\HrMessage;
use Sportlog\FIT\Profile\Messages\HrZoneMessage;
use Sportlog\FIT\Profile\Messages\HrmProfileMessage;
use Sportlog\FIT\Profile\Messages\HrvMessage;
use Sportlog\FIT\Profile\Messages\HrvStatusSummaryMessage;
use Sportlog\FIT\Profile\Messages\HrvValueMessage;
use Sportlog\FIT\Profile\Messages\InvalidMessage;
use Sportlog\FIT\Profile\Messages\JumpMessage;
use Sportlog\FIT\Profile\Messages\LapMessage;
use Sportlog\FIT\Profile\Messages\LengthMessage;
use Sportlog\FIT\Profile\Messages\MagnetometerDataMessage;
use Sportlog\FIT\Profile\Messages\MaxMetDataMessage;
use Sportlog\FIT\Profile\Messages\MemoGlobMessage;
use Sportlog\FIT\Profile\Messages\MesgCapabilitiesMessage;
use Sportlog\FIT\Profile\Messages\MetZoneMessage;
use Sportlog\FIT\Profile\Messages\MonitoringHrDataMessage;
use Sportlog\FIT\Profile\Messages\MonitoringInfoMessage;
use Sportlog\FIT\Profile\Messages\MonitoringMessage;
use Sportlog\FIT\Profile\Messages\NmeaSentenceMessage;
use Sportlog\FIT\Profile\Messages\ObdiiDataMessage;
use Sportlog\FIT\Profile\Messages\OhrSettingsMessage;
use Sportlog\FIT\Profile\Messages\OneDSensorCalibrationMessage;
use Sportlog\FIT\Profile\Messages\PadMessage;
use Sportlog\FIT\Profile\Messages\PowerZoneMessage;
use Sportlog\FIT\Profile\Messages\RecordMessage;
use Sportlog\FIT\Profile\Messages\RespirationRateMessage;
use Sportlog\FIT\Profile\Messages\ScheduleMessage;
use Sportlog\FIT\Profile\Messages\SdmProfileMessage;
use Sportlog\FIT\Profile\Messages\SegmentFileMessage;
use Sportlog\FIT\Profile\Messages\SegmentIdMessage;
use Sportlog\FIT\Profile\Messages\SegmentLapMessage;
use Sportlog\FIT\Profile\Messages\SegmentLeaderboardEntryMessage;
use Sportlog\FIT\Profile\Messages\SegmentPointMessage;
use Sportlog\FIT\Profile\Messages\SessionMessage;
use Sportlog\FIT\Profile\Messages\SetMessage;
use Sportlog\FIT\Profile\Messages\SlaveDeviceMessage;
use Sportlog\FIT\Profile\Messages\SleepAssessmentMessage;
use Sportlog\FIT\Profile\Messages\SleepLevelMessage;
use Sportlog\FIT\Profile\Messages\SoftwareMessage;
use Sportlog\FIT\Profile\Messages\SpeedZoneMessage;
use Sportlog\FIT\Profile\Messages\SplitMessage;
use Sportlog\FIT\Profile\Messages\Spo2DataMessage;
use Sportlog\FIT\Profile\Messages\SportMessage;
use Sportlog\FIT\Profile\Messages\StressLevelMessage;
use Sportlog\FIT\Profile\Messages\TankSummaryMessage;
use Sportlog\FIT\Profile\Messages\TankUpdateMessage;
use Sportlog\FIT\Profile\Messages\ThreeDSensorCalibrationMessage;
use Sportlog\FIT\Profile\Messages\TimeInZoneMessage;
use Sportlog\FIT\Profile\Messages\TimestampCorrelationMessage;
use Sportlog\FIT\Profile\Messages\TotalsMessage;
use Sportlog\FIT\Profile\Messages\TrainingFileMessage;
use Sportlog\FIT\Profile\Messages\UserProfileMessage;
use Sportlog\FIT\Profile\Messages\VideoClipMessage;
use Sportlog\FIT\Profile\Messages\VideoDescriptionMessage;
use Sportlog\FIT\Profile\Messages\VideoFrameMessage;
use Sportlog\FIT\Profile\Messages\VideoMessage;
use Sportlog\FIT\Profile\Messages\VideoTitleMessage;
use Sportlog\FIT\Profile\Messages\WatchfaceSettingsMessage;
use Sportlog\FIT\Profile\Messages\WeatherAlertMessage;
use Sportlog\FIT\Profile\Messages\WeatherConditionsMessage;
use Sportlog\FIT\Profile\Messages\WeightScaleMessage;
use Sportlog\FIT\Profile\Messages\WorkoutMessage;
use Sportlog\FIT\Profile\Messages\WorkoutSessionMessage;
use Sportlog\FIT\Profile\Messages\WorkoutStepMessage;
use Sportlog\FIT\Profile\Messages\ZonesTargetMessage;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * Factory for creating a new message instance
 */
class MessageFactory
{
    /**
     * Creates the message instance for the global message number
     */
    public static function createMessage(int $globalMessageNumber): Message
    {
        return match ($globalMessageNumber) {
            MesgNum::FileId => new FileIdMessage(),
            MesgNum::FileCreator => new FileCreatorMessage(),
            MesgNum::TimestampCorrelation => new TimestampCorrelationMessage(),
            MesgNum::Software => new SoftwareMessage(),
            MesgNum::SlaveDevice => new SlaveDeviceMessage(),
            MesgNum::Capabilities => new CapabilitiesMessage(),
            MesgNum::FileCapabilities => new FileCapabilitiesMessage(),
            MesgNum::MesgCapabilities => new MesgCapabilitiesMessage(),
            MesgNum::FieldCapabilities => new FieldCapabilitiesMessage(),
            MesgNum::DeviceSettings => new DeviceSettingsMessage(),
            MesgNum::UserProfile => new UserProfileMessage(),
            MesgNum::HrmProfile => new HrmProfileMessage(),
            MesgNum::SdmProfile => new SdmProfileMessage(),
            MesgNum::BikeProfile => new BikeProfileMessage(),
            MesgNum::Connectivity => new ConnectivityMessage(),
            MesgNum::WatchfaceSettings => new WatchfaceSettingsMessage(),
            MesgNum::OhrSettings => new OhrSettingsMessage(),
            MesgNum::TimeInZone => new TimeInZoneMessage(),
            MesgNum::ZonesTarget => new ZonesTargetMessage(),
            MesgNum::Sport => new SportMessage(),
            MesgNum::HrZone => new HrZoneMessage(),
            MesgNum::SpeedZone => new SpeedZoneMessage(),
            MesgNum::CadenceZone => new CadenceZoneMessage(),
            MesgNum::PowerZone => new PowerZoneMessage(),
            MesgNum::MetZone => new MetZoneMessage(),
            MesgNum::DiveSettings => new DiveSettingsMessage(),
            MesgNum::DiveAlarm => new DiveAlarmMessage(),
            MesgNum::DiveApneaAlarm => new DiveApneaAlarmMessage(),
            MesgNum::DiveGas => new DiveGasMessage(),
            MesgNum::Goal => new GoalMessage(),
            MesgNum::Activity => new ActivityMessage(),
            MesgNum::Session => new SessionMessage(),
            MesgNum::Lap => new LapMessage(),
            MesgNum::Length => new LengthMessage(),
            MesgNum::Record => new RecordMessage(),
            MesgNum::Event => new EventMessage(),
            MesgNum::DeviceInfo => new DeviceInfoMessage(),
            MesgNum::DeviceAuxBatteryInfo => new DeviceAuxBatteryInfoMessage(),
            MesgNum::TrainingFile => new TrainingFileMessage(),
            MesgNum::WeatherConditions => new WeatherConditionsMessage(),
            MesgNum::WeatherAlert => new WeatherAlertMessage(),
            MesgNum::GpsMetadata => new GpsMetadataMessage(),
            MesgNum::CameraEvent => new CameraEventMessage(),
            MesgNum::GyroscopeData => new GyroscopeDataMessage(),
            MesgNum::AccelerometerData => new AccelerometerDataMessage(),
            MesgNum::MagnetometerData => new MagnetometerDataMessage(),
            MesgNum::BarometerData => new BarometerDataMessage(),
            MesgNum::ThreeDSensorCalibration => new ThreeDSensorCalibrationMessage(),
            MesgNum::OneDSensorCalibration => new OneDSensorCalibrationMessage(),
            MesgNum::VideoFrame => new VideoFrameMessage(),
            MesgNum::ObdiiData => new ObdiiDataMessage(),
            MesgNum::NmeaSentence => new NmeaSentenceMessage(),
            MesgNum::AviationAttitude => new AviationAttitudeMessage(),
            MesgNum::Video => new VideoMessage(),
            MesgNum::VideoTitle => new VideoTitleMessage(),
            MesgNum::VideoDescription => new VideoDescriptionMessage(),
            MesgNum::VideoClip => new VideoClipMessage(),
            MesgNum::Set => new SetMessage(),
            MesgNum::Jump => new JumpMessage(),
            MesgNum::Split => new SplitMessage(),
            MesgNum::ClimbPro => new ClimbProMessage(),
            MesgNum::FieldDescription => new FieldDescriptionMessage(),
            MesgNum::DeveloperDataId => new DeveloperDataIdMessage(),
            MesgNum::Course => new CourseMessage(),
            MesgNum::CoursePoint => new CoursePointMessage(),
            MesgNum::SegmentId => new SegmentIdMessage(),
            MesgNum::SegmentLeaderboardEntry => new SegmentLeaderboardEntryMessage(),
            MesgNum::SegmentPoint => new SegmentPointMessage(),
            MesgNum::SegmentLap => new SegmentLapMessage(),
            MesgNum::SegmentFile => new SegmentFileMessage(),
            MesgNum::Workout => new WorkoutMessage(),
            MesgNum::WorkoutSession => new WorkoutSessionMessage(),
            MesgNum::WorkoutStep => new WorkoutStepMessage(),
            MesgNum::ExerciseTitle => new ExerciseTitleMessage(),
            MesgNum::Schedule => new ScheduleMessage(),
            MesgNum::Totals => new TotalsMessage(),
            MesgNum::WeightScale => new WeightScaleMessage(),
            MesgNum::BloodPressure => new BloodPressureMessage(),
            MesgNum::MonitoringInfo => new MonitoringInfoMessage(),
            MesgNum::Monitoring => new MonitoringMessage(),
            MesgNum::MonitoringHrData => new MonitoringHrDataMessage(),
            MesgNum::Spo2Data => new Spo2DataMessage(),
            MesgNum::Hr => new HrMessage(),
            MesgNum::StressLevel => new StressLevelMessage(),
            MesgNum::MaxMetData => new MaxMetDataMessage(),
            MesgNum::MemoGlob => new MemoGlobMessage(),
            MesgNum::SleepLevel => new SleepLevelMessage(),
            MesgNum::AntChannelId => new AntChannelIdMessage(),
            MesgNum::AntRx => new AntRxMessage(),
            MesgNum::AntTx => new AntTxMessage(),
            MesgNum::ExdScreenConfiguration => new ExdScreenConfigurationMessage(),
            MesgNum::ExdDataFieldConfiguration => new ExdDataFieldConfigurationMessage(),
            MesgNum::ExdDataConceptConfiguration => new ExdDataConceptConfigurationMessage(),
            MesgNum::DiveSummary => new DiveSummaryMessage(),
            MesgNum::Hrv => new HrvMessage(),
            MesgNum::BeatIntervals => new BeatIntervalsMessage(),
            MesgNum::HrvStatusSummary => new HrvStatusSummaryMessage(),
            MesgNum::HrvValue => new HrvValueMessage(),
            MesgNum::RespirationRate => new RespirationRateMessage(),
            MesgNum::TankUpdate => new TankUpdateMessage(),
            MesgNum::TankSummary => new TankSummaryMessage(),
            MesgNum::SleepAssessment => new SleepAssessmentMessage(),
            MesgNum::Pad => new PadMessage(),
            default => new InvalidMessage()
        };
    }
}
