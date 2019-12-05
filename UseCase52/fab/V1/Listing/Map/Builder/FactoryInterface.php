<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\Builder;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map\BuilderInterface;

interface FactoryInterface
{
    public function create(): BuilderInterface;
}
