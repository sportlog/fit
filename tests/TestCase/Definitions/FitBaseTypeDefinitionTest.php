<?php

declare(strict_types=1);

/**
 * Sportlog (https://sportlog.at)
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Test\TestCase\Decoder;

use Sportlog\FIT\FitBaseType;
use PHPUnit\Framework\TestCase;
use Sportlog\FIT\FitBaseTypeDefinition;

/**
 * FieldTest
 */
final class FitBaseTypeDefinitionTest extends TestCase
{
    public function testMatchDefinitionBySizeReturnsUint8(): void
    {
        $fitBaseType = FitBaseTypeDefinition::fromType(FitBaseType::UINT32);
        $typeFromSize = FitBaseTypeDefinition::matchBySize($fitBaseType, 1);
        $this->assertNotNull($typeFromSize);
        $this->assertEquals(FitBaseType::UINT8, $typeFromSize->getType());
    }

    public function testMatchDefinitionBySizeReturnsNullForUnmatched(): void
    {
        $fitBaseType = FitBaseTypeDefinition::fromType(FitBaseType::UINT32);
        $typeFromSize = FitBaseTypeDefinition::matchBySize($fitBaseType, 3);
        $this->assertNull($typeFromSize);
    }

    public function testMatchFamily(): void
    {
        $uint = [FitBaseType::UINT8, FitBaseType::UINT16, FitBaseType::UINT32, FitBaseType::UINT64];
        foreach ($uint as $value) {
            $fitBaseType = FitBaseTypeDefinition::fromType($value);
            $this->assertEquals('uint', $fitBaseType->getFamily());
        }
    }
}
