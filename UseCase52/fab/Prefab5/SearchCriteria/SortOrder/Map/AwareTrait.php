<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\SortOrder\Map;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\SortOrder\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderMap;

    public function setSearchCriteriaSortOrderMap(MapInterface $searchCriteriaSortOrderMap): self
    {
        if ($this->hasSearchCriteriaSortOrderMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderMap is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderMap = $searchCriteriaSortOrderMap;

        return $this;
    }

    protected function getSearchCriteriaSortOrderMap(): MapInterface
    {
        if (!$this->hasSearchCriteriaSortOrderMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderMap is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderMap;
    }

    protected function hasSearchCriteriaSortOrderMap(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderMap);
    }

    protected function unsetSearchCriteriaSortOrderMap(): self
    {
        if (!$this->hasSearchCriteriaSortOrderMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderMap is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderMap);

        return $this;
    }
}
