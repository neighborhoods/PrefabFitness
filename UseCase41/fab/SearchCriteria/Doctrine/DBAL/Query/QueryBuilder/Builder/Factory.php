<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\BuilderInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilder();
    }
}
