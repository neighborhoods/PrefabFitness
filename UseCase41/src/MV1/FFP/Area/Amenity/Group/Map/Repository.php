<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map;

use Neighborhoods\PrefabExamplesUseCase41\Doctrine;
use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\Map;
use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\Group\MapInterface;
use Neighborhoods\PrefabExamplesUseCase41\MV1\FFP\Area\Amenity\GroupInterface;
use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria;
use Neighborhoods\PrefabExamplesUseCase41\SearchCriteriaInterface;

class Repository implements RepositoryInterface
{
    use Doctrine\DBAL\Connection\Decorator\Repository\AwareTrait;
    use Map\Builder\Factory\AwareTrait;
    use SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder\Factory\AwareTrait;

    public function createBuilder(): BuilderInterface
    {
        return $this->getMV1AreaAmenityGroupMapBuilderFactory()->create();
    }

    public function get(SearchCriteriaInterface $searchCriteria): MapInterface
    {
        $queryBuilderBuilder = $this->getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()->create();
        $queryBuilderBuilder->setSearchCriteria($searchCriteria);
        $queryBuilder = $queryBuilderBuilder->build();
        $queryBuilder->from(GroupInterface::TABLE_NAME)->select('amenities_details');
        $records = $queryBuilder->execute()->fetchAll();

        return $map = $this->createBuilder()->setRecords($records)->build();
    }

    public function save(MapInterface $map): RepositoryInterface
    {
        // Use Doctrine Connection Decorator Repository to save your DAO to storage.

        return $this;
    }
}
