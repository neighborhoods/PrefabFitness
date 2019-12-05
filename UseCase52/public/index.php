<?php
declare(strict_types=1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\HTTP;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Protean\Container\Builder;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5\ErrorHandler;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5\ExceptionHandler;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Logger;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5\HTTPBuildableDirectoryMap;

$logger = (new Logger())
    ->setLogFilePath(__DIR__ . '/../Logs/HTTP.log');

$exceptionHandler = (new ExceptionHandler())->setPrefab5Logger($logger);

set_exception_handler($exceptionHandler);
set_error_handler(new ErrorHandler());
$proteanContainerBuilder = new Builder();
$proteanContainerBuilder->getFilesystemProperties()->setRootDirectoryPath(realpath(__DIR__ . '/../'));
$httpBuildableDirectoryContainerBuilder = new HTTPBuildableDirectoryMap\ContainerBuilder();

$HTTP = (new HTTP())
    ->setProteanContainerBuilder($proteanContainerBuilder)
    ->setPrefab5HTTPBuildableDirectoryMapContainerBuilder($httpBuildableDirectoryContainerBuilder)
    ->respond();

return;
