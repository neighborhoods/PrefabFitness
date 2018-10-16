<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder\Factory;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderFactory;

    public function setSearchCriteriaSortOrderFactory(FactoryInterface $searchCriteriaSortOrderFactory): self
    {
        if ($this->hasSearchCriteriaSortOrderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderFactory = $searchCriteriaSortOrderFactory;

        return $this;
    }

    protected function getSearchCriteriaSortOrderFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaSortOrderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderFactory;
    }

    protected function hasSearchCriteriaSortOrderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderFactory);
    }

    protected function unsetSearchCriteriaSortOrderFactory(): self
    {
        if (!$this->hasSearchCriteriaSortOrderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaSortOrderFactory);

        return $this;
    }
}
