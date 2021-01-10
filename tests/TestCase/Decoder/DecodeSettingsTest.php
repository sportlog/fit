<?php
declare (strict_types = 1);

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

/**
 * Decodes the file 'Settings.fit'
 * from the FIT SDK (FitSDKRelease_21.40.00)
 */
final class DecodeSettingsTest extends TestCase {
    public function testDecodeFile(): void {
        $decoder = new Decoder();
        $messages = $decoder->read(FilePath::getPathTo('Settings.fit'));

        $this->assertNotNull($messages);
        $this->assertCount(3, $messages);
        $this->assertCount(1, $messages->getMessages(FileIdMessage::class));
        // $this->assertEquals(FileType::Settings, $messages->getFileType());
        $this->assertCount(1, $messages->getMessages(UserProfileMessage::class));
        $this->assertCount(1, $messages->getMessages(HrmProfileMessage::class));

        $hrmMessages = $messages->getMessages(HrmProfileMessage::class);
        /** @var HrmProfileMessage $lastRecordMessage */
        $lastHrmProfileMessage = $hrmMessages[count($hrmMessages)-1];
        $this->assertEquals(100, $lastHrmProfileMessage->getHrmAntId());

        $userProfileMessages = $messages->getMessages(UserProfileMessage::class);
        /** @var UserProfileMessage $lastUserProfileMessage */
        $lastUserProfileMessage = $userProfileMessages[count($userProfileMessages)-1];
        $this->assertEquals(90, $lastUserProfileMessage->getWeight());
        $this->assertEquals(1.9, $lastUserProfileMessage->getHeight());
        $this->assertEquals(28, $lastUserProfileMessage->getAge());
        $this->assertEquals(1, $lastUserProfileMessage->getGender());
        $this->assertEquals(0, $lastUserProfileMessage->getLanguage());
    }
}
