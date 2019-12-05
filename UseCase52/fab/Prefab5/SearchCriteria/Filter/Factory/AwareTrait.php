<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Filter\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Filter\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterFactory;

    public function setSearchCriteriaFilterFactory(FactoryInterface $searchCriteriaFilterFactory): self
    {
        if ($this->hasSearchCriteriaFilterFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterFactory = $searchCriteriaFilterFactory;

        return $this;
    }

    protected function getSearchCriteriaFilterFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaFilterFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterFactory;
    }

    protected function hasSearchCriteriaFilterFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterFactory);
    }

    protected function unsetSearchCriteriaFilterFactory(): self
    {
        if (!$this->hasSearchCriteriaFilterFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFilterFactory);

        return $this;
    }
}
