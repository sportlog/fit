<?php
declare (strict_types = 1);

/**
 * Sportlog (https://sportlog.at)
 *
 * @license MIT License
 */

namespace FIT\Test\TestCase\Decoder;

use FIT\Decoder;
use FIT\FileType;
use FIT\Profile\Message\EventMessage;
use FIT\Profile\Message\FileIdMessage;
use FIT\Profile\Message\RecordMessage;
use FIT\Test\TestCase\FilePath;
use PHPUnit\Framework\TestCase;

/**
 * Decodes the file 'activity_truncated.fit'
 * from the FIT SDK (FitSDKRelease_21.40.00)
 */
final class DecodeActivityTruncatedTest extends TestCase {
    public function testDecodeFile(): void {
        $decoder = new Decoder();
        $messages = $decoder->read(FilePath::getPathTo('activity_truncated.fit'));

        $this->assertNotNull($messages);
        $this->assertCount(16, $messages);
        $this->assertEquals(FileType::Activity, $messages->getFileType());
        $this->assertCount(1, $messages->getMessages(FileIdMessage::class));
        $this->assertCount(1, $messages->getMessages(EventMessage::class));
        $this->assertCount(14, $messages->getMessages(RecordMessage::class));

        $recMessages = $messages->getMessages(RecordMessage::class);
        /** @var RecordMessage $lastRecordMessage */
        $lastRecordMessage = $recMessages[count($recMessages)-1];
        $this->assertEquals(5.73, $lastRecordMessage->getDistance());
        $this->assertEquals(778.2, $lastRecordMessage->getAltitude());
    }
}
