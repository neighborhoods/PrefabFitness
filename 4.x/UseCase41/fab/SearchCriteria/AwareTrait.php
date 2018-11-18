<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteriaInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteria;

    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria): self
    {
        if ($this->hasSearchCriteria()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteria is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteria = $searchCriteria;

        return $this;
    }

    protected function getSearchCriteria(): SearchCriteriaInterface
    {
        if (!$this->hasSearchCriteria()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteria is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteria;
    }

    protected function hasSearchCriteria(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteria);
    }

    protected function unsetSearchCriteria(): self
    {
        if (!$this->hasSearchCriteria()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteria is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteria);

        return $this;
    }
}
