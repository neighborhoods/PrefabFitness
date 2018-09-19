<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessJakeService\Jake;

use Neighborhoods\PrefabFitnessJakeService\Doctrine;
use Neighborhoods\PrefabFitnessJakeService\Jake;
use Neighborhoods\PrefabFitnessJakeService\JakeInterface;
use Neighborhoods\PrefabFitnessJakeService\SearchCriteria;
use Neighborhoods\PrefabFitnessJakeService\SearchCriteriaInterface;

class Repository implements RepositoryInterface
{
    use Doctrine\DBAL\Connection\Decorator\Repository\AwareTrait;
    use Jake\Builder\Factory\AwareTrait;
    use SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder\Factory\AwareTrait;

    public function createBuilder() : BuilderInterface
    {
        return $this->getJakeBuilderFactory()->create();
    }

    public function get(SearchCriteriaInterface $searchCriteria) : MapInterface
    {
        $queryBuilderBuilder = $this->getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()->create();
        $queryBuilderBuilder->setSearchCriteria($searchCriteria);
        $queryBuilder = $queryBuilderBuilder->build();
        $queryBuilder->from(JakeInterface::TABLE_NAME)->select('*');
        $records = $queryBuilder->execute()->fetchAll();

        return $jake = $this->createBuilder()->setRecords($records)->build();
    }

    public function save(MapInterface $map) : RepositoryInterface
    {
        // Use Doctrine Connection Decorator Repository to save your DAO to storage.

        return $this;
    }
}
