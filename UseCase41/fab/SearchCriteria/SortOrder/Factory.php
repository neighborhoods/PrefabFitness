<?php
declare(strict_types=1);

namespace Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrder;

use Neighborhoods\PrefabExamplesUseCase41\SearchCriteria\SortOrderInterface;

/** @codeCoverageIgnore */
class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): SortOrderInterface
    {
        return clone $this->getSearchCriteriaSortOrder();
    }
}
