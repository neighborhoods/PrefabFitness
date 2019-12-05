<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\SortOrder;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\SortOrderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrder;

    public function setSearchCriteriaSortOrder(SortOrderInterface $searchCriteriaSortOrder): self
    {
        if ($this->hasSearchCriteriaSortOrder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrder is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrder = $searchCriteriaSortOrder;

        return $this;
    }

    protected function getSearchCriteriaSortOrder(): SortOrderInterface
    {
        if (!$this->hasSearchCriteriaSortOrder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrder is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrder;
    }

    protected function hasSearchCriteriaSortOrder(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrder);
    }

    protected function unsetSearchCriteriaSortOrder(): self
    {
        if (!$this->hasSearchCriteriaSortOrder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrder is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrder);

        return $this;
    }
}
