<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Visitor\Factory;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Visitor\FactoryInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory;

    public function setSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory(
        FactoryInterface $searchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory
    ): self {
        if ($this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory = $searchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory;

        return $this;
    }

    protected function getSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory(): FactoryInterface
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory;
    }

    protected function hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory);
    }

    protected function unsetSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory(): self
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitorFactory);

        return $this;
    }
}
