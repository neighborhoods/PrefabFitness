<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Filter;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\FilterInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilter;

    public function setSearchCriteriaFilter(FilterInterface $searchCriteriaFilter): self
    {
        if ($this->hasSearchCriteriaFilter()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilter is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilter = $searchCriteriaFilter;

        return $this;
    }

    protected function getSearchCriteriaFilter(): FilterInterface
    {
        if (!$this->hasSearchCriteriaFilter()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilter is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilter;
    }

    protected function hasSearchCriteriaFilter(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilter);
    }

    protected function unsetSearchCriteriaFilter(): self
    {
        if (!$this->hasSearchCriteriaFilter()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilter is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilter);

        return $this;
    }
}
