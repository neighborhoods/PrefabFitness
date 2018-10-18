<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\Visitor;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\Doctrine\DBAL\Query\QueryBuilder\VisitorInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): VisitorInterface;
}
