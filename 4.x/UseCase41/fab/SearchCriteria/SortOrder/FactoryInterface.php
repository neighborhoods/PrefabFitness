<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrderInterface;

/** @codeCoverageIgnore */
interface FactoryInterface
{
    public function create(): SortOrderInterface;
}
