<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Visitor\Map\Factory;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Visitor\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMapFactory;

    public function setSearchCriteriaVisitorMapFactory(FactoryInterface $searchCriteriaVisitorMapFactory) : self
    {
        if ($this->hasSearchCriteriaVisitorMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMapFactory = $searchCriteriaVisitorMapFactory;

        return $this;
    }

    protected function getSearchCriteriaVisitorMapFactory() : FactoryInterface
    {
        if (!$this->hasSearchCriteriaVisitorMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMapFactory;
    }

    protected function hasSearchCriteriaVisitorMapFactory() : bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMapFactory);
    }

    protected function unsetSearchCriteriaVisitorMapFactory() : self
    {
        if (!$this->hasSearchCriteriaVisitorMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaVisitorMapFactory);

        return $this;
    }
}
