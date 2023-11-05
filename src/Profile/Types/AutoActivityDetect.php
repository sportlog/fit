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

enum AutoActivityDetect: int
{
    case None = 0;
    case Running = 1;
    case Cycling = 2;
    case Swimming = 4;
    case Walking = 8;
    case Elliptical = 32;
    case Sedentary = 1024;
}
