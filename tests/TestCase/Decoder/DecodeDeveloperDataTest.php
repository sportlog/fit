<?php
declare (strict_types = 1);

/**
 * Sportlog (https://sportlog.at)
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Test\TestCase\Decoder;

use Sportlog\FIT\Decoder;
use Sportlog\FIT\Test\TestCase\FilePath;
use PHPUnit\Framework\TestCase;
use Sportlog\FIT\Profile\Message\RecordMessage;
use Sportlog\FIT\Profile\MessageNumber;

/**
 * Decodes the file 'DeveloperData.fit'
 * from the FIT SDK (FitSDKRelease_21.40.00)
 */
final class DecodeDeveloperDataTest extends TestCase {
    public function testDecodeFile(): void {
        $decoder = new Decoder();
        $messages = $decoder->read(FilePath::getPathTo('DeveloperData.fit'));

        $this->assertNotNull($messages);
        $this->assertCount(6, $messages);

        $recordMessages = $messages->getMessages(MessageNumber::Record);
        $this->assertEquals(3, count($recordMessages));

        $this->assertSame(1, $recordMessages[0]->getFieldValue('doughnuts_earned'));
        $this->assertSame(2, $recordMessages[1]->getFieldValue('doughnuts_earned'));
        $this->assertSame(3, $recordMessages[2]->getFieldValue('doughnuts_earned'));
    }
}
