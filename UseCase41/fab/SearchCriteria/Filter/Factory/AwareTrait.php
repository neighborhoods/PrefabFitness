<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Filter\Factory;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Filter\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterFactory;

    public function setSearchCriteriaFilterFactory(FactoryInterface $searchCriteriaFilterFactory): self
    {
        if ($this->hasSearchCriteriaFilterFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterFactory = $searchCriteriaFilterFactory;

        return $this;
    }

    protected function getSearchCriteriaFilterFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaFilterFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterFactory;
    }

    protected function hasSearchCriteriaFilterFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterFactory);
    }

    protected function unsetSearchCriteriaFilterFactory(): self
    {
        if (!$this->hasSearchCriteriaFilterFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterFactory);

        return $this;
    }
}
