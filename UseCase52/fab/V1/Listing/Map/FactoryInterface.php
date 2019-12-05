<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\MapInterface;

interface FactoryInterface
{
    public function create(): MapInterface;
}
