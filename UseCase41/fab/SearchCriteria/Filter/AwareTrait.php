<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Filter;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\FilterInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilter;

    public function setSearchCriteriaFilter(FilterInterface $searchCriteriaFilter): self
    {
        if ($this->hasSearchCriteriaFilter()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilter is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilter = $searchCriteriaFilter;

        return $this;
    }

    protected function getSearchCriteriaFilter(): FilterInterface
    {
        if (!$this->hasSearchCriteriaFilter()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilter is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilter;
    }

    protected function hasSearchCriteriaFilter(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilter);
    }

    protected function unsetSearchCriteriaFilter(): self
    {
        if (!$this->hasSearchCriteriaFilter()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilter is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilter);

        return $this;
    }
}
