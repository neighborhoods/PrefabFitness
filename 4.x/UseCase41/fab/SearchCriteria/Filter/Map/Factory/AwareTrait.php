<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Filter\Map\Factory;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Filter\Map\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMapFactory;

    public function setSearchCriteriaFilterMapFactory(FactoryInterface $searchCriteriaFilterMapFactory): self
    {
        if ($this->hasSearchCriteriaFilterMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMapFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMapFactory = $searchCriteriaFilterMapFactory;

        return $this;
    }

    protected function getSearchCriteriaFilterMapFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaFilterMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMapFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMapFactory;
    }

    protected function hasSearchCriteriaFilterMapFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMapFactory);
    }

    protected function unsetSearchCriteriaFilterMapFactory(): self
    {
        if (!$this->hasSearchCriteriaFilterMapFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMapFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaFilterMapFactory);

        return $this;
    }
}
