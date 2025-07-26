<?php

declare(strict_types=1);

/**
 * Sportlog (https://sportlog.at)
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Test\TestCase\Decoder;

use Sportlog\FIT\Decoder;
use Sportlog\FIT\Test\TestCase\FilePath;
use PHPUnit\Framework\TestCase;
use Sportlog\FIT\Profile\Messages\RecordMessage;
use Sportlog\FIT\Profile\Types\MesgNum;

/**
 * Decodes the file 'Coros.fit'
 * from the FIT SDK (FitSDKRelease_21.40.00)
 */
final class DecodeCorosTest extends TestCase
{
    public function testDecodeFile(): void
    {
        $decoder = new Decoder();
        $messages = $decoder->read(FilePath::getPathTo('coros.fit'));

        /** @var RecordMessage[] $records */
        $records = $messages->getMessages(MesgNum::RECORD);
        $this->assertCount(3753, $records);
        $this->assertEquals('2025-06-19T12:53:41+00:00', $records[0]->getTimestamp()->format('c'));
        $this->assertEquals('2025-06-19T13:56:17+00:00', $records[count($records) - 1]->getTimestamp()->format('c'));
        $this->assertEquals(8605.46, $records[count($records) - 1]->getDistance());
    }
}
