#!/usr/bin/env php
<?php
declare(strict_types=1);
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';
use Neighborhoods\PrefabFitnessUseCase84\Prefab5\HTTPBuildableDirectoryMap\ContainerBuilder;

$primer = new ContainerBuilder\Primer();
$primer->primeContainers();

return;