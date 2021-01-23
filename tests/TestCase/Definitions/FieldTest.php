<?php
declare (strict_types = 1);

/**
 * Sportlog (https://sportlog.at)
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Test\TestCase\Decoder;

use Sportlog\FIT\FitBaseType;
use PHPUnit\Framework\TestCase;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\ProfileType;

/**
 * FieldTest
 */
final class FieldTest extends TestCase {
    public function testIfUint32TypeIsNumeric(): void {
        $field = new Field('my_field', 1, FitBaseType::SINT16, 1.0, 0.0, '', true, ProfileType::SINT16);
        $this->assertTrue($field->isNumeric());
    }

    public function testIfStringTypeIsNonNumeric(): void {
        $field = new Field('my_field', 1, FitBaseType::STRING, 1.0, 0.0, '', true, ProfileType::STRING);
        $this->assertFalse($field->isNumeric());
    }
}