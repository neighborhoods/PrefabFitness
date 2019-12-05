<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\SortOrder\Map;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\SortOrder\MapInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): MapInterface
    {
        return $this->getSearchCriteriaSortOrderMap()->getArrayCopy();
    }
}
