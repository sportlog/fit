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

enum AntplusDeviceType: int
{
    case Antfs = 1;
    case BikePower = 11;
    case EnvironmentSensorLegacy = 12;
    case MultiSportSpeedDistance = 15;
    case Control = 16;
    case FitnessEquipment = 17;
    case BloodPressure = 18;
    case GeocacheNode = 19;
    case LightElectricVehicle = 20;
    case EnvSensor = 25;
    case Racquet = 26;
    case ControlHub = 27;
    case MuscleOxygen = 31;
    case Shifting = 34;
    case BikeLightMain = 35;
    case BikeLightShared = 36;
    case Exd = 38;
    case BikeRadar = 40;
    case BikeAero = 46;
    case WeightScale = 119;
    case HeartRate = 120;
    case BikeSpeedCadence = 121;
    case BikeCadence = 122;
    case BikeSpeed = 123;
    case StrideSpeedDistance = 124;
}
