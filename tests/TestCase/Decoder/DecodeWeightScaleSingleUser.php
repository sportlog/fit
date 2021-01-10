<?php

declare(strict_types=1);

/**
 * Sportlog (https://sportlog.at)
 *
 * @license MIT License
 */

namespace Sportlog\FIT\Test\TestCase\Decoder;

use Sportlog\FIT\Decoder;
use Sportlog\FIT\FileType;
use Sportlog\FIT\Profile\Message\FileIdMessage;
use Sportlog\FIT\Profile\Message\HrmProfileMessage;
use Sportlog\FIT\Profile\Message\UserProfileMessage;
use Sportlog\FIT\Test\TestCase\FilePath;
use PHPUnit\Framework\TestCase;
use Sportlog\FIT\Profile\Message\DeviceInfoMessage;
use Sportlog\FIT\Profile\Message\WeightScaleMessage;

/**
 * Decodes the file 'WeightScaleSingleUser.fit'
 * from the FIT SDK (FitSDKRelease_21.40.00)
 */
final class DecodeWeightScaleSingleUser extends TestCase
{
    public function testDecodeFile(): void
    {
        $decoder = new Decoder();
        $messages = $decoder->read(FilePath::getPathTo('WeightScaleSingleUser.fit'));

        $this->assertNotNull($messages);

        $cnt = 0;
        foreach ($messages as $messages) {
            $cnt++;
        }
        $this->assertEquals(6, $cnt);
        $this->assertEquals(2, $messages->getMessages(WeightScaleMessage::class));
        $this->assertEquals(2, $messages->getMessages(DeviceInfoMessage::class));
        $this->assertEquals(1, $messages->getMessages(FileIdMessage::class));
        $this->assertEquals(1, $messages->getMessages(UserProfileMessage::class));

        $weightMessages = $messages->getMessages(WeightScaleMessage::class);
        /** @var WeightScaleMessage $firstWeightMessage */
        $firstWeightMessage = $weightMessages[0];
        $this->assertEquals(22.3, $firstWeightMessage->getPercentFat());
        $this->assertEquals(0, $firstWeightMessage->getUserProfileIndex());
         /** @var WeightScaleMessage $secondWeightMessage */
         $secondWeightMessage = $weightMessages[1];
         $this->assertEquals(25.1, $secondWeightMessage->getPercentFat());
    }
}
