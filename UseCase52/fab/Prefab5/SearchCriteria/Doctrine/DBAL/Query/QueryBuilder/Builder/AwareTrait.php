<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\BuilderInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder;

    public function setSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(
        BuilderInterface $searchCriteriaDoctrineDBALQueryQueryBuilderBuilder
    ): self {
        if ($this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder = $searchCriteriaDoctrineDBALQueryQueryBuilderBuilder;

        return $this;
    }

    protected function getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(): BuilderInterface
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder;
    }

    protected function hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder);
    }

    protected function unsetSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder(): self
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderBuilder);

        return $this;
    }
}
