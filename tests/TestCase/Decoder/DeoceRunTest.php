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
 * Decodes the file 'Settings.fit'
 * from the FIT SDK (FitSDKRelease_21.40.00)
 */
final class DecodeRunTest extends TestCase
{
    public function testDecodeFile(): void
    {
        $decoder = new Decoder();
        $messages = $decoder->read(FilePath::getPathTo('Run.fit'));

        /** @var RecordMessage[] $records */
        $records = $messages->getMessages(MesgNum::Record);
        $this->assertCount(3155, $records);
        $this->assertEquals('2020-12-20T10:19:53+00:00', $records[0]->getTimestamp()->format('c'));
        $this->assertEquals('2020-12-20T11:12:27+00:00', $records[count($records) - 1]->getTimestamp()->format('c'));
    }
}
