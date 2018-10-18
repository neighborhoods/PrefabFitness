<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder\Map;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder\MapInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMap;

    public function setSearchCriteriaSortOrderMap(MapInterface $searchCriteriaSortOrderMap): self
    {
        if ($this->hasSearchCriteriaSortOrderMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMap is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMap = $searchCriteriaSortOrderMap;

        return $this;
    }

    protected function getSearchCriteriaSortOrderMap(): MapInterface
    {
        if (!$this->hasSearchCriteriaSortOrderMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMap is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMap;
    }

    protected function hasSearchCriteriaSortOrderMap(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMap);
    }

    protected function unsetSearchCriteriaSortOrderMap(): self
    {
        if (!$this->hasSearchCriteriaSortOrderMap()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMap is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMap);

        return $this;
    }
}
