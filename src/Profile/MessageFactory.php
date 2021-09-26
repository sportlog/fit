<?php

/**
 * FIT decoder
 *
 * @license MIT License
 *
 * ****WARNING****  This file is auto-generated! Do NOT edit.
 * Profile Version = 21.54Release
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
use Sportlog\FIT\Profile\Messages\DeviceInfoMessage;
use Sportlog\FIT\Profile\Messages\DeviceSettingsMessage;
use Sportlog\FIT\Profile\Messages\DiveAlarmMessage;
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
use Sportlog\FIT\Profile\Messages\InvalidMessage;
use Sportlog\FIT\Profile\Messages\JumpMessage;
use Sportlog\FIT\Profile\Messages\LapMessage;
use Sportlog\FIT\Profile\Messages\LengthMessage;
use Sportlog\FIT\Profile\Messages\MagnetometerDataMessage;
use Sportlog\FIT\Profile\Messages\MemoGlobMessage;
use Sportlog\FIT\Profile\Messages\MesgCapabilitiesMessage;
use Sportlog\FIT\Profile\Messages\MetZoneMessage;
use Sportlog\FIT\Profile\Messages\MonitoringInfoMessage;
use Sportlog\FIT\Profile\Messages\MonitoringMessage;
use Sportlog\FIT\Profile\Messages\NmeaSentenceMessage;
use Sportlog\FIT\Profile\Messages\ObdiiDataMessage;
use Sportlog\FIT\Profile\Messages\OhrSettingsMessage;
use Sportlog\FIT\Profile\Messages\OneDSensorCalibrationMessage;
use Sportlog\FIT\Profile\Messages\PadMessage;
use Sportlog\FIT\Profile\Messages\PowerZoneMessage;
use Sportlog\FIT\Profile\Messages\RecordMessage;
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
use Sportlog\FIT\Profile\Messages\SoftwareMessage;
use Sportlog\FIT\Profile\Messages\SpeedZoneMessage;
use Sportlog\FIT\Profile\Messages\SportMessage;
use Sportlog\FIT\Profile\Messages\StressLevelMessage;
use Sportlog\FIT\Profile\Messages\ThreeDSensorCalibrationMessage;
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
            MesgNum::FILE_ID => new FileIdMessage(),
            MesgNum::FILE_CREATOR => new FileCreatorMessage(),
            MesgNum::TIMESTAMP_CORRELATION => new TimestampCorrelationMessage(),
            MesgNum::SOFTWARE => new SoftwareMessage(),
            MesgNum::SLAVE_DEVICE => new SlaveDeviceMessage(),
            MesgNum::CAPABILITIES => new CapabilitiesMessage(),
            MesgNum::FILE_CAPABILITIES => new FileCapabilitiesMessage(),
            MesgNum::MESG_CAPABILITIES => new MesgCapabilitiesMessage(),
            MesgNum::FIELD_CAPABILITIES => new FieldCapabilitiesMessage(),
            MesgNum::DEVICE_SETTINGS => new DeviceSettingsMessage(),
            MesgNum::USER_PROFILE => new UserProfileMessage(),
            MesgNum::HRM_PROFILE => new HrmProfileMessage(),
            MesgNum::SDM_PROFILE => new SdmProfileMessage(),
            MesgNum::BIKE_PROFILE => new BikeProfileMessage(),
            MesgNum::CONNECTIVITY => new ConnectivityMessage(),
            MesgNum::WATCHFACE_SETTINGS => new WatchfaceSettingsMessage(),
            MesgNum::OHR_SETTINGS => new OhrSettingsMessage(),
            MesgNum::ZONES_TARGET => new ZonesTargetMessage(),
            MesgNum::SPORT => new SportMessage(),
            MesgNum::HR_ZONE => new HrZoneMessage(),
            MesgNum::SPEED_ZONE => new SpeedZoneMessage(),
            MesgNum::CADENCE_ZONE => new CadenceZoneMessage(),
            MesgNum::POWER_ZONE => new PowerZoneMessage(),
            MesgNum::MET_ZONE => new MetZoneMessage(),
            MesgNum::DIVE_SETTINGS => new DiveSettingsMessage(),
            MesgNum::DIVE_ALARM => new DiveAlarmMessage(),
            MesgNum::DIVE_GAS => new DiveGasMessage(),
            MesgNum::GOAL => new GoalMessage(),
            MesgNum::ACTIVITY => new ActivityMessage(),
            MesgNum::SESSION => new SessionMessage(),
            MesgNum::LAP => new LapMessage(),
            MesgNum::LENGTH => new LengthMessage(),
            MesgNum::RECORD => new RecordMessage(),
            MesgNum::EVENT => new EventMessage(),
            MesgNum::DEVICE_INFO => new DeviceInfoMessage(),
            MesgNum::TRAINING_FILE => new TrainingFileMessage(),
            MesgNum::HRV => new HrvMessage(),
            MesgNum::WEATHER_CONDITIONS => new WeatherConditionsMessage(),
            MesgNum::WEATHER_ALERT => new WeatherAlertMessage(),
            MesgNum::GPS_METADATA => new GpsMetadataMessage(),
            MesgNum::CAMERA_EVENT => new CameraEventMessage(),
            MesgNum::GYROSCOPE_DATA => new GyroscopeDataMessage(),
            MesgNum::ACCELEROMETER_DATA => new AccelerometerDataMessage(),
            MesgNum::MAGNETOMETER_DATA => new MagnetometerDataMessage(),
            MesgNum::BAROMETER_DATA => new BarometerDataMessage(),
            MesgNum::THREE_D_SENSOR_CALIBRATION => new ThreeDSensorCalibrationMessage(),
            MesgNum::ONE_D_SENSOR_CALIBRATION => new OneDSensorCalibrationMessage(),
            MesgNum::VIDEO_FRAME => new VideoFrameMessage(),
            MesgNum::OBDII_DATA => new ObdiiDataMessage(),
            MesgNum::NMEA_SENTENCE => new NmeaSentenceMessage(),
            MesgNum::AVIATION_ATTITUDE => new AviationAttitudeMessage(),
            MesgNum::VIDEO => new VideoMessage(),
            MesgNum::VIDEO_TITLE => new VideoTitleMessage(),
            MesgNum::VIDEO_DESCRIPTION => new VideoDescriptionMessage(),
            MesgNum::VIDEO_CLIP => new VideoClipMessage(),
            MesgNum::SET => new SetMessage(),
            MesgNum::JUMP => new JumpMessage(),
            MesgNum::COURSE => new CourseMessage(),
            MesgNum::COURSE_POINT => new CoursePointMessage(),
            MesgNum::SEGMENT_ID => new SegmentIdMessage(),
            MesgNum::SEGMENT_LEADERBOARD_ENTRY => new SegmentLeaderboardEntryMessage(),
            MesgNum::SEGMENT_POINT => new SegmentPointMessage(),
            MesgNum::SEGMENT_LAP => new SegmentLapMessage(),
            MesgNum::SEGMENT_FILE => new SegmentFileMessage(),
            MesgNum::WORKOUT => new WorkoutMessage(),
            MesgNum::WORKOUT_SESSION => new WorkoutSessionMessage(),
            MesgNum::WORKOUT_STEP => new WorkoutStepMessage(),
            MesgNum::EXERCISE_TITLE => new ExerciseTitleMessage(),
            MesgNum::SCHEDULE => new ScheduleMessage(),
            MesgNum::TOTALS => new TotalsMessage(),
            MesgNum::WEIGHT_SCALE => new WeightScaleMessage(),
            MesgNum::BLOOD_PRESSURE => new BloodPressureMessage(),
            MesgNum::MONITORING_INFO => new MonitoringInfoMessage(),
            MesgNum::MONITORING => new MonitoringMessage(),
            MesgNum::HR => new HrMessage(),
            MesgNum::STRESS_LEVEL => new StressLevelMessage(),
            MesgNum::MEMO_GLOB => new MemoGlobMessage(),
            MesgNum::ANT_CHANNEL_ID => new AntChannelIdMessage(),
            MesgNum::ANT_RX => new AntRxMessage(),
            MesgNum::ANT_TX => new AntTxMessage(),
            MesgNum::EXD_SCREEN_CONFIGURATION => new ExdScreenConfigurationMessage(),
            MesgNum::EXD_DATA_FIELD_CONFIGURATION => new ExdDataFieldConfigurationMessage(),
            MesgNum::EXD_DATA_CONCEPT_CONFIGURATION => new ExdDataConceptConfigurationMessage(),
            MesgNum::FIELD_DESCRIPTION => new FieldDescriptionMessage(),
            MesgNum::DEVELOPER_DATA_ID => new DeveloperDataIdMessage(),
            MesgNum::DIVE_SUMMARY => new DiveSummaryMessage(),
            MesgNum::CLIMB_PRO => new ClimbProMessage(),
            MesgNum::PAD => new PadMessage(),
            default => new InvalidMessage()
        };
    }
}
