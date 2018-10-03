<?php

namespace Neighborhoods\Function42\MV1\User;

class Repository implements RepositoryInterface
{

    use \Neighborhoods\Function42\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Builder\Factory\AwareTrait, \Neighborhoods\Function42\MV1\User\Map\Builder\Factory\AwareTrait, \Neighborhoods\Function42\MV1\User\Map\Factory\AwareTrait, \Neighborhoods\Function42\Doctrine\DBAL\Connection\Decorator\Repository\AwareTrait;

    public function createBuilder() : \Neighborhoods\Function42\MV1\User\Map\BuilderInterface
    {
        return $this->getMV1UserMapBuilderFactory()->create();
    }

    public function get(\Neighborhoods\Function42\SearchCriteriaInterface $searchCriteria) : \Neighborhoods\Function42\MV1\User\MapInterface
    {
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

    public function save(\Neighborhoods\Function42\MV1\User\MapInterface $map) : \Neighborhoods\Function42\MV1\User\RepositoryInterface
    {
        // Use Doctrine Connection Decorator Repository to save your DAO to storage.

        return $this;
    }


}

