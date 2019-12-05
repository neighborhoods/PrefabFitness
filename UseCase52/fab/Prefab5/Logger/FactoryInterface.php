<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Logger;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\LoggerInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create() : LoggerInterface;
}
