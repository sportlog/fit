# FIT
A PHP (>= PHP 8) decoder for FIT files created by Garmin devices.
The result is a list of all messages decoded from the file. Each message
is an instance of its underlying message class, so you can easily access
any (native) fields using intellisense.

## Install via Composer
You can install sportlog/FIT using Composer.

``` bash
$ composer require sportlog/fit
```
Minimum PHP version required is 8.

## How to use

``` php
<?php

require 'vendor/autoload.php';

use Sportlog\FIT\Decoder;
use Sportlog\FIT\Profile\Message\RecordMessage;
use Sportlog\FIT\Profile\MessageNumber;

$decoder = new Decoder();
// Decoding the FIT file returns a set of messages
$messageList = $decoder->read('yourfile.fit');

echo "File type: " . $messageList->getFileType();

// You can either traverse all messages, in this case grouped by type.
// You also simply iterate over the $messageList
foreach ($messageList->getMessageTypes() as $messageTyp) {
   $messages = $messageList->getMessages($messageTyp);
   echo sprintf('%s: %s', $messageType, count($messages));
}

// You can also grab specific messages and access any data you need
$recordMessages = $messageList->getMessages(MessageNumber::Record);
if (count($recordMessages) > 0) {
   /** @var RecordMessage $lastRecordMessage */
   $lastRecordMessage = $recMessages[count($recMessages)-1];
   // get the distance using the properties on the message,
   // for example the distance
   echo "Total distance (m): " . $lastRecordMessage->getDistance();
}
```

## Limitations
Currently not supported
* Compressed time stamps
* Components