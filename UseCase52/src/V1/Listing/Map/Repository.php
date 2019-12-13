<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Query\QueryBuilder;
use Jaeger\Jaeger;
use Neighborhoods\PrefabFitnessUseCase52\Prefab5;
use Neighborhoods\PrefabFitnessUseCase52\V1\Listing;
use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\Map;
use Neighborhoods\PrefabFitnessUseCase52\V1\Listing\MapInterface;
use Neighborhoods\PrefabFitnessUseCase52\V1\ListingInterface;

class Repository implements RepositoryInterface
{
    use Listing\Map\Builder\Factory\AwareTrait;
    use Prefab5\Doctrine\DBAL\Connection\Decorator\Repository\AwareTrait;
    use Prefab5\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder\Factory\AwareTrait;

    protected $connection;
    /** @var Jaeger */
    protected $tracer;

    protected const JSON_COLUMNS = [

    ];

    public function createBuilder() : Map\BuilderInterface
    {
        return $this->getV1ListingMapBuilderFactory()->create();
    }

    public function get(Prefab5\SearchCriteriaInterface $searchCriteria) : MapInterface
    {
        $repositorySpan = $this->getTracer()->startActiveSpan('ListingRepository-get');
        $queryBuilderBuilder = $this->getSearchCriteriaDoctrineDBALQueryQueryBuilderBuilderFactory()->create();
        $queryBuilderBuilder->setSearchCriteria($searchCriteria);
        $queryBuilder = $queryBuilderBuilder->build();
        $queryBuilder->from(ListingInterface::TABLE_NAME)->select('*');
        $records = $queryBuilder->execute()->fetchAll();

        foreach ($records as $key => $record) {
            foreach (self::JSON_COLUMNS as $jsonColumn) {
                $records[$key][$jsonColumn] = json_decode($records[$key][$jsonColumn], true);
            }
        }

        $repositorySpan->close();
        return $this->createBuilder()->setRecords($records)->build();
    }

    /** @deprecated - use insert() */
    public function save(MapInterface $map) : RepositoryInterface
    {
        return $this->insert($map);
    }

    public function insert(MapInterface $map) : RepositoryInterface
    {
        $connection = $this->getConnection();
        try {
            $connection->beginTransaction();
            foreach ($map as $record) {
                $this->insertElement($connection->createQueryBuilder(), $record);
            }
            $connection->commit();
        } catch (\Throwable $e) {
            $connection->rollBack();
            throw $e;
        }

        return $this;
    }

    public function getTracer() : Jaeger
    {
        if ($this->tracer === null) {
            throw new \LogicException('Repository tracer has not been set.');
        }

        return $this->tracer;
    }

    public function setTracer(Jaeger $tracer) : RepositoryInterface
    {
        if ($this->tracer !== null) {
            throw new \LogicException('Repository tracer is already set.');
        }

        $this->tracer = $tracer;

        return $this;
    }

    protected function insertElement(QueryBuilder $queryBuilder,
                                     ListingInterface $Listing) : ListingInterface
    {
        $values = [];

        $values[ListingInterface::PROP_STREET_ADDRESS] = 
            $queryBuilder->createNamedParameter($Listing->getStreetAddress());
        $values[ListingInterface::PROP_CITY] = 
            $queryBuilder->createNamedParameter($Listing->getCity());
        $values[ListingInterface::PROP_STATE] = 
            $queryBuilder->createNamedParameter($Listing->getState());
        $values[ListingInterface::PROP_POSTAL_CODE] = 
            $queryBuilder->createNamedParameter($Listing->getPostalCode());
        
        if ($Listing->hasLatitude()) {
            $values[ListingInterface::PROP_LATITUDE] = 
            $queryBuilder->createNamedParameter($Listing->getLatitude());
        }
        
        if ($Listing->hasLongitude()) {
            $values[ListingInterface::PROP_LONGITUDE] = 
            $queryBuilder->createNamedParameter($Listing->getLongitude());
        }
        $values[ListingInterface::PROP_BEDROOMS] = 
            $queryBuilder->createNamedParameter($Listing->getBedrooms());
        $values[ListingInterface::PROP_BATHROOMS] = 
            $queryBuilder->createNamedParameter($Listing->getBathrooms());
        $values[ListingInterface::PROP_LIST_PRICE] = 
            $queryBuilder->createNamedParameter($Listing->getListPrice());
        $values[ListingInterface::PROP_YEAR_BUILT] = 
            $queryBuilder->createNamedParameter($Listing->getYearBuilt());
        $values[ListingInterface::PROP_SQ_FT] = 
            $queryBuilder->createNamedParameter($Listing->getSqFt());
        $values[ListingInterface::PROP_PARKING_SPACES] = 
            $queryBuilder->createNamedParameter($Listing->getParkingSpaces());


        $queryBuilder
            ->insert(ListingInterface::TABLE_NAME)
            ->values($values);
        $queryBuilder->execute();
        $lastInsertId = $queryBuilder->getConnection()->lastInsertId();
        if (!is_numeric($lastInsertId)) {
            throw new \LogicException('V1Listing inserted with non-numeric ID: ' . $lastInsertId);
        }

        return $Listing;
    }

    public function update(MapInterface $map) : RepositoryInterface
    {
        $connection = $this->getConnection();
        try {
            $connection->beginTransaction();
            foreach ($map as $record) {
                $this->updateElement($connection->createQueryBuilder(), $record);
            }
            $connection->commit();
        } catch (\Throwable $e) {
            $connection->rollBack();
            throw $e;
        }

        return $this;
    }

    protected function updateElement(QueryBuilder $queryBuilder,
                                     ListingInterface $Listing) : ListingInterface
    {
        $queryBuilder->set(ListingInterface::PROP_STREET_ADDRESS, 
            $queryBuilder->createNamedParameter($Listing->getStreetAddress()));
        $queryBuilder->set(ListingInterface::PROP_CITY, 
            $queryBuilder->createNamedParameter($Listing->getCity()));
        $queryBuilder->set(ListingInterface::PROP_STATE, 
            $queryBuilder->createNamedParameter($Listing->getState()));
        $queryBuilder->set(ListingInterface::PROP_POSTAL_CODE, 
            $queryBuilder->createNamedParameter($Listing->getPostalCode()));
        
        if ($Listing->hasLatitude()) {
            $queryBuilder->set(ListingInterface::PROP_LATITUDE, 
            $queryBuilder->createNamedParameter($Listing->getLatitude()));
        }
        
        if ($Listing->hasLongitude()) {
            $queryBuilder->set(ListingInterface::PROP_LONGITUDE, 
            $queryBuilder->createNamedParameter($Listing->getLongitude()));
        }
        $queryBuilder->set(ListingInterface::PROP_BEDROOMS, 
            $queryBuilder->createNamedParameter($Listing->getBedrooms()));
        $queryBuilder->set(ListingInterface::PROP_BATHROOMS, 
            $queryBuilder->createNamedParameter($Listing->getBathrooms()));
        $queryBuilder->set(ListingInterface::PROP_LIST_PRICE, 
            $queryBuilder->createNamedParameter($Listing->getListPrice()));
        $queryBuilder->set(ListingInterface::PROP_YEAR_BUILT, 
            $queryBuilder->createNamedParameter($Listing->getYearBuilt()));
        $queryBuilder->set(ListingInterface::PROP_SQ_FT, 
            $queryBuilder->createNamedParameter($Listing->getSqFt()));
        $queryBuilder->set(ListingInterface::PROP_PARKING_SPACES, 
            $queryBuilder->createNamedParameter($Listing->getParkingSpaces()));

        $queryBuilder
            ->update(ListingInterface::TABLE_NAME)
            ->where($queryBuilder->expr()->eq(
                ListingInterface::PROP_ID, $Listing->getId()
            ));
        $queryBuilder->execute();

        return $Listing;
    }

    protected function getConnection() : Connection
    {
        if ($this->connection === null) {
            $this->connection = $this->getDoctrineDBALConnectionDecoratorRepository()->get(Doctrine\DBAL\Connection\DecoratorInterface::ID_CORE)
                ->getDoctrineConnection();
        }

        return $this->connection;
    }
}
