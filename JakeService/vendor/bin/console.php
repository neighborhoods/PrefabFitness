<?php
declare(strict_types=1);
ini_set('assert.exception', '1');
error_reporting(E_ALL);

require_once __DIR__ . '/../autoload.php';

use Neighborhoods\Prefab\GenerateFabCommand;
use Symfony\Component\Console\Application;

$application = new Application();
$application->add(new GenerateFabCommand());
$application->run();
