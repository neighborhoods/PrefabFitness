<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map;

use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\MapInterface;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5;

interface RepositoryInterface
{
    public function get(Prefab5\SearchCriteriaInterface $searchCriteria) : MapInterface;

    public function save(MapInterface $property) : RepositoryInterface;
}
