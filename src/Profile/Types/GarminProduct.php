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

class GarminProduct
{
    public const Hrm1 = 1;

    /**
     * AXH01 HRM chipset
     */
    public const Axh01 = 2;
    public const Axb01 = 3;
    public const Axb02 = 4;
    public const Hrm2ss = 5;
    public const DsiAlf02 = 6;
    public const Hrm3ss = 7;

    /**
     * hrm_run model for HRM ANT+ messaging
     */
    public const HrmRunSingleByteProductId = 8;

    /**
     * BSM model for ANT+ messaging
     */
    public const Bsm = 9;

    /**
     * BCM model for ANT+ messaging
     */
    public const Bcm = 10;

    /**
     * AXS01 HRM Bike Chipset model for ANT+ messaging
     */
    public const Axs01 = 11;

    /**
     * hrm_tri model for HRM ANT+ messaging
     */
    public const HrmTriSingleByteProductId = 12;

    /**
     * hrm4 run model for HRM ANT+ messaging
     */
    public const Hrm4RunSingleByteProductId = 13;

    /**
     * fr225 model for HRM ANT+ messaging
     */
    public const Fr225SingleByteProductId = 14;

    /**
     * gen3_bsm model for Bike Speed ANT+ messaging
     */
    public const Gen3BsmSingleByteProductId = 15;

    /**
     * gen3_bcm model for Bike Cadence ANT+ messaging
     */
    public const Gen3BcmSingleByteProductId = 16;

    /**
     * Garmin Wearable Optical Heart Rate Sensor for ANT+ HR Profile Broadcasting
     */
    public const OHR = 255;
    public const Fr301China = 473;
    public const Fr301Japan = 474;
    public const Fr301Korea = 475;
    public const Fr301Taiwan = 494;

    /**
     * Forerunner 405
     */
    public const Fr405 = 717;

    /**
     * Forerunner 50
     */
    public const Fr50 = 782;
    public const Fr405Japan = 987;

    /**
     * Forerunner 60
     */
    public const Fr60 = 988;
    public const DsiAlf01 = 1011;

    /**
     * Forerunner 310
     */
    public const Fr310xt = 1018;
    public const Edge500 = 1036;

    /**
     * Forerunner 110
     */
    public const Fr110 = 1124;
    public const Edge800 = 1169;
    public const Edge500Taiwan = 1199;
    public const Edge500Japan = 1213;
    public const Chirp = 1253;
    public const Fr110Japan = 1274;
    public const Edge200 = 1325;
    public const Fr910xt = 1328;
    public const Edge800Taiwan = 1333;
    public const Edge800Japan = 1334;
    public const Alf04 = 1341;
    public const Fr610 = 1345;
    public const Fr210Japan = 1360;
    public const VectorSs = 1380;
    public const VectorCp = 1381;
    public const Edge800China = 1386;
    public const Edge500China = 1387;
    public const ApproachG10 = 1405;
    public const Fr610Japan = 1410;
    public const Edge500Korea = 1422;
    public const Fr70 = 1436;
    public const Fr310xt4t = 1446;
    public const Amx = 1461;
    public const Fr10 = 1482;
    public const Edge800Korea = 1497;
    public const Swim = 1499;
    public const Fr910xtChina = 1537;
    public const Fenix = 1551;
    public const Edge200Taiwan = 1555;
    public const Edge510 = 1561;
    public const Edge810 = 1567;
    public const Tempe = 1570;
    public const Fr910xtJapan = 1600;
    public const Fr620 = 1623;
    public const Fr220 = 1632;
    public const Fr910xtKorea = 1664;
    public const Fr10Japan = 1688;
    public const Edge810Japan = 1721;
    public const VirbElite = 1735;

    /**
     * Also Edge Touring Plus
     */
    public const EdgeTouring = 1736;
    public const Edge510Japan = 1742;

    /**
     * Also HRM-Swim
     */
    public const HrmTri = 1743;
    public const HrmRun = 1752;
    public const Fr920xt = 1765;
    public const Edge510Asia = 1821;
    public const Edge810China = 1822;
    public const Edge810Taiwan = 1823;
    public const Edge1000 = 1836;
    public const VivoFit = 1837;
    public const VirbRemote = 1853;
    public const VivoKi = 1885;
    public const Fr15 = 1903;
    public const VivoActive = 1907;
    public const Edge510Korea = 1918;
    public const Fr620Japan = 1928;
    public const Fr620China = 1929;
    public const Fr220Japan = 1930;
    public const Fr220China = 1931;
    public const ApproachS6 = 1936;
    public const VivoSmart = 1956;
    public const Fenix2 = 1967;
    public const Epix = 1988;
    public const Fenix3 = 2050;
    public const Edge1000Taiwan = 2052;
    public const Edge1000Japan = 2053;
    public const Fr15Japan = 2061;
    public const Edge520 = 2067;
    public const Edge1000China = 2070;
    public const Fr620Russia = 2072;
    public const Fr220Russia = 2073;
    public const VectorS = 2079;
    public const Edge1000Korea = 2100;
    public const Fr920xtTaiwan = 2130;
    public const Fr920xtChina = 2131;
    public const Fr920xtJapan = 2132;
    public const Virbx = 2134;
    public const VivoSmartApac = 2135;
    public const EtrexTouch = 2140;
    public const Edge25 = 2147;
    public const Fr25 = 2148;
    public const VivoFit2 = 2150;
    public const Fr225 = 2153;
    public const Fr630 = 2156;
    public const Fr230 = 2157;
    public const Fr735xt = 2158;
    public const VivoActiveApac = 2160;
    public const Vector2 = 2161;
    public const Vector2s = 2162;
    public const Virbxe = 2172;
    public const Fr620Taiwan = 2173;
    public const Fr220Taiwan = 2174;
    public const Truswing = 2175;
    public const D2airvenu = 2187;
    public const Fenix3China = 2188;
    public const Fenix3Twn = 2189;
    public const VariaHeadlight = 2192;
    public const VariaTaillightOld = 2193;
    public const EdgeExplore1000 = 2204;
    public const Fr225Asia = 2219;
    public const VariaRadarTaillight = 2225;
    public const VariaRadarDisplay = 2226;
    public const Edge20 = 2238;
    public const Edge520Asia = 2260;
    public const Edge520Japan = 2261;
    public const D2Bravo = 2262;
    public const ApproachS20 = 2266;
    public const VivoSmart2 = 2271;
    public const Edge1000Thai = 2274;
    public const VariaRemote = 2276;
    public const Edge25Asia = 2288;
    public const Edge25Jpn = 2289;
    public const Edge20Asia = 2290;
    public const ApproachX40 = 2292;
    public const Fenix3Japan = 2293;
    public const VivoSmartEmea = 2294;
    public const Fr630Asia = 2310;
    public const Fr630Jpn = 2311;
    public const Fr230Jpn = 2313;
    public const Hrm4Run = 2327;
    public const EpixJapan = 2332;
    public const VivoActiveHr = 2337;
    public const VivoSmartGpsHr = 2347;
    public const VivoSmartHr = 2348;
    public const VivoSmartHrAsia = 2361;
    public const VivoSmartGpsHrAsia = 2362;
    public const VivoMove = 2368;
    public const VariaTaillight = 2379;
    public const Fr235Asia = 2396;
    public const Fr235Japan = 2397;
    public const VariaVision = 2398;
    public const VivoFit3 = 2406;
    public const Fenix3Korea = 2407;
    public const Fenix3Sea = 2408;
    public const Fenix3Hr = 2413;
    public const VirbUltra30 = 2417;
    public const IndexSmartScale = 2429;
    public const Fr235 = 2431;
    public const Fenix3Chronos = 2432;
    public const Oregon7xx = 2441;
    public const Rino7xx = 2444;
    public const EpixKorea = 2457;
    public const Fenix3HrChn = 2473;
    public const Fenix3HrTwn = 2474;
    public const Fenix3HrJpn = 2475;
    public const Fenix3HrSea = 2476;
    public const Fenix3HrKor = 2477;
    public const Nautix = 2496;
    public const VivoActiveHrApac = 2497;
    public const Fr35 = 2503;
    public const Oregon7xxWw = 2512;
    public const Edge820 = 2530;
    public const EdgeExplore820 = 2531;
    public const Fr735xtApac = 2533;
    public const Fr735xtJapan = 2534;
    public const Fenix5s = 2544;
    public const D2BravoTitanium = 2547;

    /**
     * Varia UT 800 SW
     */
    public const VariaUt800 = 2567;
    public const RunningDynamicsPod = 2593;
    public const Edge820China = 2599;
    public const Edge820Japan = 2600;
    public const Fenix5x = 2604;
    public const VivoFitJr = 2606;
    public const VivoSmart3 = 2622;
    public const VivoSport = 2623;
    public const Edge820Taiwan = 2628;
    public const Edge820Korea = 2629;
    public const Edge820Sea = 2630;
    public const Fr35Hebrew = 2650;
    public const ApproachS60 = 2656;
    public const Fr35Apac = 2667;
    public const Fr35Japan = 2668;
    public const Fenix3ChronosAsia = 2675;
    public const Virb360 = 2687;
    public const Fr935 = 2691;
    public const Fenix5 = 2697;
    public const Vivoactive3 = 2700;
    public const Fr235ChinaNfc = 2733;
    public const Foretrex601701 = 2769;
    public const VivoMoveHr = 2772;
    public const Edge1030 = 2713;
    public const Fr35Sea = 2727;
    public const Vector3 = 2787;
    public const Fenix5Asia = 2796;
    public const Fenix5sAsia = 2797;
    public const Fenix5xAsia = 2798;
    public const ApproachZ80 = 2806;
    public const Fr35Korea = 2814;
    public const D2charlie = 2819;
    public const VivoSmart3Apac = 2831;
    public const VivoSportApac = 2832;
    public const Fr935Asia = 2833;
    public const Descent = 2859;
    public const VivoFit4 = 2878;
    public const Fr645 = 2886;
    public const Fr645m = 2888;
    public const Fr30 = 2891;
    public const Fenix5sPlus = 2900;
    public const Edge130 = 2909;
    public const Edge1030Asia = 2924;
    public const Vivosmart4 = 2927;
    public const VivoMoveHrAsia = 2945;
    public const ApproachX10 = 2962;
    public const Fr30Asia = 2977;
    public const Vivoactive3mW = 2988;
    public const Fr645Asia = 3003;
    public const Fr645mAsia = 3004;
    public const EdgeExplore = 3011;
    public const Gpsmap66 = 3028;
    public const ApproachS10 = 3049;
    public const Vivoactive3mL = 3066;
    public const ApproachG80 = 3085;
    public const Edge130Asia = 3092;
    public const Edge1030Bontrager = 3095;
    public const Fenix5Plus = 3110;
    public const Fenix5xPlus = 3111;
    public const Edge520Plus = 3112;
    public const Fr945 = 3113;
    public const Edge530 = 3121;
    public const Edge830 = 3122;
    public const InstinctEsports = 3126;
    public const Fenix5sPlusApac = 3134;
    public const Fenix5xPlusApac = 3135;
    public const Edge520PlusApac = 3142;
    public const DescentT1 = 3143;
    public const Fr235lAsia = 3144;
    public const Fr245Asia = 3145;
    public const VivoActive3mApac = 3163;

    /**
     * gen3 bike speed sensor
     */
    public const Gen3Bsm = 3192;

    /**
     * gen3 bike cadence sensor
     */
    public const Gen3Bcm = 3193;
    public const VivoSmart4Asia = 3218;
    public const Vivoactive4Small = 3224;
    public const Vivoactive4Large = 3225;
    public const Venu = 3226;
    public const MarqDriver = 3246;
    public const MarqAviator = 3247;
    public const MarqCaptain = 3248;
    public const MarqCommander = 3249;
    public const MarqExpedition = 3250;
    public const MarqAthlete = 3251;
    public const DescentMk2 = 3258;
    public const Gpsmap66i = 3284;
    public const Fenix6SSport = 3287;
    public const Fenix6S = 3288;
    public const Fenix6Sport = 3289;
    public const Fenix6 = 3290;
    public const Fenix6x = 3291;

    /**
     * HRM-Dual
     */
    public const HrmDual = 3299;

    /**
     * HRM-Pro
     */
    public const HrmPro = 3300;
    public const VivoMove3Premium = 3308;
    public const ApproachS40 = 3314;
    public const Fr245mAsia = 3321;
    public const Edge530Apac = 3349;
    public const Edge830Apac = 3350;
    public const VivoMove3 = 3378;
    public const VivoActive4SmallAsia = 3387;
    public const VivoActive4LargeAsia = 3388;
    public const VivoActive4OledAsia = 3389;
    public const Swim2 = 3405;
    public const MarqDriverAsia = 3420;
    public const MarqAviatorAsia = 3421;
    public const VivoMove3Asia = 3422;
    public const Fr945Asia = 3441;
    public const VivoActive3tChn = 3446;
    public const MarqCaptainAsia = 3448;
    public const MarqCommanderAsia = 3449;
    public const MarqExpeditionAsia = 3450;
    public const MarqAthleteAsia = 3451;
    public const InstinctSolar = 3466;
    public const Fr45Asia = 3469;
    public const Vivoactive3Daimler = 3473;
    public const LegacyRey = 3498;
    public const LegacyDarthVader = 3499;
    public const LegacyCaptainMarvel = 3500;
    public const LegacyFirstAvenger = 3501;
    public const Fenix6sSportAsia = 3512;
    public const Fenix6sAsia = 3513;
    public const Fenix6SportAsia = 3514;
    public const Fenix6Asia = 3515;
    public const Fenix6xAsia = 3516;
    public const LegacyCaptainMarvelAsia = 3535;
    public const LegacyFirstAvengerAsia = 3536;
    public const LegacyReyAsia = 3537;
    public const LegacyDarthVaderAsia = 3538;
    public const DescentMk2s = 3542;
    public const Edge130Plus = 3558;
    public const Edge1030Plus = 3570;

    /**
     * Rally 100/200 Power Meter Series
     */
    public const Rally200 = 3578;
    public const Fr745 = 3589;
    public const Venusq = 3600;
    public const Lily = 3615;
    public const MarqAdventurer = 3624;
    public const Enduro = 3638;
    public const Swim2Apac = 3639;
    public const MarqAdventurerAsia = 3648;
    public const Fr945Lte = 3652;

    /**
     * Mk2 and Mk2i
     */
    public const DescentMk2Asia = 3702;
    public const Venu2 = 3703;
    public const Venu2s = 3704;
    public const VenuDaimlerAsia = 3737;
    public const MarqGolfer = 3739;
    public const VenuDaimler = 3740;
    public const Fr745Asia = 3794;
    public const LilyAsia = 3809;
    public const Edge1030PlusAsia = 3812;
    public const Edge130PlusAsia = 3813;
    public const ApproachS12 = 3823;
    public const EnduroAsia = 3872;
    public const VenusqAsia = 3837;
    public const Edge1040 = 3843;
    public const MarqGolferAsia = 3850;
    public const Venu2Plus = 3851;
    public const Gnss = 3865;
    public const Fr55 = 3869;
    public const Instinct2 = 3888;
    public const Fenix7s = 3905;
    public const Fenix7 = 3906;
    public const Fenix7x = 3907;
    public const Fenix7sApac = 3908;
    public const Fenix7Apac = 3909;
    public const Fenix7xApac = 3910;
    public const ApproachG12 = 3927;
    public const DescentMk2sAsia = 3930;
    public const ApproachS42 = 3934;
    public const EpixGen2 = 3943;
    public const EpixGen2Apac = 3944;
    public const Venu2sAsia = 3949;
    public const Venu2Asia = 3950;
    public const Fr945LteAsia = 3978;
    public const VivoMoveSport = 3982;
    public const VivomoveTrend = 3983;
    public const ApproachS12Asia = 3986;
    public const Fr255Music = 3990;
    public const Fr255SmallMusic = 3991;
    public const Fr255 = 3992;
    public const Fr255Small = 3993;
    public const ApproachG12Asia = 4001;
    public const ApproachS42Asia = 4002;
    public const DescentG1 = 4005;
    public const Venu2PlusAsia = 4017;
    public const Fr955 = 4024;
    public const Fr55Asia = 4033;
    public const Edge540 = 4061;
    public const Edge840 = 4062;
    public const Vivosmart5 = 4063;
    public const Instinct2Asia = 4071;

    /** "Adventurer */
    public const MarqGen2 = 4105;
    public const Venusq2 = 4115;
    public const Venusq2music = 4116;
    public const MarqGen2Aviator = 4124;
    public const D2AirX10 = 4125;
    public const HrmProPlus = 4130;
    public const DescentG1Asia = 4132;
    public const Tactix7 = 4135;
    public const InstinctCrossover = 4155;
    public const EdgeExplore2 = 4169;
    public const ApproachS70 = 4233;
    public const Fr265Large = 4257;
    public const Fr265Small = 4258;

    /** "Neo Smart */
    public const TacxNeoSmart = 4265;

    /** "Neo 2 Smart */
    public const TacxNeo2Smart = 4266;

    /** "Neo 2T Smart */
    public const TacxNeo2TSmart = 4267;

    /** "Neo Smart Bike */
    public const TacxNeoSmartBike = 4268;

    /** "Satori Smart */
    public const TacxSatoriSmart = 4269;

    /** "Flow Smart */
    public const TacxFlowSmart = 4270;

    /** "Vortex Smart */
    public const TacxVortexSmart = 4271;

    /** "Bushido Smart */
    public const TacxBushidoSmart = 4272;

    /** "Genius Smart */
    public const TacxGeniusSmart = 4273;

    /** "Flux/Flux S Smart */
    public const TacxFluxFluxSSmart = 4274;

    /** "Flux 2 Smart */
    public const TacxFlux2Smart = 4275;

    /** "Magnum */
    public const TacxMagnum = 4276;
    public const Edge1040Asia = 4305;
    public const EpixGen2Pro42 = 4312;
    public const EpixGen2Pro47 = 4313;
    public const EpixGen2Pro51 = 4314;
    public const Fr965 = 4315;
    public const Enduro2 = 4341;
    public const Fenix7ProSolar = 4375;
    public const Instinct2x = 4394;
    public const DescentT2 = 4442;

    /**
     * SDM4 footpod
     */
    public const Sdm4 = 10007;
    public const EdgeRemote = 10014;
    public const TacxTrainingAppWin = 20533;
    public const TacxTrainingAppMac = 20534;
    public const TacxTrainingAppMacCatalyst = 20565;
    public const TrainingCenter = 20119;
    public const TacxTrainingAppAndroid = 30045;
    public const TacxTrainingAppIos = 30046;
    public const TacxTrainingAppLegacy = 30047;
    public const ConnectiqSimulator = 65531;
    public const AndroidAntplusPlugin = 65532;

    /**
     * Garmin Connect website
     */
    public const Connect = 65534;
}
