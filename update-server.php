<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Symfony\Component\Yaml\Yaml;

$payload = json_decode($_POST['payload']);

$message = print_r($payload, true);

// create a log channel
$log = new Logger('updates');
$log->pushHandler(new StreamHandler('logs/updates.log', Logger::INFO));

// add records to the log
$log->addInfo($payload->commits[0]->message);


mail("bassplayer85@gmail.com", "TEST HOOKS 2", $message);

