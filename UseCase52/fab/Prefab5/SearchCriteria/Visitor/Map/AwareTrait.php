<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Visitor\Map;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Visitor\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMap;

    public function setSearchCriteriaVisitorMap(MapInterface $searchCriteriaVisitorMap): self
    {
        if ($this->hasSearchCriteriaVisitorMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMap is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMap = $searchCriteriaVisitorMap;

        return $this;
    }

    protected function getSearchCriteriaVisitorMap(): MapInterface
    {
        if (!$this->hasSearchCriteriaVisitorMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMap is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMap;
    }

    protected function hasSearchCriteriaVisitorMap(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMap);
    }

    protected function unsetSearchCriteriaVisitorMap(): self
    {
        if (!$this->hasSearchCriteriaVisitorMap()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMap is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMap);

        return $this;
    }
}
