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
        switch ($globalMessageNumber) {
            case MesgNum::FILE_ID:
                return new FileIdMessage();
            case MesgNum::FILE_CREATOR:
                return new FileCreatorMessage();
            case MesgNum::TIMESTAMP_CORRELATION:
                return new TimestampCorrelationMessage();
            case MesgNum::SOFTWARE:
                return new SoftwareMessage();
            case MesgNum::SLAVE_DEVICE:
                return new SlaveDeviceMessage();
            case MesgNum::CAPABILITIES:
                return new CapabilitiesMessage();
            case MesgNum::FILE_CAPABILITIES:
                return new FileCapabilitiesMessage();
            case MesgNum::MESG_CAPABILITIES:
                return new MesgCapabilitiesMessage();
            case MesgNum::FIELD_CAPABILITIES:
                return new FieldCapabilitiesMessage();
            case MesgNum::DEVICE_SETTINGS:
                return new DeviceSettingsMessage();
            case MesgNum::USER_PROFILE:
                return new UserProfileMessage();
            case MesgNum::HRM_PROFILE:
                return new HrmProfileMessage();
            case MesgNum::SDM_PROFILE:
                return new SdmProfileMessage();
            case MesgNum::BIKE_PROFILE:
                return new BikeProfileMessage();
            case MesgNum::CONNECTIVITY:
                return new ConnectivityMessage();
            case MesgNum::WATCHFACE_SETTINGS:
                return new WatchfaceSettingsMessage();
            case MesgNum::OHR_SETTINGS:
                return new OhrSettingsMessage();
            case MesgNum::ZONES_TARGET:
                return new ZonesTargetMessage();
            case MesgNum::SPORT:
                return new SportMessage();
            case MesgNum::HR_ZONE:
                return new HrZoneMessage();
            case MesgNum::SPEED_ZONE:
                return new SpeedZoneMessage();
            case MesgNum::CADENCE_ZONE:
                return new CadenceZoneMessage();
            case MesgNum::POWER_ZONE:
                return new PowerZoneMessage();
            case MesgNum::MET_ZONE:
                return new MetZoneMessage();
            case MesgNum::DIVE_SETTINGS:
                return new DiveSettingsMessage();
            case MesgNum::DIVE_ALARM:
                return new DiveAlarmMessage();
            case MesgNum::DIVE_GAS:
                return new DiveGasMessage();
            case MesgNum::GOAL:
                return new GoalMessage();
            case MesgNum::ACTIVITY:
                return new ActivityMessage();
            case MesgNum::SESSION:
                return new SessionMessage();
            case MesgNum::LAP:
                return new LapMessage();
            case MesgNum::LENGTH:
                return new LengthMessage();
            case MesgNum::RECORD:
                return new RecordMessage();
            case MesgNum::EVENT:
                return new EventMessage();
            case MesgNum::DEVICE_INFO:
                return new DeviceInfoMessage();
            case MesgNum::TRAINING_FILE:
                return new TrainingFileMessage();
            case MesgNum::HRV:
                return new HrvMessage();
            case MesgNum::WEATHER_CONDITIONS:
                return new WeatherConditionsMessage();
            case MesgNum::WEATHER_ALERT:
                return new WeatherAlertMessage();
            case MesgNum::GPS_METADATA:
                return new GpsMetadataMessage();
            case MesgNum::CAMERA_EVENT:
                return new CameraEventMessage();
            case MesgNum::GYROSCOPE_DATA:
                return new GyroscopeDataMessage();
            case MesgNum::ACCELEROMETER_DATA:
                return new AccelerometerDataMessage();
            case MesgNum::MAGNETOMETER_DATA:
                return new MagnetometerDataMessage();
            case MesgNum::BAROMETER_DATA:
                return new BarometerDataMessage();
            case MesgNum::THREE_D_SENSOR_CALIBRATION:
                return new ThreeDSensorCalibrationMessage();
            case MesgNum::ONE_D_SENSOR_CALIBRATION:
                return new OneDSensorCalibrationMessage();
            case MesgNum::VIDEO_FRAME:
                return new VideoFrameMessage();
            case MesgNum::OBDII_DATA:
                return new ObdiiDataMessage();
            case MesgNum::NMEA_SENTENCE:
                return new NmeaSentenceMessage();
            case MesgNum::AVIATION_ATTITUDE:
                return new AviationAttitudeMessage();
            case MesgNum::VIDEO:
                return new VideoMessage();
            case MesgNum::VIDEO_TITLE:
                return new VideoTitleMessage();
            case MesgNum::VIDEO_DESCRIPTION:
                return new VideoDescriptionMessage();
            case MesgNum::VIDEO_CLIP:
                return new VideoClipMessage();
            case MesgNum::SET:
                return new SetMessage();
            case MesgNum::JUMP:
                return new JumpMessage();
            case MesgNum::COURSE:
                return new CourseMessage();
            case MesgNum::COURSE_POINT:
                return new CoursePointMessage();
            case MesgNum::SEGMENT_ID:
                return new SegmentIdMessage();
            case MesgNum::SEGMENT_LEADERBOARD_ENTRY:
                return new SegmentLeaderboardEntryMessage();
            case MesgNum::SEGMENT_POINT:
                return new SegmentPointMessage();
            case MesgNum::SEGMENT_LAP:
                return new SegmentLapMessage();
            case MesgNum::SEGMENT_FILE:
                return new SegmentFileMessage();
            case MesgNum::WORKOUT:
                return new WorkoutMessage();
            case MesgNum::WORKOUT_SESSION:
                return new WorkoutSessionMessage();
            case MesgNum::WORKOUT_STEP:
                return new WorkoutStepMessage();
            case MesgNum::EXERCISE_TITLE:
                return new ExerciseTitleMessage();
            case MesgNum::SCHEDULE:
                return new ScheduleMessage();
            case MesgNum::TOTALS:
                return new TotalsMessage();
            case MesgNum::WEIGHT_SCALE:
                return new WeightScaleMessage();
            case MesgNum::BLOOD_PRESSURE:
                return new BloodPressureMessage();
            case MesgNum::MONITORING_INFO:
                return new MonitoringInfoMessage();
            case MesgNum::MONITORING:
                return new MonitoringMessage();
            case MesgNum::HR:
                return new HrMessage();
            case MesgNum::STRESS_LEVEL:
                return new StressLevelMessage();
            case MesgNum::MEMO_GLOB:
                return new MemoGlobMessage();
            case MesgNum::ANT_CHANNEL_ID:
                return new AntChannelIdMessage();
            case MesgNum::ANT_RX:
                return new AntRxMessage();
            case MesgNum::ANT_TX:
                return new AntTxMessage();
            case MesgNum::EXD_SCREEN_CONFIGURATION:
                return new ExdScreenConfigurationMessage();
            case MesgNum::EXD_DATA_FIELD_CONFIGURATION:
                return new ExdDataFieldConfigurationMessage();
            case MesgNum::EXD_DATA_CONCEPT_CONFIGURATION:
                return new ExdDataConceptConfigurationMessage();
            case MesgNum::FIELD_DESCRIPTION:
                return new FieldDescriptionMessage();
            case MesgNum::DEVELOPER_DATA_ID:
                return new DeveloperDataIdMessage();
            case MesgNum::DIVE_SUMMARY:
                return new DiveSummaryMessage();
            case MesgNum::CLIMB_PRO:
                return new ClimbProMessage();
            case MesgNum::PAD:
                return new PadMessage();
            default:
                return new InvalidMessage();
        }
    }
}
