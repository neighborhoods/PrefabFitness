<?php
declare(strict_types=1);
error_reporting(E_ALL);

use Neighborhoods\PrefabExamplesUseCase41\HTTP;
use Neighborhoods\PrefabExamplesUseCase41\Protean\Container\Builder;
use Neighborhoods\PrefabExamplesUseCase41\Symfony\Component\DependencyInjection\ErrorHandler;
use Neighborhoods\PrefabExamplesUseCase41\Symfony\Component\DependencyInjection\ExceptionHandler;

require_once __DIR__ . '/../vendor/autoload.php';

set_error_handler(new ErrorHandler());
set_exception_handler(new ExceptionHandler());
$proteanContainerBuilder = (new Builder())->setApplicationRootDirectoryPath(realpath(__DIR__ . '/../'));
$HTTP = (new HTTP())->setProteanContainerBuilder($proteanContainerBuilder);
$HTTP->respond();

return;
