<?php

declare(strict_types=1);

/**
 * Sportlog (https://sportlog.at)
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Test\TestCase\Decoder;

use Sportlog\FIT\Decoder;
use Sportlog\FIT\Profile\Message;
use Sportlog\FIT\Profile\Field;
use Sportlog\FIT\Test\TestCase\FilePath;
use PHPUnit\Framework\TestCase;
use Sportlog\FIT\Profile\MessageList;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * Decodes the file 'DeveloperData.fit'
 * from the FIT SDK (FitSDKRelease_21.40.00)
 */
final class DecodeDeveloperDataTest extends TestCase
{
    public function testReadFile(): void
    {
        $decoder = new Decoder();
        $messages = $decoder->read(FilePath::getPathTo('DeveloperData.fit'));

        $this->assertNotNull($messages);
        $this->assertCount(6, $messages);

        $recordMessages = $messages->getMessages(MesgNum::RECORD);
        $this->assertEquals(3, count($recordMessages));

        $this->assertSame(1, $this->getFieldValue($recordMessages[0], 'doughnuts_earned'));
        $this->assertSame(2, $this->getFieldValue($recordMessages[1], 'doughnuts_earned'));
        $this->assertSame(3, $this->getFieldValue($recordMessages[2], 'doughnuts_earned'));
    }

    public function testStreamFile(): void
    {
        $decoder = new Decoder();
        $messages = new MessageList();
        $decoder->stream(FilePath::getPathTo('DeveloperData.fit'), function ($message) use (&$messages) {
            $messages->addMessage($message);
        });

        $this->assertNotNull($messages);
        $this->assertCount(6, $messages);

        $recordMessages = $messages->getMessages(MesgNum::RECORD);
        $this->assertEquals(3, count($recordMessages));

        $this->assertSame(1, $this->getFieldValue($recordMessages[0], 'doughnuts_earned'));
        $this->assertSame(2, $this->getFieldValue($recordMessages[1], 'doughnuts_earned'));
        $this->assertSame(3, $this->getFieldValue($recordMessages[2], 'doughnuts_earned'));
    }

    public function testRecordsShareOneFieldPerDeveloperField(): void
    {
        // activity_developerdata.fit redefines the native heart rate (field 3) of its records
        $decoder = new Decoder();
        $messages = $decoder->read(FilePath::getPathTo('activity_developerdata.fit'));
        $recordMessages = $messages->getMessages(MesgNum::RECORD);

        $field = $recordMessages[0]->getField(3);
        $this->assertSame('Heart Rate', $field?->getName());
        foreach ($recordMessages as $recordMessage) {
            $this->assertSame($field, $recordMessage->getField(3));
        }
    }

    private function getFieldValue(Message $message, string $fieldName): mixed
    {
        foreach ($message as $key => $value) {
            /** @var Field $field */
            $field = $message->getField($key);
            if ($field->getName() === $fieldName) {
                return $message->getFieldValue($field->getNumber());
            }
        }
        return null;
    }
}
