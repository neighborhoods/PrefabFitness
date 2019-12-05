<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Builder\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilderFactory;

    public function setSearchCriteriaBuilderFactory(
        FactoryInterface $searchCriteriaBuilderFactory
    ): self {
        if ($this->hasSearchCriteriaBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilderFactory = $searchCriteriaBuilderFactory;

        return $this;
    }

    protected function getSearchCriteriaBuilderFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilderFactory;
    }

    protected function hasSearchCriteriaBuilderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilderFactory);
    }

    protected function unsetSearchCriteriaBuilderFactory(): self
    {
        if (!$this->hasSearchCriteriaBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaBuilderFactory);

        return $this;
    }
}
