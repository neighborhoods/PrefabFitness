<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Builder;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilder;

    public function setSearchCriteriaBuilder(BuilderInterface $searchCriteriaBuilder): self
    {
        if ($this->hasSearchCriteriaBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilder is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilder = $searchCriteriaBuilder;

        return $this;
    }

    protected function getSearchCriteriaBuilder(): BuilderInterface
    {
        if (!$this->hasSearchCriteriaBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilder;
    }

    protected function hasSearchCriteriaBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilder);
    }

    protected function unsetSearchCriteriaBuilder(): self
    {
        if (!$this->hasSearchCriteriaBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilder);

        return $this;
    }
}
