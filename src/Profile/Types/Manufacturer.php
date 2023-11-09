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

class Manufacturer
{
    public const Garmin = 1;

    /**
     * Do not use. Used by FR405 for ANTFS man id.
     */
    public const GarminFr405Antfs = 2;
    public const Zephyr = 3;
    public const Dayton = 4;
    public const Idt = 5;
    public const Srm = 6;
    public const Quarq = 7;
    public const Ibike = 8;
    public const Saris = 9;
    public const SparkHk = 10;
    public const Tanita = 11;
    public const Echowell = 12;
    public const DynastreamOem = 13;
    public const Nautilus = 14;
    public const Dynastream = 15;
    public const Timex = 16;
    public const Metrigear = 17;
    public const Xelic = 18;
    public const Beurer = 19;
    public const Cardiosport = 20;
    public const AAndD = 21;
    public const Hmm = 22;
    public const Suunto = 23;
    public const ThitaElektronik = 24;
    public const Gpulse = 25;
    public const CleanMobile = 26;
    public const PedalBrain = 27;
    public const Peaksware = 28;
    public const Saxonar = 29;
    public const LemondFitness = 30;
    public const Dexcom = 31;
    public const WahooFitness = 32;
    public const OctaneFitness = 33;
    public const Archinoetics = 34;
    public const TheHurtBox = 35;
    public const CitizenSystems = 36;
    public const Magellan = 37;
    public const Osynce = 38;
    public const Holux = 39;
    public const Concept2 = 40;
    public const Shimano = 41;
    public const OneGiantLeap = 42;
    public const AceSensor = 43;
    public const BrimBrothers = 44;
    public const Xplova = 45;
    public const PerceptionDigital = 46;
    public const Bf1systems = 47;
    public const Pioneer = 48;
    public const Spantec = 49;
    public const Metalogics = 50;
    public const _4iiiis = 51;
    public const SeikoEpson = 52;
    public const SeikoEpsonOem = 53;
    public const IforPowell = 54;
    public const MaxwellGuider = 55;
    public const StarTrac = 56;
    public const Breakaway = 57;
    public const AlatechTechnologyLtd = 58;
    public const MioTechnologyEurope = 59;
    public const Rotor = 60;
    public const Geonaute = 61;
    public const IdBike = 62;
    public const Specialized = 63;
    public const Wtek = 64;
    public const PhysicalEnterprises = 65;
    public const NorthPoleEngineering = 66;
    public const Bkool = 67;
    public const Cateye = 68;
    public const StagesCycling = 69;
    public const Sigmasport = 70;
    public const Tomtom = 71;
    public const Peripedal = 72;
    public const Wattbike = 73;
    public const Moxy = 76;
    public const Ciclosport = 77;
    public const Powerbahn = 78;
    public const AcornProjectsAps = 79;
    public const Lifebeam = 80;
    public const Bontrager = 81;
    public const Wellgo = 82;
    public const Scosche = 83;
    public const Magura = 84;
    public const Woodway = 85;
    public const Elite = 86;
    public const NielsenKellerman = 87;
    public const DkCity = 88;
    public const Tacx = 89;
    public const DirectionTechnology = 90;
    public const Magtonic = 91;
    public const _1partcarbon = 92;
    public const InsideRideTechnologies = 93;
    public const SoundOfMotion = 94;
    public const Stryd = 95;

    /**
     * Indoorcycling Group
     */
    public const Icg = 96;
    public const MiPulse = 97;
    public const BsxAthletics = 98;
    public const Look = 99;
    public const CampagnoloSrl = 100;
    public const BodyBikeSmart = 101;
    public const Praxisworks = 102;

    /**
     * Limits Technology Ltd.
     */
    public const LimitsTechnology = 103;

    /**
     * TopAction Technology Inc.
     */
    public const TopactionTechnology = 104;
    public const Cosinuss = 105;
    public const Fitcare = 106;
    public const Magene = 107;
    public const GiantManufacturingCo = 108;

    /**
     * Tigrasport
     */
    public const Tigrasport = 109;
    public const Salutron = 110;
    public const Technogym = 111;
    public const BrytonSensors = 112;
    public const LatitudeLimited = 113;
    public const SoaringTechnology = 114;
    public const Igpsport = 115;
    public const Thinkrider = 116;
    public const GopherSport = 117;
    public const Waterrower = 118;
    public const Orangetheory = 119;
    public const Inpeak = 120;
    public const Kinetic = 121;
    public const JohnsonHealthTech = 122;
    public const PolarElectro = 123;
    public const Seesense = 124;
    public const NciTechnology = 125;
    public const Iqsquare = 126;
    public const Leomo = 127;
    public const IfitCom = 128;
    public const CorosByte = 129;
    public const VersaDesign = 130;
    public const Chileaf = 131;
    public const Cycplus = 132;
    public const GravaaByte = 133;
    public const Sigeyi = 134;
    public const Coospo = 135;
    public const Geoid = 136;
    public const Bosch = 137;
    public const Kyto = 138;
    public const KineticSports = 139;
    public const DecathlonByte = 140;
    public const TqSystems = 141;
    public const TagHeuer = 142;
    public const KeiserFitness = 143;
    public const ZwiftByte = 144;
    public const PorscheEp = 145;
    public const Blackbird = 146;
    public const MeilanByte = 147;
    public const Ezon = 148;
    public const Development = 255;
    public const Healthandlife = 257;
    public const Lezyne = 258;
    public const ScribeLabs = 259;
    public const Zwift = 260;
    public const Watteam = 261;
    public const Recon = 262;
    public const FaveroElectronics = 263;
    public const Dynovelo = 264;
    public const Strava = 265;

    /**
     * Amer Sports
     */
    public const Precor = 266;
    public const Bryton = 267;
    public const Sram = 268;

    /**
     * MiTAC Global Corporation (Mio Technology)
     */
    public const Navman = 269;

    /**
     * COBI GmbH
     */
    public const Cobi = 270;
    public const Spivi = 271;
    public const MioMagellan = 272;
    public const Evesports = 273;
    public const SensitivusGauge = 274;
    public const Podoon = 275;
    public const LifeTimeFitness = 276;

    /**
     * Falco eMotors Inc.
     */
    public const FalcoEMotors = 277;
    public const Minoura = 278;
    public const Cycliq = 279;
    public const Luxottica = 280;
    public const TrainerRoad = 281;
    public const TheSufferfest = 282;
    public const Fullspeedahead = 283;
    public const Virtualtraining = 284;
    public const Feedbacksports = 285;
    public const Omata = 286;
    public const Vdo = 287;
    public const Magneticdays = 288;
    public const Hammerhead = 289;
    public const KineticByKurt = 290;
    public const Shapelog = 291;
    public const Dabuziduo = 292;
    public const Jetblack = 293;
    public const Coros = 294;
    public const Virtugo = 295;
    public const Velosense = 296;
    public const Cycligentinc = 297;
    public const Trailforks = 298;
    public const MahleEbikemotion = 299;
    public const Nurvv = 300;
    public const Microprogram = 301;
    public const Zone5cloud = 302;
    public const Greenteg = 303;
    public const YamahaMotors = 304;
    public const Whoop = 305;
    public const Gravaa = 306;
    public const Onelap = 307;
    public const MonarkExercise = 308;
    public const Form = 309;
    public const Decathlon = 310;
    public const Syncros = 311;
    public const Heatup = 312;
    public const Cannondale = 313;
    public const TrueFitness = 314;
    public const RGTCycling = 315;
    public const Vasa = 316;
    public const RaceRepublic = 317;
    public const Fazua = 318;
    public const OrekaTraining = 319;

    /**
     * Lishun Electric & Communication
     */
    public const Lsec = 320;
    public const LululemonStudio = 321;
    public const Shanyue = 322;
    public const SpinningMda = 323;
    public const Hilldating = 324;
    public const Actigraphcorp = 5759;
}
