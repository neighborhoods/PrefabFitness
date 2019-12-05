<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Builder;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\BuilderInterface;

interface FactoryInterface
{
    public function create(): BuilderInterface;
}
