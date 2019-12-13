<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map;

use Jaeger\Jaeger;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5;
use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\MapInterface;

interface RepositoryInterface
{
    public function get(Prefab5\SearchCriteriaInterface $searchCriteria) : MapInterface;

    public function save(MapInterface $property) : RepositoryInterface;

    public function setTracer(Jaeger $tracer) : RepositoryInterface;

    public function getTracer() : Jaeger;
}
