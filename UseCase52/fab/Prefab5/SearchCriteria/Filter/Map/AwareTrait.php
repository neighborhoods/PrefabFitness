<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Filter\Map;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Filter\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterMap;

    public function setSearchCriteriaFilterMap(MapInterface $searchCriteriaFilterMap): self
    {
        if ($this->hasSearchCriteriaFilterMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterMap is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterMap = $searchCriteriaFilterMap;

        return $this;
    }

    protected function getSearchCriteriaFilterMap(): MapInterface
    {
        if (!$this->hasSearchCriteriaFilterMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterMap is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterMap;
    }

    protected function hasSearchCriteriaFilterMap(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterMap);
    }

    protected function unsetSearchCriteriaFilterMap(): self
    {
        if (!$this->hasSearchCriteriaFilterMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterMap is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterMap);

        return $this;
    }
}
