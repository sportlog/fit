<?php

require '../vendor/autoload.php';

use Sportlog\FIT\Generator\MessageGenerator;

try {
    $generator = new MessageGenerator();
    $cnt = $generator->writeMessages(
        'Profile.cs',
        join(DIRECTORY_SEPARATOR, ['..', 'src', 'Profile'])
    );
    echo "{$cnt} Files (Messages) generated";

    $cnt = $generator->writeTypes(
        'Profile.csv',
        join(DIRECTORY_SEPARATOR, ['..', 'src', 'Profile'])
    );

} catch (Exception $ex) {
    echo "Error generating messages {$ex}";
}
