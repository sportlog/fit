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

namespace Sportlog\FIT\Profile;

use Sportlog\FIT\Profile\Messages\AadAccelFeaturesMessage;
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
use Sportlog\FIT\Profile\Messages\ChronoShotDataMessage;
use Sportlog\FIT\Profile\Messages\ChronoShotSessionMessage;
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
use Sportlog\FIT\Profile\Messages\HsaAccelerometerDataMessage;
use Sportlog\FIT\Profile\Messages\HsaBodyBatteryDataMessage;
use Sportlog\FIT\Profile\Messages\HsaConfigurationDataMessage;
use Sportlog\FIT\Profile\Messages\HsaEventMessage;
use Sportlog\FIT\Profile\Messages\HsaGyroscopeDataMessage;
use Sportlog\FIT\Profile\Messages\HsaHeartRateDataMessage;
use Sportlog\FIT\Profile\Messages\HsaRespirationDataMessage;
use Sportlog\FIT\Profile\Messages\HsaSpo2DataMessage;
use Sportlog\FIT\Profile\Messages\HsaStepDataMessage;
use Sportlog\FIT\Profile\Messages\HsaStressDataMessage;
use Sportlog\FIT\Profile\Messages\HsaWristTemperatureDataMessage;
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
use Sportlog\FIT\Profile\Messages\RawBbiMessage;
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
use Sportlog\FIT\Profile\Messages\SkinTempOvernightMessage;
use Sportlog\FIT\Profile\Messages\SlaveDeviceMessage;
use Sportlog\FIT\Profile\Messages\SleepAssessmentMessage;
use Sportlog\FIT\Profile\Messages\SleepLevelMessage;
use Sportlog\FIT\Profile\Messages\SoftwareMessage;
use Sportlog\FIT\Profile\Messages\SpeedZoneMessage;
use Sportlog\FIT\Profile\Messages\SplitMessage;
use Sportlog\FIT\Profile\Messages\SplitSummaryMessage;
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
            MesgNum::FileId->value => new FileIdMessage(),
            MesgNum::FileCreator->value => new FileCreatorMessage(),
            MesgNum::TimestampCorrelation->value => new TimestampCorrelationMessage(),
            MesgNum::Software->value => new SoftwareMessage(),
            MesgNum::SlaveDevice->value => new SlaveDeviceMessage(),
            MesgNum::Capabilities->value => new CapabilitiesMessage(),
            MesgNum::FileCapabilities->value => new FileCapabilitiesMessage(),
            MesgNum::MesgCapabilities->value => new MesgCapabilitiesMessage(),
            MesgNum::FieldCapabilities->value => new FieldCapabilitiesMessage(),
            MesgNum::DeviceSettings->value => new DeviceSettingsMessage(),
            MesgNum::UserProfile->value => new UserProfileMessage(),
            MesgNum::HrmProfile->value => new HrmProfileMessage(),
            MesgNum::SdmProfile->value => new SdmProfileMessage(),
            MesgNum::BikeProfile->value => new BikeProfileMessage(),
            MesgNum::Connectivity->value => new ConnectivityMessage(),
            MesgNum::WatchfaceSettings->value => new WatchfaceSettingsMessage(),
            MesgNum::OhrSettings->value => new OhrSettingsMessage(),
            MesgNum::TimeInZone->value => new TimeInZoneMessage(),
            MesgNum::ZonesTarget->value => new ZonesTargetMessage(),
            MesgNum::Sport->value => new SportMessage(),
            MesgNum::HrZone->value => new HrZoneMessage(),
            MesgNum::SpeedZone->value => new SpeedZoneMessage(),
            MesgNum::CadenceZone->value => new CadenceZoneMessage(),
            MesgNum::PowerZone->value => new PowerZoneMessage(),
            MesgNum::MetZone->value => new MetZoneMessage(),
            MesgNum::DiveSettings->value => new DiveSettingsMessage(),
            MesgNum::DiveAlarm->value => new DiveAlarmMessage(),
            MesgNum::DiveApneaAlarm->value => new DiveApneaAlarmMessage(),
            MesgNum::DiveGas->value => new DiveGasMessage(),
            MesgNum::Goal->value => new GoalMessage(),
            MesgNum::Activity->value => new ActivityMessage(),
            MesgNum::Session->value => new SessionMessage(),
            MesgNum::Lap->value => new LapMessage(),
            MesgNum::Length->value => new LengthMessage(),
            MesgNum::Record->value => new RecordMessage(),
            MesgNum::Event->value => new EventMessage(),
            MesgNum::DeviceInfo->value => new DeviceInfoMessage(),
            MesgNum::DeviceAuxBatteryInfo->value => new DeviceAuxBatteryInfoMessage(),
            MesgNum::TrainingFile->value => new TrainingFileMessage(),
            MesgNum::WeatherConditions->value => new WeatherConditionsMessage(),
            MesgNum::WeatherAlert->value => new WeatherAlertMessage(),
            MesgNum::GpsMetadata->value => new GpsMetadataMessage(),
            MesgNum::CameraEvent->value => new CameraEventMessage(),
            MesgNum::GyroscopeData->value => new GyroscopeDataMessage(),
            MesgNum::AccelerometerData->value => new AccelerometerDataMessage(),
            MesgNum::MagnetometerData->value => new MagnetometerDataMessage(),
            MesgNum::BarometerData->value => new BarometerDataMessage(),
            MesgNum::ThreeDSensorCalibration->value => new ThreeDSensorCalibrationMessage(),
            MesgNum::OneDSensorCalibration->value => new OneDSensorCalibrationMessage(),
            MesgNum::VideoFrame->value => new VideoFrameMessage(),
            MesgNum::ObdiiData->value => new ObdiiDataMessage(),
            MesgNum::NmeaSentence->value => new NmeaSentenceMessage(),
            MesgNum::AviationAttitude->value => new AviationAttitudeMessage(),
            MesgNum::Video->value => new VideoMessage(),
            MesgNum::VideoTitle->value => new VideoTitleMessage(),
            MesgNum::VideoDescription->value => new VideoDescriptionMessage(),
            MesgNum::VideoClip->value => new VideoClipMessage(),
            MesgNum::Set->value => new SetMessage(),
            MesgNum::Jump->value => new JumpMessage(),
            MesgNum::Split->value => new SplitMessage(),
            MesgNum::SplitSummary->value => new SplitSummaryMessage(),
            MesgNum::ClimbPro->value => new ClimbProMessage(),
            MesgNum::FieldDescription->value => new FieldDescriptionMessage(),
            MesgNum::DeveloperDataId->value => new DeveloperDataIdMessage(),
            MesgNum::Course->value => new CourseMessage(),
            MesgNum::CoursePoint->value => new CoursePointMessage(),
            MesgNum::SegmentId->value => new SegmentIdMessage(),
            MesgNum::SegmentLeaderboardEntry->value => new SegmentLeaderboardEntryMessage(),
            MesgNum::SegmentPoint->value => new SegmentPointMessage(),
            MesgNum::SegmentLap->value => new SegmentLapMessage(),
            MesgNum::SegmentFile->value => new SegmentFileMessage(),
            MesgNum::Workout->value => new WorkoutMessage(),
            MesgNum::WorkoutSession->value => new WorkoutSessionMessage(),
            MesgNum::WorkoutStep->value => new WorkoutStepMessage(),
            MesgNum::ExerciseTitle->value => new ExerciseTitleMessage(),
            MesgNum::Schedule->value => new ScheduleMessage(),
            MesgNum::Totals->value => new TotalsMessage(),
            MesgNum::WeightScale->value => new WeightScaleMessage(),
            MesgNum::BloodPressure->value => new BloodPressureMessage(),
            MesgNum::MonitoringInfo->value => new MonitoringInfoMessage(),
            MesgNum::Monitoring->value => new MonitoringMessage(),
            MesgNum::MonitoringHrData->value => new MonitoringHrDataMessage(),
            MesgNum::Spo2Data->value => new Spo2DataMessage(),
            MesgNum::Hr->value => new HrMessage(),
            MesgNum::StressLevel->value => new StressLevelMessage(),
            MesgNum::MaxMetData->value => new MaxMetDataMessage(),
            MesgNum::HsaBodyBatteryData->value => new HsaBodyBatteryDataMessage(),
            MesgNum::HsaEvent->value => new HsaEventMessage(),
            MesgNum::HsaAccelerometerData->value => new HsaAccelerometerDataMessage(),
            MesgNum::HsaGyroscopeData->value => new HsaGyroscopeDataMessage(),
            MesgNum::HsaStepData->value => new HsaStepDataMessage(),
            MesgNum::HsaSpo2Data->value => new HsaSpo2DataMessage(),
            MesgNum::HsaStressData->value => new HsaStressDataMessage(),
            MesgNum::HsaRespirationData->value => new HsaRespirationDataMessage(),
            MesgNum::HsaHeartRateData->value => new HsaHeartRateDataMessage(),
            MesgNum::HsaConfigurationData->value => new HsaConfigurationDataMessage(),
            MesgNum::HsaWristTemperatureData->value => new HsaWristTemperatureDataMessage(),
            MesgNum::MemoGlob->value => new MemoGlobMessage(),
            MesgNum::SleepLevel->value => new SleepLevelMessage(),
            MesgNum::AntChannelId->value => new AntChannelIdMessage(),
            MesgNum::AntRx->value => new AntRxMessage(),
            MesgNum::AntTx->value => new AntTxMessage(),
            MesgNum::ExdScreenConfiguration->value => new ExdScreenConfigurationMessage(),
            MesgNum::ExdDataFieldConfiguration->value => new ExdDataFieldConfigurationMessage(),
            MesgNum::ExdDataConceptConfiguration->value => new ExdDataConceptConfigurationMessage(),
            MesgNum::DiveSummary->value => new DiveSummaryMessage(),
            MesgNum::AadAccelFeatures->value => new AadAccelFeaturesMessage(),
            MesgNum::Hrv->value => new HrvMessage(),
            MesgNum::BeatIntervals->value => new BeatIntervalsMessage(),
            MesgNum::HrvStatusSummary->value => new HrvStatusSummaryMessage(),
            MesgNum::HrvValue->value => new HrvValueMessage(),
            MesgNum::RawBbi->value => new RawBbiMessage(),
            MesgNum::RespirationRate->value => new RespirationRateMessage(),
            MesgNum::ChronoShotSession->value => new ChronoShotSessionMessage(),
            MesgNum::ChronoShotData->value => new ChronoShotDataMessage(),
            MesgNum::TankUpdate->value => new TankUpdateMessage(),
            MesgNum::TankSummary->value => new TankSummaryMessage(),
            MesgNum::SleepAssessment->value => new SleepAssessmentMessage(),
            MesgNum::SkinTempOvernight->value => new SkinTempOvernightMessage(),
            MesgNum::Pad->value => new PadMessage(),
            default => new InvalidMessage()
        };
    }
}
