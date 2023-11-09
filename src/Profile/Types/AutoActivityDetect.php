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

class AutoActivityDetect
{
    public const None = 0;
    public const Running = 1;
    public const Cycling = 2;
    public const Swimming = 4;
    public const Walking = 8;
    public const Elliptical = 32;
    public const Sedentary = 1024;
}
