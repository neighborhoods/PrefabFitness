<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\SortOrder\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\SortOrder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderFactory;

    public function setSearchCriteriaSortOrderFactory(FactoryInterface $searchCriteriaSortOrderFactory): self
    {
        if ($this->hasSearchCriteriaSortOrderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderFactory = $searchCriteriaSortOrderFactory;

        return $this;
    }

    protected function getSearchCriteriaSortOrderFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaSortOrderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderFactory;
    }

    protected function hasSearchCriteriaSortOrderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderFactory);
    }

    protected function unsetSearchCriteriaSortOrderFactory(): self
    {
        if (!$this->hasSearchCriteriaSortOrderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaSortOrderFactory);

        return $this;
    }
}
