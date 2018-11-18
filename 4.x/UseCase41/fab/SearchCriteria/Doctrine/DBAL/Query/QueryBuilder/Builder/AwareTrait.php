<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder;

    public function setSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(
        BuilderInterface $searchCriteriaDoctrineDBALQueryQueryBuilderBuilder
    ): self {
        if ($this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder = $searchCriteriaDoctrineDBALQueryQueryBuilderBuilder;

        return $this;
    }

    protected function getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(): BuilderInterface
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder;
    }

    protected function hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder);
    }

    protected function unsetSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(): self
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder);

        return $this;
    }
}
