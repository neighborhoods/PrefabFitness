<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\ServerRequest\Builder\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\ServerRequest\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilderFactory;

    public function setSearchCriteriaServerRequestBuilderFactory(
        FactoryInterface $searchCriteriaServerRequestBuilderFactory
    ): self {
        if ($this->hasSearchCriteriaServerRequestBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilderFactory = $searchCriteriaServerRequestBuilderFactory;

        return $this;
    }

    protected function getSearchCriteriaServerRequestBuilderFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaServerRequestBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilderFactory;
    }

    protected function hasSearchCriteriaServerRequestBuilderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilderFactory);
    }

    protected function unsetSearchCriteriaServerRequestBuilderFactory(): self
    {
        if (!$this->hasSearchCriteriaServerRequestBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaServerRequestBuilderFactory);

        return $this;
    }
}
