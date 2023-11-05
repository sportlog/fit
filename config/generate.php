<?php

require '../vendor/autoload.php';

use Sportlog\FIT\Generator\MessageGenerator;

try {
    $generator = new MessageGenerator();

    echo "Generating for FIT SDK v" . MessageGenerator::FIT_SDK_VERSION . "<br>";
    // Generate profile types first; required for the messages
    $generator->writeProfileTypes('Profile.cs', join(DIRECTORY_SEPARATOR, ['..', 'src', 'Profile']));
    echo "Profiletypes generated <br>";

    $cnt = $generator->writeMessages(
        'Profile.cs',
        join(DIRECTORY_SEPARATOR, ['..', 'src', 'Profile'])
    );
    echo "{$cnt} Messages generated <br>";

    $cnt = $generator->writeTypes(
        'Profile.csv',
        join(DIRECTORY_SEPARATOR, ['..', 'src', 'Profile'])
    );
    echo "{$cnt} Types generated <br>";
} catch (Exception $ex) {
    echo "Error generating messages {$ex}";
}
