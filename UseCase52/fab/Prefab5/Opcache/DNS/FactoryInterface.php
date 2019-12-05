<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\Opcache\DNS;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\Opcache\DNSInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): DNSInterface;
}
