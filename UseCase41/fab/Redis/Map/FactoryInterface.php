<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\Redis\Map;

use Neighborhoods\PrefabExamplesUseCase41\Redis\MapInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): MapInterface;
}
