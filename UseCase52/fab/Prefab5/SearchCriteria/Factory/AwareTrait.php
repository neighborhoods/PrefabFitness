<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFactory;

    public function setSearchCriteriaFactory(FactoryInterface $searchCriteriaFactory): self
    {
        if ($this->hasSearchCriteriaFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFactory = $searchCriteriaFactory;

        return $this;
    }

    protected function getSearchCriteriaFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFactory;
    }

    protected function hasSearchCriteriaFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFactory);
    }

    protected function unsetSearchCriteriaFactory(): self
    {
        if (!$this->hasSearchCriteriaFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaFactory);

        return $this;
    }
}
