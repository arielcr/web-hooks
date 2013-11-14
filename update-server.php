<?php

date_default_timezone_set('America/Costa_Rica');

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Symfony\Component\Yaml\Yaml;

$config = Yaml::parse(file_get_contents('config.yml'));
$payload = json_decode($_POST['payload']);

$LOCAL_REPO = $_SERVER['DOCUMENT_ROOT'] . "/" . $payload->repository->name;
$REMOTE_REPO = $payload->repository->url . ".git";

if (file_exists($LOCAL_REPO)) {
    //shell_exec("rm -rf {$LOCAL_REPO}");
    shell_exec("cd {$LOCAL_REPO} && git fetch --all && git reset --hard origin/master");
} else {
    shell_exec("cd {$_SERVER['DOCUMENT_ROOT']} && git clone {$REMOTE_REPO} ");
}

$log = new Logger('UPDATES');
$log->pushHandler(new StreamHandler('logs/' . $payload->repository->name . '.log', Logger::INFO));
$log->addInfo(substr($payload->commits[0]->id, 0, 8) . " " . $payload->commits[0]->message);
