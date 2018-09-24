<?php

namespace Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah;

class Repository implements RepositoryInterface
{

    use Neighborhoods\PrefabExamplesJakeService\Doctrine\DBAL\Connection\Decorator\Repository\AwareTrait, Neighborhoods\PrefabExamplesJakeService\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder\Factory\AwareTrait, Neighborhoods\PrefabExamplesJakeService\SearchCriteriaInterface;

    public function createBuilder() : \Neighborhoods\Prefab\Repository\BuilderInterface
    {
        return $this->getNeighborhoodsPrefabExamplesJakeServiceMV1JakeNoahBuilderFactory()->create();
    }

    public function get(\Neighborhoods\PrefabExamplesJakeService\SearchCriteriaInterface $searchCriteria) : \Neighborhoods\Prefab\Repository\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\MapInterface
    {
        $queryBuilderBuilder = $this->getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()->create();
        $queryBuilderBuilder->setSearchCriteria($searchCriteria);
        $queryBuilder = $queryBuilderBuilder->build();
        $queryBuilder->from(Neighborhoods\PrefabExamplesJakeService\MV1\Jake\NoahInterface::TABLE_NAME)->select('*');
        $records = $queryBuilder->execute()->fetchAll();

        return $this->createBuilder()->setRecords($records)->build();
    }

    public function save(\Neighborhoods\Prefab\Repository\MapInterface $map) : \Neighborhoods\Prefab\Repository\Neighborhoods\PrefabExamplesJakeService\MV1\Jake\Noah\RepositoryInterface
    {
        // Use Doctrine Connection Decorator Repository to save your DAO to storage.

        return $this;
    }


}

