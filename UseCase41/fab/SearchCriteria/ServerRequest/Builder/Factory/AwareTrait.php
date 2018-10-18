<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\ServerRequest\Builder\Factory;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\ServerRequest\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilderFactory;

    public function setSearchCriteriaServerRequestBuilderFactory(
        FactoryInterface $searchCriteriaServerRequestBuilderFactory
    ): self {
        if ($this->hasSearchCriteriaServerRequestBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilderFactory = $searchCriteriaServerRequestBuilderFactory;

        return $this;
    }

    protected function getSearchCriteriaServerRequestBuilderFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaServerRequestBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilderFactory;
    }

    protected function hasSearchCriteriaServerRequestBuilderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilderFactory);
    }

    protected function unsetSearchCriteriaServerRequestBuilderFactory(): self
    {
        if (!$this->hasSearchCriteriaServerRequestBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaServerRequestBuilderFactory);

        return $this;
    }
}
