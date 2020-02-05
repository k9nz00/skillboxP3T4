<?php

use App\GetWordCommand;
use App\GetWordLoopCommand;
use App\QuestionCommand;
use Symfony\Component\Console\Application;

require_once  __DIR__ . DIRECTORY_SEPARATOR. 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$app = new Application('task4');
$app->add(new GetWordCommand());
$app->add(new GetWordLoopCommand());
$app->add(new QuestionCommand());
$app->run();