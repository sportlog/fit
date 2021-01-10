<?php

declare(strict_types=1);

/**
 * Sportlog (https://sportlog.at)
 *
 * @license MIT License
 */

namespace FIT\Test\TestCase\Decoder;

use FIT\Decoder;
use FIT\FileType;
use FIT\Profile\Message\FileIdMessage;
use FIT\Profile\Message\HrmProfileMessage;
use FIT\Profile\Message\MonitoringInfoMessage;
use FIT\Profile\Message\MonitoringMessage;
use FIT\Profile\Message\UserProfileMessage;
use FIT\Test\TestCase\FilePath;
use PHPUnit\Framework\TestCase;

/**
 * Decodes the file 'MonitoringFile.fit'
 * from the FIT SDK (FitSDKRelease_21.40.00)
 */
final class DecodeMonitoringTest extends TestCase
{
    public function testDecodeFile(): void
    {
        $decoder = new Decoder();
        $messages = $decoder->read(FilePath::getPathTo('MonitoringFile.fit'));

        $this->assertNotNull($messages);

        $monitoringMessages = $messages->getMessages(MonitoringMessage::class);
        $this->assertCount(337, $monitoringMessages);

        $monitoringInfoMessages = $messages->getMessages(MonitoringInfoMessage::class);
        /** @var MonitoringInfoMessage $lastMonitoringInfoMessage */
        $lastMonitoringInfoMessage = $monitoringInfoMessages[count($monitoringInfoMessages) - 1];
        $this->assertEquals(2042, $lastMonitoringInfoMessage->getRestingMetabolicRate());
        $this->assertEquals($lastMonitoringInfoMessage->getCyclesToCalories(), [0.0438, 0.1186]);
        $this->assertEquals($lastMonitoringInfoMessage->getCyclesToDistance(), [1.512, 1.944]);
    }
}
