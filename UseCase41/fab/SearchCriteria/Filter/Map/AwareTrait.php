<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Filter\Map;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Filter\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMap;

    public function setSearchCriteriaFilterMap(MapInterface $searchCriteriaFilterMap): self
    {
        if ($this->hasSearchCriteriaFilterMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMap is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMap = $searchCriteriaFilterMap;

        return $this;
    }

    protected function getSearchCriteriaFilterMap(): MapInterface
    {
        if (!$this->hasSearchCriteriaFilterMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMap is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMap;
    }

    protected function hasSearchCriteriaFilterMap(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMap);
    }

    protected function unsetSearchCriteriaFilterMap(): self
    {
        if (!$this->hasSearchCriteriaFilterMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMap is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMap);

        return $this;
    }
}
