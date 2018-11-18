<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Factory;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFactory;

    public function setSearchCriteriaFactory(FactoryInterface $searchCriteriaFactory): self
    {
        if ($this->hasSearchCriteriaFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFactory = $searchCriteriaFactory;

        return $this;
    }

    protected function getSearchCriteriaFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFactory;
    }

    protected function hasSearchCriteriaFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFactory);
    }

    protected function unsetSearchCriteriaFactory(): self
    {
        if (!$this->hasSearchCriteriaFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFactory);

        return $this;
    }
}
