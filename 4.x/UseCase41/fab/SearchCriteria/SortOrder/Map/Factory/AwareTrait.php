<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder\Map\Factory;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMapFactory;

    public function setSearchCriteriaSortOrderMapFactory(FactoryInterface $searchCriteriaSortOrderMapFactory): self
    {
        if ($this->hasSearchCriteriaSortOrderMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMapFactory = $searchCriteriaSortOrderMapFactory;

        return $this;
    }

    protected function getSearchCriteriaSortOrderMapFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaSortOrderMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMapFactory;
    }

    protected function hasSearchCriteriaSortOrderMapFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMapFactory);
    }

    protected function unsetSearchCriteriaSortOrderMapFactory(): self
    {
        if (!$this->hasSearchCriteriaSortOrderMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderMapFactory);

        return $this;
    }
}
