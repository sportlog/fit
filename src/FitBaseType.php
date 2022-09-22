<?php

declare(strict_types=1);

/**
 * FIT decoder
 *
 * @license MIT License
 */

namespace Sportlog\FIT;

/**
 * Available FIT base types.
 * Defined according to FIT protocol documentation.
 * Table 7. FIT Base Types and Invalid Values
 */
class FitBaseType
{
    const ENUM = 0;
    const SINT8 = 1;
    const UINT8 = 2;
    const SINT16 = 131;
    const UINT16 = 132;
    const SINT32 = 133;
    const UINT32 = 134;
    const STRING = 7;
    const FLOAT32 = 136;
    const FLOAT64 = 137;
    const UINT8Z = 10;
    const UINT16Z = 139;
    const UINT32Z = 140;
    const BYTE = 13;
    const SINT64 = 142;
    const UINT64 = 143;
    const UINT64Z = 144;
    const Invalid = 255;
}
