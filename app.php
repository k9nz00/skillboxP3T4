<?php

use Symfony\Component\Console\Application;

require_once  __DIR__ . DIRECTORY_SEPARATOR. 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application('task4');
$app->add(new \App\GetWordCommand());
$app->run();