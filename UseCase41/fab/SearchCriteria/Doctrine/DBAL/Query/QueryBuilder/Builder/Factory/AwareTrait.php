<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder\Factory;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory;

    public function setSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory(
        FactoryInterface $searchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory
    ): self {
        if ($this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory = $searchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory;

        return $this;
    }

    protected function getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory;
    }

    protected function hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory);
    }

    protected function unsetSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory(): self
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory);

        return $this;
    }
}
