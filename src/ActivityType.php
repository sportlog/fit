<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace FIT;

interface ActivityType {
    const Generic = 0;
    const Running = 1;
    const Cycling = 2;
    const Transition = 3;
    const FitnessEquipment = 4;
    const Swimming = 5;
    const Walking = 6;
    const Sedentary = 8;
    const All = 254; // 0xFE
    const Invalid = 255; // 0xFF
}