<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrder;

    public function setSearchCriteriaSortOrder(SortOrderInterface $searchCriteriaSortOrder): self
    {
        if ($this->hasSearchCriteriaSortOrder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrder = $searchCriteriaSortOrder;

        return $this;
    }

    protected function getSearchCriteriaSortOrder(): SortOrderInterface
    {
        if (!$this->hasSearchCriteriaSortOrder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrder;
    }

    protected function hasSearchCriteriaSortOrder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrder);
    }

    protected function unsetSearchCriteriaSortOrder(): self
    {
        if (!$this->hasSearchCriteriaSortOrder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrder);

        return $this;
    }
}
