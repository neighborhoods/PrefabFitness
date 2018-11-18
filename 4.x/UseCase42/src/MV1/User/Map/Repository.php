<?php

namespace Neighborhoods\UseCase42\MV1\User\Map;

class Repository implements RepositoryInterface
{

    use \Neighborhoods\UseCase42\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder\Factory\AwareTrait, \Neighborhoods\UseCase42\MV1\User\Map\Builder\Factory\AwareTrait, \Neighborhoods\UseCase42\MV1\User\Map\Factory\AwareTrait, \Neighborhoods\UseCase42\Doctrine\DBAL\Connection\Decorator\Repository\AwareTrait;

    public function createBuilder() : \Neighborhoods\UseCase42\MV1\User\Map\BuilderInterface
    {
        return $this->getMV1UserMapBuilderFactory()->create();
    }

    public function get(\Neighborhoods\UseCase42\SearchCriteriaInterface $searchCriteria) : \Neighborhoods\UseCase42\MV1\User\MapInterface
    {
        // Note: We are returning an array here because prefab fitness doesn't have a databse backing it
        $records = [
            [
                'id' => 123,
                'key' => 'abcdef123',
                'fname' => 'John',
                'lname' => 'Doe',
                'email' => 'john.doe@neighborhoods.com',
                'status' => 'active',
                'phone' => '8675309',
                'verified' => true,
            ]
        ];

        return $this->createBuilder()->setRecords($records)->build();
    }

    public function save(\Neighborhoods\UseCase42\MV1\User\MapInterface $map) : \Neighborhoods\UseCase42\MV1\User\Map\RepositoryInterface
    {
        // Use Doctrine Connection Decorator Repository to save your DAO to storage.

        return $this;
    }


}

