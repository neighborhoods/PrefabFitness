<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Visitor\Map;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Visitor\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaVisitorMap;

    public function setSearchCriteriaVisitorMap(MapInterface $searchCriteriaVisitorMap): self
    {
        if ($this->hasSearchCriteriaVisitorMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaVisitorMap is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaVisitorMap = $searchCriteriaVisitorMap;

        return $this;
    }

    protected function getSearchCriteriaVisitorMap(): MapInterface
    {
        if (!$this->hasSearchCriteriaVisitorMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaVisitorMap is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaVisitorMap;
    }

    protected function hasSearchCriteriaVisitorMap(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaVisitorMap);
    }

    protected function unsetSearchCriteriaVisitorMap(): self
    {
        if (!$this->hasSearchCriteriaVisitorMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaVisitorMap is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaVisitorMap);

        return $this;
    }
}
