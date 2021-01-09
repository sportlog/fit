<?php
declare (strict_types = 1);

/**
 * Sportlog (https://sportlog.at)
 *
 * @license MIT License
 */

namespace FIT\Test\TestCase\Decoder;

use FIT\FitBaseType;
use PHPUnit\Framework\TestCase;

/**
 * FitBaseTypeDefinitionTest
 */
final class FitBaseTypeDefinitionTest extends TestCase {
    public function testIfUint32TypeIsNumeric(): void {
        $type = FitBaseType::fromType(FitBaseType::UINT32);
        $this->assertTrue($type->isNumeric());
    }

    public function testIfStringTypeIsNonNumeric(): void {
        $type = FitBaseType::fromType(FitBaseType::STRING);
        $this->assertFalse($type->isNumeric());
    }
}