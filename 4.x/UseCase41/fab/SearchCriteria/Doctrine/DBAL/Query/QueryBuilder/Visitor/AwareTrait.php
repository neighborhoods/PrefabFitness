<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Visitor;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\VisitorInterface;

/** @codeCoverageIgnore */
trait AwareTrait
{
    protected $NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor;

    public function setSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(
        VisitorInterface $searchCriteriaDoctrineDBALQueryQueryBuilderVisitor
    ): self {
        if ($this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor is already set.');
        }
        $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor = $searchCriteriaDoctrineDBALQueryQueryBuilderVisitor;

        return $this;
    }

    protected function getSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(): VisitorInterface
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor is not set.');
        }

        return $this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor;
    }

    protected function hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(): bool
    {
        return isset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor);
    }

    protected function unsetSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor(): self
    {
        if (!$this->hasSearchCriteriaDoctrineDBALQueryQueryBuilderVisitor()) {
            throw new \LogicException('NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor is not set.');
        }
        unset($this->NeighborhoodsPrefabExamplesUseCase41SearchCriteriaDoctrineDBALQueryQueryBuilderVisitor);

        return $this;
    }
}
