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

namespace Sportlog\FIT\Profile\Types;

/**
 * Manufacturer constants
 */
final class Manufacturer
{
    const GARMIN = 1;
    const GARMIN_FR405_ANTFS = 2;
    const ZEPHYR = 3;
    const DAYTON = 4;
    const IDT = 5;
    const SRM = 6;
    const QUARQ = 7;
    const IBIKE = 8;
    const SARIS = 9;
    const SPARK_HK = 10;
    const TANITA = 11;
    const ECHOWELL = 12;
    const DYNASTREAM_OEM = 13;
    const NAUTILUS = 14;
    const DYNASTREAM = 15;
    const TIMEX = 16;
    const METRIGEAR = 17;
    const XELIC = 18;
    const BEURER = 19;
    const CARDIOSPORT = 20;
    const A_AND_D = 21;
    const HMM = 22;
    const SUUNTO = 23;
    const THITA_ELEKTRONIK = 24;
    const GPULSE = 25;
    const CLEAN_MOBILE = 26;
    const PEDAL_BRAIN = 27;
    const PEAKSWARE = 28;
    const SAXONAR = 29;
    const LEMOND_FITNESS = 30;
    const DEXCOM = 31;
    const WAHOO_FITNESS = 32;
    const OCTANE_FITNESS = 33;
    const ARCHINOETICS = 34;
    const THE_HURT_BOX = 35;
    const CITIZEN_SYSTEMS = 36;
    const MAGELLAN = 37;
    const OSYNCE = 38;
    const HOLUX = 39;
    const CONCEPT2 = 40;
    const ONE_GIANT_LEAP = 42;
    const ACE_SENSOR = 43;
    const BRIM_BROTHERS = 44;
    const XPLOVA = 45;
    const PERCEPTION_DIGITAL = 46;
    const BF1SYSTEMS = 47;
    const PIONEER = 48;
    const SPANTEC = 49;
    const METALOGICS = 50;
    const _4IIIIS = 51;
    const SEIKO_EPSON = 52;
    const SEIKO_EPSON_OEM = 53;
    const IFOR_POWELL = 54;
    const MAXWELL_GUIDER = 55;
    const STAR_TRAC = 56;
    const BREAKAWAY = 57;
    const ALATECH_TECHNOLOGY_LTD = 58;
    const MIO_TECHNOLOGY_EUROPE = 59;
    const ROTOR = 60;
    const GEONAUTE = 61;
    const ID_BIKE = 62;
    const SPECIALIZED = 63;
    const WTEK = 64;
    const PHYSICAL_ENTERPRISES = 65;
    const NORTH_POLE_ENGINEERING = 66;
    const BKOOL = 67;
    const CATEYE = 68;
    const STAGES_CYCLING = 69;
    const SIGMASPORT = 70;
    const TOMTOM = 71;
    const PERIPEDAL = 72;
    const WATTBIKE = 73;
    const MOXY = 76;
    const CICLOSPORT = 77;
    const POWERBAHN = 78;
    const ACORN_PROJECTS_APS = 79;
    const LIFEBEAM = 80;
    const BONTRAGER = 81;
    const WELLGO = 82;
    const SCOSCHE = 83;
    const MAGURA = 84;
    const WOODWAY = 85;
    const ELITE = 86;
    const NIELSEN_KELLERMAN = 87;
    const DK_CITY = 88;
    const TACX = 89;
    const DIRECTION_TECHNOLOGY = 90;
    const MAGTONIC = 91;
    const _1PARTCARBON = 92;
    const INSIDE_RIDE_TECHNOLOGIES = 93;
    const SOUND_OF_MOTION = 94;
    const STRYD = 95;
    const ICG = 96;
    const MIPULSE = 97;
    const BSX_ATHLETICS = 98;
    const LOOK = 99;
    const CAMPAGNOLO_SRL = 100;
    const BODY_BIKE_SMART = 101;
    const PRAXISWORKS = 102;
    const LIMITS_TECHNOLOGY = 103;
    const TOPACTION_TECHNOLOGY = 104;
    const COSINUSS = 105;
    const FITCARE = 106;
    const MAGENE = 107;
    const GIANT_MANUFACTURING_CO = 108;
    const TIGRASPORT = 109;
    const SALUTRON = 110;
    const TECHNOGYM = 111;
    const BRYTON_SENSORS = 112;
    const LATITUDE_LIMITED = 113;
    const SOARING_TECHNOLOGY = 114;
    const IGPSPORT = 115;
    const THINKRIDER = 116;
    const GOPHER_SPORT = 117;
    const WATERROWER = 118;
    const ORANGETHEORY = 119;
    const INPEAK = 120;
    const KINETIC = 121;
    const JOHNSON_HEALTH_TECH = 122;
    const POLAR_ELECTRO = 123;
    const SEESENSE = 124;
    const NCI_TECHNOLOGY = 125;
    const IQSQUARE = 126;
    const LEOMO = 127;
    const IFIT_COM = 128;
    const COROS_BYTE = 129;
    const VERSA_DESIGN = 130;
    const CHILEAF = 131;
    const CYCPLUS = 132;
    const GRAVAA_BYTE = 133;
    const SIGEYI = 134;
    const DEVELOPMENT = 255;
    const HEALTHANDLIFE = 257;
    const LEZYNE = 258;
    const SCRIBE_LABS = 259;
    const ZWIFT = 260;
    const WATTEAM = 261;
    const RECON = 262;
    const FAVERO_ELECTRONICS = 263;
    const DYNOVELO = 264;
    const STRAVA = 265;
    const PRECOR = 266;
    const BRYTON = 267;
    const SRAM = 268;
    const NAVMAN = 269;
    const COBI = 270;
    const SPIVI = 271;
    const MIO_MAGELLAN = 272;
    const EVESPORTS = 273;
    const SENSITIVUS_GAUGE = 274;
    const PODOON = 275;
    const LIFE_TIME_FITNESS = 276;
    const FALCO_E_MOTORS = 277;
    const MINOURA = 278;
    const CYCLIQ = 279;
    const LUXOTTICA = 280;
    const TRAINER_ROAD = 281;
    const THE_SUFFERFEST = 282;
    const FULLSPEEDAHEAD = 283;
    const VIRTUALTRAINING = 284;
    const FEEDBACKSPORTS = 285;
    const OMATA = 286;
    const VDO = 287;
    const MAGNETICDAYS = 288;
    const HAMMERHEAD = 289;
    const KINETIC_BY_KURT = 290;
    const SHAPELOG = 291;
    const DABUZIDUO = 292;
    const JETBLACK = 293;
    const COROS = 294;
    const VIRTUGO = 295;
    const VELOSENSE = 296;
    const CYCLIGENTINC = 297;
    const TRAILFORKS = 298;
    const MAHLE_EBIKEMOTION = 299;
    const NURVV = 300;
    const MICROPROGRAM = 301;
    const ZONE5CLOUD = 302;
    const GREENTEG = 303;
    const YAMAHA_MOTORS = 304;
    const WHOOP = 305;
    const GRAVAA = 306;
    const ONELAP = 307;
    const MONARK_EXERCISE = 308;
    const FORM = 309;
    const DECATHLON = 310;
    const ACTIGRAPHCORP = 5759;
}