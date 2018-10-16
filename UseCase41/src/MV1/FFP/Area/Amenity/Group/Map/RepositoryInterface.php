<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map;

use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\MapInterface;
use Neighborhoods\PrefabExamplesUseCase41\SearchCriteriaInterface;

interface RepositoryInterface
{
    public function createBuilder(): BuilderInterface;

    public function save(MapInterface $map): RepositoryInterface;

    public function get(SearchCriteriaInterface $searchCriteria): MapInterface;
}
