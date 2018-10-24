<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder;

use Doctrine\DBAL\Query\QueryBuilder;
use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria;

interface VisitorInterface extends SearchCriteria\VisitorInterface
{
    public function getQueryBuilder(): QueryBuilder;
}
