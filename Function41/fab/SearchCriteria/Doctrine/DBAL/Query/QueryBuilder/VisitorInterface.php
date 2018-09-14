<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesFunction41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder;

use Doctrine\DBAL\Query\QueryBuilder;
use Neighborhoods\PrefabExamplesFunction41\SearchCriteria;

interface VisitorInterface extends SearchCriteria\VisitorInterface
{
    public function getQueryBuilder(): QueryBuilder;
}
