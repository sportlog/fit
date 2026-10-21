<?php

declare(strict_types=1);

/**
 * Sportlog (https://sportlog.at)
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Test\TestCase\Definitions;

use PHPUnit\Framework\TestCase;
use Sportlog\FIT\FitBaseType;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Profile\Messages\RecordMessage;
use Sportlog\FIT\Profile\ProfileType;

/**
 * MessageTest
 */
final class MessageTest extends TestCase
{
    private const MESSAGES = 1000;

    public function testAddingADeveloperFieldDoesNotCopyTheSharedFieldTable(): void
    {
        // A developer field as the decoder adds it to every record that carries it
        $field = new Field('doughnuts_earned', crc32('doughnuts_earned'), FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::BYTE);
        new RecordMessage(); // load the class's field table before measuring

        $before = memory_get_usage();
        $messages = [];
        for ($i = 0; $i < self::MESSAGES; $i++) {
            $message = new RecordMessage();
            $message->addField($field);
            $messages[] = $message;
        }
        $bytesPerMessage = (memory_get_usage() - $before) / self::MESSAGES;

        // Copying RecordMessage's 84 field table costs over 8KB per message
        $this->assertLessThan(1024, $bytesPerMessage);
    }

    public function testADeveloperFieldTakesPrecedenceOverTheNativeFieldWithItsNumber(): void
    {
        $field = new Field('Heart Rate', 3, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8);
        $message = new RecordMessage();
        $message->setFieldValue(3, 120);
        $message->addField($field);

        $this->assertSame($field, $message->getField(3));
        $this->assertNull($message->getFieldValue(3), 'the native value is dropped when the field is redefined');
    }

    public function testADeveloperFieldIsOnlyAddedToItsOwnMessage(): void
    {
        $message = new RecordMessage();
        $message->addField(new Field('Heart Rate', 3, FitBaseType::UINT8, 1.0, 0.0, 'bpm', false, ProfileType::UINT8));
        $message->addField(new Field('doughnuts_earned', 4242, FitBaseType::UINT32, 1.0, 0.0, '', false, ProfileType::BYTE));

        $other = new RecordMessage();
        $this->assertSame('HeartRate', $other->getField(3)?->getName());
        $this->assertNull($other->getField(4242));
    }
}
