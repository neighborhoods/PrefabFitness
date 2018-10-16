<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder;

use Doctrine\DBAL\Query\QueryBuilder;
use Neighborhoods\PrefabExamplesUseCase41\SearchCriteriaInterface;

interface BuilderInterface
{
    public function build(): QueryBuilder;

    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria);
}
