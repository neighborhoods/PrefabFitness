<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteriaInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteria;

    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria): self
    {
        if ($this->hasSearchCriteria()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteria is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteria = $searchCriteria;

        return $this;
    }

    protected function getSearchCriteria(): SearchCriteriaInterface
    {
        if (!$this->hasSearchCriteria()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteria is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteria;
    }

    protected function hasSearchCriteria(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteria);
    }

    protected function unsetSearchCriteria(): self
    {
        if (!$this->hasSearchCriteria()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteria is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteria);

        return $this;
    }
}
