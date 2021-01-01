<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT\Message;

use Exception;
use ReflectionClass;
use ReflectionProperty;
use FIT\FitBaseType;
use FIT\FitBaseTypeDefinition;

final class MessageFactory
{
    private static $reflectionProperties = [];

    /**
     * Creates the appropriate Message according to the provided global message number
     * and assigns the values.
     */
    public static function create(int $globalMessageNumber, array $fieldValues, array $fieldTypes): Message
    {
        $instance = self::newInstance($globalMessageNumber);
        $properties = self::getReflectionProperties($instance::class);

        $copiedFieldValues = $fieldValues;
        foreach ($properties as $key => $property) {
            /** @var ReflectionProperty $reflectionProperty */
            $reflectionProperty = $property['reflectionProperty'];
            $fieldValue = null;
            $baseType = FitBaseType::fromType($property['field']->getType());

            // Check if a value is present for the property
            if (isset($copiedFieldValues[$key])) {
                if ($baseType !== $fieldTypes[$property['field']->getNumber()]) {
                    throw new Exception(sprintf('mismatch between base type in FIT message and base type declared in meta data of property "%s::%s"', 
                        $instance::class, $reflectionProperty->getName()));
                }

                $fieldValue = $copiedFieldValues[$key];
                unset($copiedFieldValues[$key]);
            } else {
                if (is_null($baseType)) {
                    throw new Exception(sprintf('Invalid base type in meta data for "%s:%s"', $instance::class, $reflectionProperty->getName()));
                }
                // According to the FIT protocol any missing values should be field
                // with the invalid value.
                $fieldValue = $baseType->getInvalidValue();
            }

            // $instance->values[$property['field']->getNumber()] = $fieldValue;
            $instance->values[] = [
                'name' => $property['field']->getName(),
                'type' => $baseType,
                'value' => $fieldValue
            ];
            $reflectionProperty->setValue($instance, $fieldValue);
        }

        // All values which still remain in the array have not been mapped to a property.
        foreach ($copiedFieldValues as $key => $fieldValue) {
            // $instance->values["def-no-{$key}"] = $value;
            $instance->values[] = [
                'name' => "def-no-{$key}",
                'type' => $fieldTypes[$key],
                'value' => $fieldValue
            ];
        }

        return $instance;
    }

    private static function newInstance(int $globalMessageNumber): Message
    {
        switch ($globalMessageNumber) {
            case MessageNumber::FileId:
                return new FileIdMessage();

            case MessageNumber::Event:
                return new EventMessage();

            case MessageNumber::FileCreator:
                return new FileCreatorMessage();

            case MessageNumber::DeviceInfo:
                return new DeviceInfoMessage();

            case MessageNumber::DeviceSettings:
                return new DeviceSettingMessage();

            case MessageNumber::Record:
                return new RecordMessage();

            case MessageNumber::Capabilities:
            case MessageNumber::UserProfile:
            case MessageNumber::HrmProfile:
            case MessageNumber::SdmProfile:
            case MessageNumber::BikeProfile:
            case MessageNumber::ZonesTarget:
            case MessageNumber::HrZone:
            case MessageNumber::PowerZone:
            case MessageNumber::MetZone:
            case MessageNumber::Sport:
            case MessageNumber::Goal:
            case MessageNumber::Session:
            case MessageNumber::Lap:
            case MessageNumber::Workout:
            case MessageNumber::WorkoutStep:
            case MessageNumber::Schedule:
            case MessageNumber::WeightScale:
            case MessageNumber::Course:
            case MessageNumber::CoursePo:
            case MessageNumber::Totals:
            case MessageNumber::Activity:
            case MessageNumber::Software:
            case MessageNumber::FileCapabilities:
            case MessageNumber::MesgCapabilities:
            case MessageNumber::FieldCapabilities:
            case MessageNumber::BloodPressure:
            case MessageNumber::SpeedZone:
            case MessageNumber::Monitoring:
            case MessageNumber::TrainingFile:
            case MessageNumber::Hrv:
            case MessageNumber::AntRx:
            case MessageNumber::AntTx:
            case MessageNumber::AntChannelId:
            case MessageNumber::Length:
            case MessageNumber::MonitoringInfo:
            case MessageNumber::Pad:
            case MessageNumber::SlaveDevice:
            case MessageNumber::Connectivity:
            case MessageNumber::WeatherConditions:
            case MessageNumber::WeatherAlert:
            case MessageNumber::CadenceZone:
            case MessageNumber::Hr:
            case MessageNumber::SegmentLap:
            case MessageNumber::MemoGlob:
            case MessageNumber::SegmentId:
            case MessageNumber::SegmentLeaderboardEntry:
            case MessageNumber::SegmentPo:
            case MessageNumber::SegmentFile:
            case MessageNumber::WorkoutSession:
            case MessageNumber::WatchfaceSettings:
            case MessageNumber::GpsMetadata:
            case MessageNumber::CameraEvent:
            case MessageNumber::TimestampCorrelation:
            case MessageNumber::GyroscopeData:
            case MessageNumber::AccelerometerData:
            case MessageNumber::ThreeDSensorCalibration:
            case MessageNumber::VideoFrame:
            case MessageNumber::ObdiiData:
            case MessageNumber::NmeaSentence:
            case MessageNumber::AviationAttitude:
            case MessageNumber::Video:
            case MessageNumber::VideoTitle:
            case MessageNumber::VideoDescription:
            case MessageNumber::VideoClip:
            case MessageNumber::OhrSettings:
            case MessageNumber::ExdScreenConfiguration:
            case MessageNumber::ExdDataFieldConfiguration:
            case MessageNumber::ExdDataConceptConfiguration:
            case MessageNumber::FieldDescription:
            case MessageNumber::DeveloperDataId:
            case MessageNumber::MagnetometerData:
            case MessageNumber::BarometerData:
            case MessageNumber::OneDSensorCalibration:
            case MessageNumber::Set:
            case MessageNumber::StressLevel:
            case MessageNumber::DiveSettings:
            case MessageNumber::DiveGas:
            case MessageNumber::DiveAlarm:
            case MessageNumber::ExerciseTitle:
            case MessageNumber::DiveSummary:
            case MessageNumber::Jump:
            case MessageNumber::ClimbPro:
            case MessageNumber::MfgRangeMin:
            case MessageNumber::MfgRangeMax:
                return new UnhandledMessage($globalMessageNumber);

            default:
                return new UnknownMessage($globalMessageNumber);
        }
    }

    private static function getReflectionProperties(string $class): array
    {
        if (!isset(self::$reflectionProperties[$class])) {
            $resolvedProperties = [];
            $reflection = new ReflectionClass($class);
            $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);

            if (!isset(self::$reflectionProperties[Field::class])) {
                self::$reflectionProperties[Field::class] = new ReflectionClass(Field::class);
            }
            $fieldReflection = self::$reflectionProperties[Field::class];

            foreach ($properties as $reflectionProperty) {
                $attributes = $reflectionProperty->getAttributes(Field::class);
                switch (count($attributes)) {
                    case 0:
                        break;

                    case 1:
                        // $reflectionProperty->setAccessible(true);
                        // $field = $attributes[0]->newInstance();
                        // TODO: ->newInstance() not working
                        $field = $fieldReflection->newInstanceArgs($attributes[0]->getArguments());
                        if (array_key_exists($field->getNumber(), $resolvedProperties)) {
                            throw new Exception("field definition number '{$field->getNumber()}' is already in use for type {$class}");
                        }

                        $resolvedProperties[$field->getNumber()] = [
                            'reflectionProperty' => $reflectionProperty,
                            'field' => $field
                        ];
                        break;

                    default:
                        throw new Exception(sprintf(
                            'only one Field-Attribute is allowed for %s->%s',
                            $reflectionProperty->getDeclaringClass(),
                            $reflectionProperty->getName()
                        ));
                }
            }

            self::$reflectionProperties[$class] = $resolvedProperties;
        }

        return self::$reflectionProperties[$class];
    }
}
