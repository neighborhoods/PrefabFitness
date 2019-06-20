#!/usr/bin/env php
<?php
declare(strict_types=1);
ini_set('assert.exception', '1');
error_reporting(E_ALL);
require_once 'performHacks.php';

require_once __DIR__ . '/../vendor/autoload.php';

use Neighborhoods\PrefabQuoteDemo\Prefab5\Protean\Container\Builder;
use Neighborhoods\PrefabQuoteDemo\Prefab5\Symfony\Component\DependencyInjection\ErrorHandler;
use Neighborhoods\PrefabQuoteDemo\Prefab5\Symfony\Component\DependencyInjection\ExceptionHandler;

set_exception_handler(new ExceptionHandler());
set_error_handler(new ErrorHandler());

if (!isset($argv[1])) {
    die('Specify an MLS code as the first argument' . PHP_EOL);
}

$mlsCode = $argv[1];

// NOTE: this won't work if the case of $mlsCode is different from the filesystem (thanks Symfony DI)
$importerClass = "Neighborhoods\ListingService\Ingestion\\$mlsCode\Room\Importer";

$containerBuilder = new Builder();
$containerBuilder->setContainerName(($importerClass . '\Facade')::JOB_TYPE_CODE);
//$containerBuilder->setCanBuildZendExpressive(true);
$containerBuilder->getFilesystemProperties()->setRootDirectoryPath(dirname(__DIR__ . '/../'));
$containerBuilder->registerServiceAsPublic($importerClass . 'Interface');

$container = $containerBuilder->build();

$importer = $container->get($importerClass . 'Interface');
$importer->import();

return;