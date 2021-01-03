<?php

require '../vendor/autoload.php';

use FIT\Generator\MessageGenerator;

try {
    $generator = new MessageGenerator();
    $cnt = $generator->generateAndWriteFiles('Profile.cs', '..\\src\\Profile\\Message');
    echo "{$cnt} Files (Messages) generated";
}
catch (Exception $ex) {
    echo "Error generating messages {$ex}";
}

