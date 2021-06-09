#!/usr/bin/env php
<?php

declare(strict_types=1);

error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

use Neighborhoods\PrefabFitnessUseCase85\V1\Custom;
use Neighborhoods\PrefabFitnessUseCase85\V1\DefaultImplementation;

echo 'Encoding Default implementation' . PHP_EOL;
echo json_encode(new DefaultImplementation\Map([
    (new DefaultImplementation())->setId(5),
]), JSON_THROW_ON_ERROR) . PHP_EOL;
echo 'Encoding Custom json_serialize implementation with json_serialize_map_as_array' . PHP_EOL;
echo json_encode(new Custom\Map([
    (new Custom())->setId(5),
]), JSON_THROW_ON_ERROR) . PHP_EOL;
