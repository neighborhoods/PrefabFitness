<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Visitor;

use Neighborhoods\PrefabFitnessUseCase52\Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\VisitorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor;

    public function setSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(
        VisitorInterface $searchCriteriaDoctrineDBALQueryQueryBuilderVisitor
    ): self {
        if ($this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor is already set.');
        }
        $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor = $searchCriteriaDoctrineDBALQueryQueryBuilderVisitor;

        return $this;
    }

    protected function getSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(): VisitorInterface
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor is not set.');
        }

        return $this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor;
    }

    protected function hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(): bool
    {
        return isset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor);
    }

    protected function unsetSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(): self
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor()) {
            throw new \LogicException('NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor is not set.');
        }
        unset($this->NeighborhoodsPrefabFitnessUseCase52SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor);

        return $this;
    }
}
