# FIT

A PHP (>= PHP 8) decoder for FIT files created by Garmin devices.
The result is a list of all messages decoded from the file. Each message
is an instance of its underlying message class, so you can easily access
any (native) fields using intellisense. (FIT SDK 21.158)

## Install via Composer

You can install sportlog/FIT using Composer.

```bash
$ composer require sportlog/fit
```

Minimum PHP version required is 8.

## How to use

```php
<?php

require 'vendor/autoload.php';

use Sportlog\FIT\Decoder;
use Sportlog\FIT\Profile\Messages\SessionMessage;
use Sportlog\FIT\Profile\Types\MesgNum;

$decoder = new Decoder();
// Decoding the FIT file returns a set of messages
$messageList = $decoder->read('yourfile.fit');

echo "File type: " . $messageList->getFileType();

// You can iterate over the message list, or like in this example,
// iterate over the messages grouped by their message numbers.
foreach ($messageList->getMessageNumbers() as $messageNumber) {
   $messages = $messageList->getMessages($messageNumber);
   echo sprintf('%s: %s', $messageNumber, count($messages));
}

// You can also grab specific messages
$sessionMessages = $messageList->getMessages(MesgNum::SESSION);

// There should be one session message (add check!)
/** @var SessionMessage $sessionMessage */
$sessionMessage = $sessionMessages[0];
// get any native fields from the message; use intellisense
echo "Total time (m): " . $lastRecordMessage->getTotalElapsedTime();
echo "Total distance (m): " . $lastRecordMessage->getTotalDistance();
echo "Total ascent (m): " . $lastRecordMessage->getTotalAscent();
```

## Limitations

Currently not supported

- Compressed time stamps
- Components
